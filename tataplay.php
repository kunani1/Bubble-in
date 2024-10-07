<?php

$url = 'https://babel-in.xyz/tata/channels';
$data = [];  // No data is sent in the body, based on your original code

$options = [
    'http' => [
        'header'  => [
            "Content-Type: application/json",
            "User-Agent: Babel/5.0",
            "X-API-Key: babel-072c9452f5c5ea9e15a624f487"  // API key added in header
        ],
        'method'  => 'POST',
        'content' => json_encode($data),  // Empty array is being encoded into JSON
    ],
];

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    die('Error sending request');
}

echo $response;
