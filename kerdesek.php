<?php include("header.php") ?>


<!DOCTYPE html>
<html lang="en">

<body>

<section class="hero-wrap hero-wrap-2" style="background-image: url('/images/valaszol3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 text-center">
                <h1 class="mb-2 bread">Orvos válaszol</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Orvos válaszol <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="p-4 p-md-5 order-md-last bg-light">
            <div class="w3-content w3-container w3-padding-64" id="q_and_a">
                <h2 class="w3-center">ORVOS VÁLASZOL</h2>

                <hr>
                <form id="contact-form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"" role="form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Vezetéknév *</label>
                                    <input id="form_name" type="text" name="neve" class="form-control" placeholder="Kérem adja meg a vezetéknevét *" required="required" data-error="A vezetéknév megadása kötelező.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Keresztnév *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Kérem adja meg a teljes keresztnevét *" required="required" data-error="A keresztnév megadása kötelező.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Kérem adja meg az email címét *" required="required" data-error="Érvényes email cím megadása kötelező.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Kérem válasszon témát *</label>
                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Téma választása kötelező *">
                                        <option value=""></option>
                                        <option value="Request general question">Általános kérdés</option>
                                        <option value="Request time">Időpont egyeztetés</option>
                                        <option value="Request corona virus">Korona vírus</option>
                                        <option value="Other">Egyéb</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Üzenet *</label>
                                    <textarea id="form_message" name="uzenet" class="form-control" rows="4" required="required" data-error="Kérem írjon üzenetet."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Üzenet elküldése" name="formSubmit">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
                                    <strong>*</strong> Ezen mezők kitöltése kötelező.</p>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>

<?php
$filename = !empty($_POST['formSubmit'])?$_POST['formSubmit']:'-';

if($filename == "Üzenet elküldése")
{
    $varName = $_POST['neve'];
    $varSurName = $_POST['surname'];
    $varEmail = $_POST['email'];
    $varTipus = $_POST['need'];
    $varMessage = $_POST['uzenet'];
    $errorMessage = "";

    $db = pg_connect("host=localhost dbname=valaszok user=postgres password=admin");
    if(!$db) die("Error connecting to MySQL database.");


    $sql = "INSERT INTO valaszok (neve, surname, email, need, uzenet) VALUES(
'$varName', '$varSurName', '$varEmail', '$varTipus', '$varMessage')";

    $result = pg_query($db, $sql);
}


?>