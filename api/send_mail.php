<?php
header("Access-Control-Allow-Methods: POST");
require 'mailjet-apiv3/vendor/autoload.php';


$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$need = $_POST["need"];
$message = $_POST["message"];


use \Mailjet\Resources;
$mj = new \Mailjet\Client(getenv('MJ_APIKEY_PUBLIC'), getenv('MJ_APIKEY_PRIVATE'),true,['version' => 'v3.1']);

$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "$email",
                'Name' => "Me"
            ],
            'To' => [
                [
                    'Email' => "szabag@gmail.com",
                    'Name' => "You"
                ]
            ],
            'Subject' => $name." ".$surname.": ". $email. " - ".$need,
            'TextPart' => $message,
        ]
    ]
];

$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success() && var_dump($response->getData());
?>