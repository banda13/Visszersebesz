<?php echo file_get_contents("html/header.html"); ?>

<div class="w3-content w3-container w3-padding-64" id="contact">
    <?php
    include 'api/utils.php';

    class ResponseItem
    {
        public $response_text;
        public $response_file;

        public function __construct($response_text, $response_file)
        {
            $this->response_text = $response_text;
            $this->response_file = $response_file;
        }

        public function getResponseText()
        {
            return $this->response_text;
        }

        public function getResponseFile()
        {
            return $this->response_file;
        }
    }

    $text = $_GET['search'];
    $lookups = json_decode(file_get_contents("api/resources/search_lookup.json"));

    function search($text)
    {
        global $lookups;
        if (strlen($text) <= 3) {
            throw new Exception("<h1>Legalább 3 karaktert adjon meg a kereséshez</h1>");
        }

        // check every html file in this directories
        $paths = ['html/', 'blog/posts/', 'blog/posts_content/'];

        $routs = scandir(".");
        $exclude_php = ["index_old.php", "keywords.php"];
        $response = array();


        foreach ($paths as $path) {
            $files = scandir($path);

            // very studip way to implement full text search but at least as long as the site is not too long and dynamic its fast
            foreach ($files as $filename) {
                if (endsWith($filename, '.html')) {
                    $content = file_get_contents($path . $filename);

                    //check if string occur in the current file and if yes get first position
                    $pos = stripos($content, $text);
                    if ($pos == true) {
                        // if the string is in the title add some shift until the next closing tag
                        $close_tag_pos = stripos(substr($content, $pos, $pos+200), "</");
                        if($content[$pos + $close_tag_pos+2] == 'h'){
                            $pos += $close_tag_pos + 10;
                        }

                        //get the content of the current file until the occurence
                        $content = substr($content, 0, $pos);
                        $sub_titles = array();
                        $main_titles = array();
                        $ids = array();

                        //Find the headers in the splitted text
                        $sub_title_pattern = "/<h[3-5] ?.*>(.*)<\/h[3-5]>/";
                        $main_title_pattern = "/<h[0-2] ?.*>(.*)<\/h[0-2]>/";
                        preg_match($sub_title_pattern, $content, $sub_titles);
                        preg_match($main_title_pattern, $content, $main_titles);


                        // remove empty elements from the array
                        $main_titles = array_filter($main_titles, fn($value) => !is_null($value) && $value !== '');
                        $sub_titles = array_filter($sub_titles, fn($value) => !is_null($value) && $value !== ''); //PHP 7.4+ required!

                        // find the path for the file in which we found the match
                        $f = str_replace(".html", ".php", $filename);
                        if ($path == 'blog/posts_content/') {
                            $f = "blog.php?post=" . str_replace(".php", "", $f);
                        } elseif ($path == 'blog/posts/') {
                            $f = "blog.php";
                        } elseif (!in_array($f, $routs)) {
                            if (isset($lookups->url_mappings->$f)) {
                                $f = $lookups->url_mappings->$f;
                            } else {
                                // TODO report some error -> not to the user & log it
                                //throw new Exception("Nem sikerült végrehajtani a keresést mert nem található az egyik elérési útvonal:" . $f);
                                continue;
                            }
                        } else {
                            //this case is ok, the name of the file matched with a path, ideal case
                        }

                        //find the paragraph which is closest to the search word
                        $id_pattern = '/id=\"([^\"]*)\"/';
                        preg_match_all($id_pattern, $content, $ids);
                        $ids = $ids[1];
                        if($ids && $ids != "" && end($ids) && end($ids) != ""){
                            $f .= "#".(str_replace('"', '', end($ids))); // in case somebody did a mistake
                        }

                        //check if the current file is not in an ignore list and its a valid path
                        if (!in_array($f, $exclude_php)) {
                            if (empty($sub_titles) && empty($main_titles)) {
                                //in this case there is no header found in text, try to look up
                                if (isset($lookups->name_mappings->$f)) {
                                    $r = new ResponseItem("<b>" . $lookups->name_mappings->$f . "</b><br> ", $f);
                                    array_push($response, $r);
                                } else {
                                    // TODO report some error
                                    $r = new ResponseItem("<b> Névtelen </b><b>", $f);
                                    array_push($response, $r);
                                }
                            } else {
                                //get the last occurence of the headers from the splitted text
                                $response_text = "";
                                if ($path == 'blog/posts_content/') {
                                    $response_text = "<h4><b>Blog bejegyzés</b></h4>";
                                } elseif ($path == 'blog/posts/') {
                                    $response_text = "<h4><b>Blog</b></h4>";
                                }

                                if (end($main_titles)) {
                                    $response_text = $response_text."<h4><b>" . end($main_titles) . "</b></h4> <h5>" . end($sub_titles) ."</h5>";
                                } else {
                                    $response_text = $response_text."<h4><b>" . end($sub_titles) . "</b></h4>";
                                }
                                $r = new ResponseItem($response_text, $f);
                                array_push($response, $r);
                            }

                        }
                    }
                }
            }
        }

        if (empty($response)) {
            throw new Exception("Sajnos nincs találat, kérjük próbáljon más kifejezést");
        }
        return $response;
    }

    ?>

    <?php
    try {
        echo("<h1>A keresett kifejezés: $text</h1><hr>");
        $response = search($text);
        foreach ($response as $r) {
            $link = "location.href='/" . $r->getResponseFile() . "'";
            echo("<div onclick=" . $link . " class='w3-card w3-padding-64 w3-center'>" . $r->getResponseText() . "</div><br>");
        }
    } catch (Exception $e) {
        echo("<h1>" . $e->getMessage() . "</h1>");
    }
    ?>
</div>

<?php echo file_get_contents("html/footer.html"); ?>


