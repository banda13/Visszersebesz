<?php include("header.php") ?>

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

<?php include("footer.php") ?>