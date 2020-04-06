<?php include("header.php") ?>


<?php
if (isset($_GET['post'])) {
    echo file_get_contents("html/blog_post.html");
} else {
    echo file_get_contents("html/blog.html");
}

?>


