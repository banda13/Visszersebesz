<!DOCTYPE html>
<html>
<title>Visszér sebész</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/delej.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="shortcut icon" href="#"> <!-- TODO make own icon -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Lato", sans-serif;
    }

    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('/images/vascular_stock.jpg');
        min-height: 100%;
    }

    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .w3-wide {
        letter-spacing: 10px;
    }

    .w3-hover-opacity {
        cursor: pointer;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
        }
    }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-dark-gray" id="navigation_bar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);"
           onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button">HOME</a>
        <a href="#welcome" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-"></i>Köszöntő</a>
        <a href="#introduction" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Bemutatkozás</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-phone"></i>
            Munkahelyek/elérhetőségek</a>
        <a href="#welcome" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-book"></i> Érbetegségek –
            alapismeretek és műtétek</a>
        <a href="#welcome" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-search"></i> Blog</a>
        <a href="#welcome" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-users"></i> Orvos válaszol</a>
        <a href="#welcome" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-link"></i> Hivatkozások</a>
        <a href="#welcome" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-font"></i> Kulcsszavak</a>


        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
            <i class="fa fa-search"></i>
        </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#welcome" class="w3-bar-item w3-button" onclick="toggleFunction()">Köszöntő</a>
        <a href="#introduction" class="w3-bar-item w3-button" onclick="toggleFunction()">Bemutatkozás</a>
        <a href="#workandcontact" class="w3-bar-item w3-button" onclick="toggleFunction()">Munkahelyek/elérhetőségek</a>
        <a href="#" class="w3-bar-item w3-button">Keresés</a>
    </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Visszér sebész</span>
    </div>
</div>

