<?php
require __DIR__ . '/../vendor/autoload.php';

use \ABC333Love\Curl\Curl;

$curl = new Curl();
$curl->setCookie('foo', 'bar');
$curl->get('https://httpbin.org/cookies');
var_dump($curl->response->cookies->foo === 'bar');
