<?php



require "vendor/autoload.php";

$access_token = 'Vs0TIuaxm0NKmsswa6+axFbpyy/8TC2TmJqg+ANGjsP4VzJO1AAuSSi/e0yxXgtxkshkaT21IBH8yaacZAo5LBZqicdNt/GrhQxF1KkpTXgO04hMiAJsyY7aZo9UxdJ/QryJ2ct0ConMwGBJxl0VIgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8141ebe35b65f537c3eecf14449944da';

$pushID = 'U3b9c029b62ffcbd570544804bf9bdb03';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







