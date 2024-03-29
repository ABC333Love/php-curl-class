<?php
require __DIR__ . '/../vendor/autoload.php';

use \ABC333Love\Curl\Curl;

$curl = new Curl();
$curl->setHeader('CB-VERSION', '2016-01-01');
$curl->get('https://api.coinbase.com/v2/prices/BTC-USD/spot');

echo
    'The current price of BTC at Coinbase is ' .
    '$' . $curl->response->data->amount . ' ' . $curl->response->data->currency . '.' . "\n";
