<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

for ($i = 0; $i < 10; ++$i) {
    $response = $client->request(
        'GET',
        'http://localhost:8008/'
    );
    echo $response->getBody() . PHP_EOL;
}
