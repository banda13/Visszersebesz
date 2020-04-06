<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>

<script>
    function toggleActivity(szoveg) {
    }
</script>


<!DOCTYPE html>
<html lang="en">
<header>
    <title>Dr Szabó Gábor Viktor Ph.D.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">


    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">


    <div class="py-md-5 py-4 border-bottom">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
                    <a class="navbar-brand" href="/index.php">Visszérsebész<span>érsebész</span></a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item <?php if ($first_part == "index.php") {echo "active";} else {echo "noactive";}?>" onclick="toggleActivity("index")"><a href="/index.php" class="nav-link pl-0">Kezdőlap</a></li>
                    <li class="nav-item <?php if ($first_part == "about.php") echo "active";?>" onclick="toggleActivity("about")"><a href="/about.php" class="nav-link">Bemutatkozás</a></li>
                    <!--<li class="nav-item"><a href="doctor.html" class="nav-link">Doctor</a></li>-->
                    <li class="nav-item <?php if ($first_part == "department.php") echo "active";?>" onclick="toggleActivity("about")"><a href="/department.php" class="nav-link">Érbetegségek</a></li>
                    <li class="nav-item <?php if ($first_part == "pricing.php") echo "active";?>" onclick="toggleActivity("about")"><a href="/pricing.php" class="nav-link">Árak</a></li>
                    <li class="nav-item <?php if ($first_part == "blog.php") echo "active";?>" onclick="toggleActivity("about")"><a href="/blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item <?php if ($first_part == "kerdesek.php") echo "active";?>" onclick="toggleActivity("about")"><a href="/kerdesek.php" class="nav-link">Orvos válaszol</a></li>
                    <li class="nav-item <?php if ($first_part == "contact.php") echo "active";?>" onclick="toggleActivity("about")"><a href="/contact.php" class="nav-link">Munkahelyek/Elérhetőségek</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
</html>


