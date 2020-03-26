<?php echo file_get_contents("html/header.html"); ?>

<?php
if (isset($_GET['post'])) {
    echo file_get_contents("html/blog_post.html");
} else {
    echo file_get_contents("html/blog.html");
}

?>

<?php echo file_get_contents("html/footer.html"); ?>


