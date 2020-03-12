<?php
include '../utils.php';

$path="../../blog/posts/";
$files = scandir($path);
$response = array();
foreach ($files as $filename)
    if(endsWith($filename, '.html'))
        array_push($response, $filename);
echo(json_encode($response));