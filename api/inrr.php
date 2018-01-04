<?php

// Load the Guzzle library.
require_once( dirname(__FILE__) . '/vendor/autoload.php' );

use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://api.coinmarketcap.com/v1/']);
$response = $client->get('ticker/?start=0&limit=100&convert=INR');
$data = $response->getBody();
$data = json_decode($data);

// Print result in array
//print_r($data); 

$bitcoin['prices'] = $data;
$result= json_encode($bitcoin);

// print JSON result
echo $result;
