<?php echo file_get_contents("html/header.html"); ?>

<?php echo file_get_contents("html/contact.html"); ?>

<?php echo file_get_contents("html/footer.html"); ?>

<script>

    $(document).ready(function () {
        function loadGoogleMaps() {
            const script_tag = document.createElement('script');
            script_tag.setAttribute("type", "text/javascript");

            //TODO add some (more) security!
            $.get("/api/read_api_keys.php?key=google_map", function (mapKey) {
                mapKey = mapKey.replace(new RegExp('"', 'g'), '');
                script_tag.setAttribute("src", "https://maps.googleapis.com/maps/api/js?key=" + mapKey + "&callback=gMapsCallback");
                (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
            });
        }

        let sote_map, buda_map, vpmed_map;

        function initMap() {

            // The location of Uluru
            const sote_uluru = {lat: 47.507243, lng: 19.0119703};
            const buda_uluru = {lat: 47.4959378, lng: 19.0201113};
            const vpmed_uluru = {lat: 47.560795, lng: 19.0839353};

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
