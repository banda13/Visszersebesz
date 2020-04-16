<?php include("header.php") ?>
<link rel="stylesheet" href="/css/google_maps.css">

<?php echo file_get_contents("html/elerhetoseg.html"); ?>

<?php include("footer.php") ?>

<script>
    $(document).ready(function () {
        function loadGoogleMaps() {
            const script_tag = document.createElement('script');
            script_tag.setAttribute("type", "text/javascript");

            $.get("/api/read_api_keys.php?key=google_map", function (mapKey) {
                mapKey = mapKey.replace(new RegExp('"', 'g'), '');
                script_tag.setAttribute("src", "https://maps.googleapis.com/maps/api/js?key=" + mapKey + "&callback=gMapsCallback");
                (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
                console.log("Google maps api script loaded");
            });
        }

        let sote_map, buda_map, vpmed_map;

        function initMap() {

            console.log("Initializing maps");
            // The location of Uluru
            const sote_uluru = {lat: 47.507146, lng: 19.013559};
            const buda_uluru = {lat: 47.495710, lng: 19.022243};
            const vpmed_uluru = {lat: 47.561258, lng: 19.086339};

            sote_map = new google.maps.Map(document.getElementById('map_sote'), {zoom: 17, center: sote_uluru});
            buda_map = new google.maps.Map(document.getElementById('map_buda'), {zoom: 17, center: buda_uluru});
            vpmed_map = new google.maps.Map(document.getElementById('map_vpmed'), {zoom: 17, center: vpmed_uluru});

            const sote_marker = new google.maps.Marker({position: sote_uluru, map: sote_map});
            const buda_marker = new google.maps.Marker({position: buda_uluru, map: buda_map});
            const vpmed_marker = new google.maps.Marker({position: vpmed_uluru, map: vpmed_map});
        }

        window.gMapsCallback = function () {
            $(window).trigger('gMapsLoaded');
        };
        $(window).bind('gMapsLoaded', initMap);

        loadGoogleMaps();
    });
</script>



