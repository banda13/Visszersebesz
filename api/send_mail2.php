<?php

header("Access-Control-Allow-Methods: POST");
header('Content-type: application/json');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";


$resp = [];
$captcha_key = null;
$captcha_secret = null;
$username = null;
$password = null;
$host = null;
$target_addr = null;
$from_addr = null;


function loadEnvironment()
{
    global $resp, $captcha_key, $captcha_secret, $username, $password, $host, $target_addr, $from_addr;

    try {

        $dotenv = Dotenv\Dotenv::createImmutable('/home/visszers/titok/');
        $dotenv->load();
        $captcha_key = $_ENV['GOOGLE_RECAPTCHA_KEY'];
        $captcha_secret = $_ENV['GOOGLE_RECAPTCHA_SECRET'];
        $username = $_ENV['EMAIL_USERNAME'];
        $password = $_ENV["EMAIL_PASSWORD"];
        $host = $_ENV["EMAIL_HOST"];
        $target_addr = $_ENV["EMAIL_TARGET_ADDR"];
        $from_addr = $_ENV["EMAIL_FROM_ADDR"];
        return true;
    } catch (Exception $e) {
        $resp['error'] = "Sending email is not allowed";
        return false;
    }
}

function checkCaptcha($userToken)
{
    global $resp, $captcha_secret;
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $captcha_secret,
        'response' => $userToken
    );
    $options = array(
        'http' => array(
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);

    if ($captcha_success->success == false) {
        $resp['error'] = "Hibás captcha";
        return false;
    } else if ($captcha_success->success == true) {
        return true;
    } else {
        $resp['error'] = "Captcha ellenőrzés nem sikerült";
        return false;
    }
}

function sendMail($name, $surname, $email, $need, $message){
    global $resp, $username, $password, $host, $target_addr, $from_addr;
    $mail = new PHPMailer(True);

    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    # $mail->SMTPDebug = 1;
    $mail->Host = $host;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->Username = $username;
    $mail->Password = $password;

    $mail->setFrom($from_addr);
    $mail->addAddress($target_addr);

    $mail->isHTML(true);
    $mail->Subject = $need;

    $body = '<html><head><title>Megkeresés</title><meta name="viewport" content="width=device-width, initial-scale=1.0" /></head>';
    $body .= '<body style="background-color: #c2c2c2; font-family: sans-serif;">';
    $body .= '<div style="background-color: #ffffff; margin: 30px; padding: 10px">';
    $body .= '<div><h2 align="center">Új megkeresés: <strong>' . $need . '</strong></h2><hr>';
    $body .= '<div><h3><strong>Kapcsolat</strong></h3><table>';
    $body .= '<tr><td><strong>Teljes név:</strong></td><td>' . $name . ' ' . $surname . '</td></tr>';
    $body .= '<tr><td><strong>Email cím:</strong></td><td>' . $email . '</td></tr></table></div>';
    $body .= '<div><h3><strong>Üzenet</strong></h3><div>' . $message . '</div></div></div></div></body></html>';
    $mail->Body = $body;

    try {
        if ($mail->send()) {
            $resp['success'] = True;
            return true;
        } else {
            $resp['error'] = "Unknown";
            return false;
        }
    } catch (Exception $e) {
        $resp['error'] = "Unknown";
        echo $e->getMessage();
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        $resp['error_details'] = $e;
        return false;
    }
}


if (loadEnvironment() == true) {
    if (checkCaptcha($_POST["token"]) == true) {
        $result = sendMail( $_POST["name"], $_POST["surname"],$_POST["email"], $_POST["need"], $_POST["message"]);
    }
}
echo(json_encode($resp));




