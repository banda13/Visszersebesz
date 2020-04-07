<?php include("header.php") ?>

<?php echo file_get_contents("html/index.html"); ?>

<?php include("footer.php") ?>

<div id="corona_modal_container"></div>

<script>

    $(document).ready(function () {
        $("#corona_modal_container").load("html/corona_modal.html", function () {
            document.getElementById('corona_modal_div').style.display = 'block';
        });
    });

</script>
