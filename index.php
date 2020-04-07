<?php include("header.php") ?>

<?php echo file_get_contents("html/index.html"); ?>

<?php include("footer.php") ?>

<div id="corona_modal_container"></div>

<script>

    $(document).ready(function () {
        $("#corona_modal_container").load("html/modals/corona_modal.html", function () {
            $('#corona_modal_div').modal('show');
        });
    });

</script>
