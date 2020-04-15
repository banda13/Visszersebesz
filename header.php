<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>


<!DOCTYPE html>
<html lang="en">
<header>
    <title>Dr Szabó Gábor Viktor Ph.D.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163570933-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-163570933-1');
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <div class="py-md-5 py-4 border-bottom">
        <div class="container medium-container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
                    <a href="/index.php"><h3>Dr Szabó Gábor Viktor Ph.D.</h3><h5>Sebész, érsebész szakorvos, egyetemi
                            docens</h5></a>
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
                    <li class="nav-item <?php if ($first_part == "blog.php") echo "active"; ?>"><a href="/blog.php"
                                                                                                   class="nav-link">Blog</a>
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
</header>
<script>
    $(document).ready(function () {
        $("#navbardrop").click(function () {
            window.location.href = '/erbetegsegek.php';
        })
    });
</script>
</html>


