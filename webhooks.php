<?php
require "vendor/autoload.php";
$access_token = '66FwOAiMBIUDM9tE2fITiU+cSnxlL7PFILbP0bAWfO4yvkepV7EzoAasRzqzA8hoa3gM/cmOLaBzSjTnil3TvbX/gYXsHZBGV1JMfhpT26a2x6ByttzgmWJ06Ic0Pl4bPfklThvN3ikB6y0J9EWNggdB04t89/1O/w1cDnyilFU=';
$channelSecret = '3396ea6e7653529878051838afd9c61c';
$idPush = 'Uafe78d7208e99890028086e61318f46c'
	$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
