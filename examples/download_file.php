<?php
require __DIR__ . '/../vendor/autoload.php';

use \ABC333Love\Curl\Curl;

$curl = new Curl();
$curl->download('https://secure.php.net/images/logos/php-med-trans.png', '/tmp/php-med-trans.png');
