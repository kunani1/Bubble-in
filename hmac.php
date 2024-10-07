<?php

$url = 'https://babel-in.xyz/tata/hmac';
$data = [
    'X-API-Key' => 'babel-072c9452f5c5ea9e15a624f487',
];
$jsonData = json_encode($data);

$options = [
    'http' => [
        'header'  => [
            "Content-type: application/json",
            "User-Agent: Babel/5.0"
        ],
        'method'  => 'POST',
        'content' => $jsonData,
    ],
];

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    die('Error sending request');
}

echo $response;
