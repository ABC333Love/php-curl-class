<?php
require __DIR__ . '/../vendor/autoload.php';

use \ABC333Love\Curl\Curl;

// curl "https://httpbin.org/post" -d "foo[]=bar&foo[]=baz"

$curl = new Curl();
$curl->post('https://httpbin.org/post', array(
    'foo' => array(
        'bar',
        'baz',
    ),
));
