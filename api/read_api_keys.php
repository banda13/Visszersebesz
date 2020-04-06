<?php
$key = $_GET['key'];
$filename = "resources/secret.json";
$file = fopen($filename, "r") or die("Unable to open file!");
$json_content = json_decode(fread($file, filesize($filename)),true);

$resp = json_encode($json_content[$key]);
echo($resp);
fclose($file);
