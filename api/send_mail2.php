<?php

header("Access-Control-Allow-Methods: POST");
header('Content-type: application/json');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";

$env = getenv('VISSZER_ENV');
$resp = [];
//if ($env == null || $env == "dev") {
//    $resp['error'] = "Email küldés nem lehetséges fejlesztői módban";
//} else {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email =  $_POST["email"];
    $need = $_POST["need"];
    $message =  $_POST["message"];

    $mail = new PHPMailer(True);
    // Settings
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    //Server settings
    $mail->Host = "cp2.ezit.hu"; // SMTP server example
    //$mail->SMTPDebug = 3;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;                    // set the SMTP port for the GMAIL server
    $mail->Username = "megkereses@visszersebesz.hu"; // SMTP account username example
    $mail->Password = "Dr4719req!";        // SMTP account password example

    $mail->setFrom("megkereses@visszersebesz.hu");
    $mail->addAddress('info@visszersebesz.hu');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $need;
    $mail->Body = $message;

    try {
        if ($mail->send()) {
            $resp['success'] = True;
        } else {
            $resp['error'] = "Ismeretlen hiba az email küldés során";
        }
    } catch (Exception $e) {
        $resp['error'] = $e;
    }


//}
echo(json_encode($resp));



