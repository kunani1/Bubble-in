<?php

$url = 'https://babel-in.xyz/tata/channels';
$data = [
    'X-API-Key' => 'babel-072c9452f5c5ea9e15a624f487',
];
$jsonData = json_decode($data);

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
$dat = json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);  // Added missing semicolon

if ($dat === FALSE) {
    die('Error sending request');
}

echo $dat;
