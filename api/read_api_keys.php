<?php
    $key = $_GET['key'];
    $filename = "resources/secret.json";
    $file = fopen($filename, "r") or die("Unable to open file!");
    $json_content = json_decode(fread($file, filesize($filename)),true);

    echo($json_content[$key]);
    fclose($file);
