<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>


<!DOCTYPE html>
<html lang="hu" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="/images/logo-final.png"/>
    <link rel="shortcut icon" type="image/png" href="/images/logo-final.png"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/images.css">

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        if (localStorage.getItem('consentMode') === null) {
            gtag('consent', 'default', {
                'ad_storage': 'denied',
                'analytics_storage': 'denied',
                'personalization_storage': 'denied',
                'functionality_storage': 'denied',
                'security_storage': 'denied',
            });
        } else {
            gtag('consent', 'default', JSON.parse(localStorage.getItem('consentMode')));
        }

        if (localStorage.getItem('userId') != null) {
            window.dataLayer.push({
                'user_id': localStorage.getItem('userId')
            });
        }
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NTFDHSC3');</script>
    <!-- End Google Tag Manager -->

    <!-- SENTRY -->
    <script src="https://browser.sentry-cdn.com/5.15.4/bundle.min.js" integrity="sha384-Nrg+xiw+qRl3grVrxJtWazjeZmUwoSt0FAVsbthlJ5OMpx0G08bqIq3b/v0hPjhB" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <div class="py-md-3 py-4 border-bottom">
        <div class="container medium-container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-6 order-md-2 mb-2 align-items-center text-center">
                    <a href="/index.php"><h1>Érsebész, sebész szakorvos</h1><h5>Dr. Szabó Gábor Viktor Ph.D.<br>egyetemi docens</h5></a>
                </div>
                <div class="col-md-6 order-md-2 mb-2 align-items-center text-center">
                    <img src="images/logo-final.png" width="160px" height="160px"/>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="nav navbar-nav m-auto">
                    <li class="nav-item <?php if ($first_part == "index.php") {
                        echo "active";
                    } else {
                        echo "noactive";
                    } ?>" onclick="toggleActivity('index')"><a href="/index.php" class="nav-link pl-0">Kezdőlap</a>
                    </li>
                    <li class="nav-item <?php if ($first_part == "bemutatkozas.php") echo "active"; ?>"><a
                                href="/bemutatkozas.php"
                                class="nav-link">Bemutatkozás</a>
                    </li>
                    <li class="nav-item dropdown <?php if ($first_part == "erbetegsegek.php") echo "active"; ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                            Érbetegségek
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/nyakierek.php">Nyaki erek betegségei</a>
                            <a class="dropdown-item" href="/alsovegtag.php">Alsó végtagi érszűkület</a>
                            <a class="dropdown-item" href="/ertagulatok.php">Értágulatok</a>
                            <a class="dropdown-item" href="/visszerek.php">Visszeresség</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if ($first_part == "arak.php") echo "active"; ?>"><a
                                href="/arak.php" class="nav-link">Árak</a></li>
                    </li>
                    <li class="nav-item <?php if ($first_part == "kerdesek.php") echo "active"; ?>"><a
                                href="/kerdesek.php" class="nav-link">Orvos válaszol</a></li>
                    <li class="nav-item <?php if ($first_part == "elerhetoseg.php") echo "active"; ?>"><a
                                href="/elerhetoseg.php" class="nav-link">Elérhetőségek</a></li>
                    <li class="nav-item <?php if ($first_part == "hivatkozasok.php") echo "active"; ?>"><a
                                href="/hivatkozasok.php" class="nav-link">Hivatkozások</a></li>

                    <li class="nav-item m-3">
                        <form class="form-inline navbar-form navbar-right my-2 my-lg-0" action="/kereses.php"
                              method="get">
                            <div class="form-group-sm">
                                <input class="form-control mr-sm-2 input-sm" name="search" type="search"
                                       placeholder="Keresés" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                            class="icon-search"></i></button>

                        </form>
                    </li>
                </ul>
            </div>
    </nav>
</head>
<script>
    $(document).ready(function () {
        $("#navbardrop").click(function () {
            window.location.href = '/erbetegsegek.php';
        });

        Sentry.init({ dsn: 'https://823ce0498fd344f6a30313df4f494421@o381432.ingest.sentry.io/5208753' });
    });
</script>
</html>


