<?php

use Volc\Service\Cdn\Cdn;

require('../../vendor/autoload.php');

$client = Cdn::getInstance();

$ak = 'your ak';
$sk = 'your sk';
$client->setAccessKey($ak);
$client->setSecretKey($sk);

$now = time();
$body = [
    'StartTime' => $now - 86400,
    'EndTime' => $now,
    'Domain' => 'my.com',
    'PageSize' => 100,
    'PageNum' => 1
];

$response = $client->describeCdnAccessLog(['json' => $body]);
var_dump($response);
