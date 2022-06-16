<?php
require('../../vendor/autoload.php');

use \Volc\Service\Vod\Models\Response\VodDeleteVideoClassificationResponse;
use Volc\Service\Vod\Models\Request\VodDeleteVideoClassificationRequest;
use Volc\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$space = "space";
$classificationId = 1;

$req = new VodDeleteVideoClassificationRequest();
$req->setSpaceName($space);
$req->setClassificationId($classificationId);
$response = new VodDeleteVideoClassificationResponse();
try {
    $response = $client->deleteVideoClassification($req);
} catch (Throwable $e) {
    print($e);
}

if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();
