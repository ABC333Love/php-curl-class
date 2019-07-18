<?php
require __DIR__ . '/../vendor/autoload.php';

use \ABC333Love\Curl\Curl;

$curl = new Curl('https://httpbin.org/get');
for ($i = 1; $i <= 10; $i++) {
    $curl->get(array(
        'page' => $i,
    ));
    // TODO: Do something with result $curl->response.
}
