<?php

$url = 'https://babel-in.xyz/tata/channels';
$data = [
    'X-API-Key' => 'babel-072c9452f5c5ea9e15a624f487',
];
$jsonData = json_encode($data);  // Corrected to json_encode

$options = [
    'http' => [
        'header'  => [
            "Content-type: application/json",
            "User-Agent: Babel/5.0"
        ],
        'method'  => 'POST',
        'content' => $jsonData,  // Send encoded JSON data
    ],
];

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    die('Error sending request');
}

echo $response;
