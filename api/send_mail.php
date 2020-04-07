<?php
header("Access-Control-Allow-Methods: POST");
header('Content-type: application/json');
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
// $response->success() && var_dump($response->getData());

$uuid = $response->getData()["Messages"][0]["To"][0]["MessageUUID"];
file_put_contents("data/sent_emails/".$uuid.".txt", json_encode($response->getData()));

echo json_encode($response->getData());