<!-- Container (Welcome Section) -->
<div class="w3-content w3-container w3-padding-64" id="welcome">
    <h2 class="w3-center">KÖSZÖNTŐ</h2>
    <p>Tíz év általános sebészeti tevékenység után specializálódtam az érsebészetre, melyet húsz éve
        gyakorlok. Munkám során az érbetegségek minden műtétet igénylő betegségét ellátom, mind a
        hagyományos, mind a világban elérhető legmodernebb műtéti technikák rendelkezésre állnak.
        Tervezett műtétre az ország bármely részéről érkező beteget fel tudunk venni.</p>

    <div class="w3-ul">
        <h4>Legfontosabb területek:</h4>
        <div class="w3-li w3-margin-bottom">
            <div class="w3-margin-left">
                <i class="fa fa-circle w3-margin-right"></i> Nyaki erek sebészete (carotis), stroke prevenció
            </div>
        </div>
        <div class="w3-li w3-margin-bottom">
            <div class="w3-margin-left">
                <i class="fa fa-circle w3-margin-right"></i> Hasi és alsó végtagi érszűkületes betegségek gyógyszeres és
                műtéti kezelése
            </div>
        </div>
        <div class="w3-li w3-margin-bottom">
            <div class="w3-margin-left">
                <i class="fa fa-circle w3-margin-right"></i> Verőértágulatok (aneurysma) nyitott és endovascularis
                (stentgraft) kezelése az aorta mellkasi
                és hasi szakaszán, a perifériákon
            </div>

        </div>
        <div class="w3-li w3-margin-bottom">
            <div class="w3-margin-left">
                <i class="fa fa-circle w3-margin-right"></i> Visszerek nyitott műtéti és modern endovénás (lézeres,
                radioferkvenciás, ragasztásos)
                kezelése valamint sclerotherapia
            </div>
        </div>

        <div class="w3-ul">
            <h4>Ambuláns betegvizsgálat és előjegyzés:</h4>
            <div class="w3-li w3-margin-bottom">
                <div class="w3-margin-left">
                    <i class="fa fa-circle w3-margin-right"></i> Semmelweis Egyetem Szív- és Érgyógyászati Klinika,
                    ambulancia:
                    <p class="w3-margin-left">OEP rendelés, előzetes időpont-biztosítás <a href="tel:+3614586800">
                            (+3614586800) </a> és beutaló szükséges </p>
                </div>
            </div>
            <div class="w3-li w3-margin-bottom">
                <div class="w3-margin-left">
                    <i class="fa fa-circle w3-margin-right"></i> Budai Egészségközpont, ambulancia:
                    <p class="w3-margin-left">Magánrendelés, előzetes időpont-biztosítás <a href="tel:+3614895200">
                            (+3614895200) </a> szükséges </p>
                </div>
            </div>
        </div>
        <div class="w3-ul">
            <h4>Műtétek:</h4>
            <div class="w3-li w3-margin-bottom">
                <div class="w3-margin-left">
                    <i class="fa fa-circle w3-margin-right"></i> Semmelweis Egyetem Szív- és Érgyógyászati Klinika::
                    <p class="w3-margin-left">minden artériás műtét (carotis, aneurysma, alsó végtag) és hagyományos,
                        nyitott visszérműtétek – OEP finanszírozással </p>
                </div>
            </div>
            <div class="w3-li w3-margin-bottom">
                <div class="w3-margin-left">
                    <i class="fa fa-circle w3-margin-right"></i> VP-MED Egészségcentrum:
                    <p class="w3-margin-left">modern visszérműtétek (lézeres, radiofrekvenciás, ragasztásos) –
                        magánrendelés keretében </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Container (Introduction Section) -->
    <div class="w3-content w3-container w3-padding-64" id="introduction">
        <h2 class="w3-center">Bemutatkozás</h2>

        <h4 class="w3-center">Tanulmányaim</h4>
        <h4 class="w3-center">Munkahelyek, beosztások</h4>
        <h4 class="w3-center">Nyelvvizsgák</h4>
        <h4 class="w3-center">Tagságok</h4>
        <h4 class="w3-center">Szcientriai mutatók</h4>
        <h4 class="w3-center">Oktatás</h4>

    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">MUNKAHELYEK, ELÉRHETŐSÉG</h3>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m6 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <h4><b> Semmelweis Egyetem Szív-és Érsebészeti Klinika, Érsebészeti Tanszék</b></h4>
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Budapest, 1122
                    Városmajor utca 68.<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Ambulancia időpont:
                    <a href="tel:+36145868800"> +36145868800</a><br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a
                            href="mailto:info@kardio.sote.hu">info@kardio.sote.hu</a><br>
                    <i class="fa fa-user fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Rendelési idő: kedd,
                    9-14 óra<br>
                    <i class="fa fa-info fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Tevékenység: <br>
                    Ambuláns rendelés, teljes artériás érsebészeti betegségcsoport műtétei és hagyományos
                    nyitott visszérműtét<br>
                    <i class="fa fa-map-signs fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>
                    Megközelítés:<br>
                    128 vagy 129 busz és 20m séta <br>
                    3 Metro Széll Kálmán tér és 15 perc séta <br>
                    Gépkocsival a környéken, fizetős parkolás. <br>
                </div>
            </div>
            <div class="w3-col m6 w3-panel">
                <div class="w3-margin map" id="map_sote"></div>
            </div>
        </div>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m6 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <h4><b> Budai Egészségközpont</b></h4>
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Budapest, 1126
                    Királyhágó utca 1-3.<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Ambulancia időpont:
                    <a href="tel:+3614895200"> +3614895200</a><br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>
                    https://online.bhc.hu/Ugyfel/<br>
                    <i class="fa fa-user fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Rendelési idő: hétfő
                    17-20 óra<br>
                    <i class="fa fa-info fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Tevékenység: ambuláns
                    betegvizsgálat<br>
                    <i class="fa fa-search-plus fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>
                    Megközelítés:<br>
                    Deák térről az Alagúton át (105-ös autóbusszal) Királyhágó utcai megálló<br>
                    Újbuda irányából a Királyhágó tér felől (212-es autóbusszal) Királyhágó téri megálló<br>
                    A Böszörményi út felől (59-es villamossal) Királyhágó téri megálló<br>
                    Az Alkotás út felől (61-es villamossal) Királyhágó utcai megálló<br>
                    Gépkocsival a kórház területén parkolás<br>
                </div>
            </div>
            <div class="w3-col m6 w3-panel">
                <div class="w3-margin map" id="map_buda"></div>
            </div>
        </div>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m6 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <h4><b> VP-MED Egészségcentrum és Oktatási Központ</b></h4>
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Budapest, 1042
                    Árpád út 56, sz.33<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Ambulancia időpont:
                    <a href="tel:+36309631363"> +36309631363</a><br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> info@vpmed.hu<br>
                    <i class="fa fa-info fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Tevékenység: új
                    típusú (lézeres, radiofrekvenciás, ragazstásos) visszérműtétek végzése<br>
                    <i class="fa fa-search-plus fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>
                    Megközelítés:<br>
                    3 Metro vagy 12 v. 14 villamos Újpest–Központ és 250m séta. <br>
                    Gépkocsival parkolás az Újpesti Piac parkolójában és 50 séta. <br>
                </div>
            </div>
            <div class="w3-col m6 w3-panel">
                <div class="w3-margin map" id="map_vpmed"></div>
            </div>
        </div>

    </div>

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

            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }

            // Change style of navbar on scroll
            window.onscroll = function () {
                myFunction()
            };

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
                $.get("/api/read_google_api_key.php?key=google_map", function (mapKey) {
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
