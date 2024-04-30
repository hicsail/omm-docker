<?php

function getToken($file_path)
{
    $file_contents = file_get_contents($file_path);

    // Split the string by '=' to separate the key and the value
    $parts = explode('=', $file_contents);

    // The token value is in the second part of the array
    $token = trim($parts[1]);

    return $token;
}
