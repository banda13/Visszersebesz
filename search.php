<?php echo file_get_contents("html/header.html"); ?>

<div class="w3-content w3-container w3-padding-64" id="contact">
    <?php
    include 'api/utils.php';

    $text = $_GET['text'];

    function search($text)
    {
        if (strlen($text) < 3) {
            throw new Exception("<h1>Legalább 3 karaktert adjon meg a kereséshez</h1>");
        }
        $path = "html/";

        $exclude_php = ["index_old.php"];
        $files = scandir($path);
        $routs = scandir(".");
        $response_temp = array();

        // very studip way to implement full text search but at least as long as the site is not too long and dynamic its fast
        foreach ($files as $filename) {
            if (endsWith($filename, '.html')) {
                $content = file_get_contents($path . $filename);

                if (stripos($content, $text) == true) {
                    $f = str_replace(".html", ".php", $filename);
                    if (!in_array($f, $exclude_php) && in_array($f, $routs)) {
                        array_push($response_temp, $f);
                    }
                }
            }
        }

        if (empty($response_temp)) {
            throw new Exception("Sajnos nincs találat, kérjük próbáljon más kifejezést");
        }

        return $response_temp;
    }

    ?>

    <?php
    try {
        foreach (search($text) as $file) {
            echo("<div onclick=location.href='/$file' class='w3-card w3-padding-64 w3-center'>" . $file . "</div>");
        }
    } catch (Exception $e) {
        echo("<h1>" . $e->getMessage() . "</h1>");
    }
    ?>
</div>

<?php echo file_get_contents("html/footer.html"); ?>


