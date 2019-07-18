<?php
require __DIR__ . '/../vendor/autoload.php';

use \ABC333Love\Curl\MultiCurl;

$multi_curl = new MultiCurl();

$multi_curl->addGet('https://www.google.com/search', array(
    'q' => 'hello world',
));
$multi_curl->addGet('https://duckduckgo.com/', array(
    'q' => 'hello world',
));
$multi_curl->addGet('https://www.bing.com/search', array(
    'q' => 'hello world',
));

$multi_curl->start();
