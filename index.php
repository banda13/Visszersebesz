<?php echo file_get_contents("html/header.html"); ?>

<?php echo file_get_contents("html/welcome.html"); ?>

<div id="corona_modal_container"></div>

<?php echo file_get_contents("html/footer.html"); ?>

<script>
    $(document).ready(function () {
        $("#corona_modal_container").load("html/corona_modal.html", function () {
            document.getElementById('corona_modal_div').style.display = 'block';
        });
    });
</script>
