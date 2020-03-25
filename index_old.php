<div id="header"></div>

    <div id="welcome_container"></div>

    <div id="introduction_container"></div>

    <div id="contact_container"></div>

    <div id="knowledge_container"></div>

    <div id="blog_container"></div>

    <div id="q_and_a_container"></div>

    <div id="references_container"></div>

    <div id="keywords_container"></div>

    <!-- Tempolary section (modals etc)-->

    <div id="corona_modal_container"></div>

<!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>Powered by <i>Andy</i></p>
    </footer>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-app.js"></script>

<!--https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-analytics.js"></script>

<!-- JQuery -->>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function toggleFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") === -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }


        $(document).ready(function () {
            // Load modules
            $(function(){
                $("#navigation_container").load("html/navigation_section.html", function(){
                    window.onscroll = function () {
                        myFunction()
                    };
                });
                console.log("Navigation section loaded");

                $("#welcome_container").load("html/welcome_section.html");
                console.log("Welcome section loaded");

                /*$("#introduction_container").load("html/introduction_section.html");
                console.log("Introduction section loaded");
                $("#contact_container").load("html/contact_section.html");
                console.log("Contact section loaded");
                $("#knowledge_container").load("html/knowledge_section.html");
                console.log("Knowledge section loaded");
                $("#blog_container").load("html/blog_section.html");
                console.log("Blog section loaded");
                $("#q_and_a_container").load("html/q_and_a_section.html");
                console.log("Q and A section loaded");
                $("#references_container").load("html/references_section.html");
                console.log("References section loaded");
                $("#keywords_container").load("html/keywords_section.html");
                console.log("Keywords section loaded");
                */

                $("#corona_modal_container").load("html/corona_modal.html", function () {
                    document.getElementById('corona_modal_div').style.display='block';
                });
                console.log("Corona modal loaded");
            });

            function myFunction() {
                var navbar = document.getElementById("navigation_bar");
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-dark-gray";
                } else {
                    navbar.className = navbar.className.replace("w3-card w3-animate-top", "");
                }
            }

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

            window.gMapsCallback = function(){
                $(window).trigger('gMapsLoaded');
            };
            $(window).bind('gMapsLoaded', initMap);

            loadGoogleMaps();

        });
    </script>
</body>
</html>
