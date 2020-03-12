<?php
function startsWith($haystack, $needle)
{
    return substr_compare($haystack, $needle, 0, strlen($needle)) === 0;
}

function endsWith($haystack, $needle)
{
    return substr_compare($haystack, $needle, -strlen($needle)) === 0;
}

function getHtmlElementByID($xpath,$id)
{
    $elements = $xpath->getElementById($id);
    return $elements;
}