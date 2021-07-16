<?php
require "vendor/autoload.php";
$access_token = 'GEWRF0Kaz+Dur3IwPEsrHjaVmdNt7Jn8FI/jTkPv5Xu9a9yT+Fy/ht9QDEfrvRm+a3gM/cmOLaBzSjTnil3TvbX/gYXsHZBGV1JMfhpT26beEhWvdznO2lhPfqPuYbPtqssCfOTZgZ1bWbZ3oBvCWgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '3396ea6e7653529878051838afd9c61c';
$idPush = 'Uafe78d7208e99890028086e61318f46c'
	$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
