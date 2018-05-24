<?php



require "vendor/autoload.php";

$access_token = 'bnfys5xIi8aqqCUKcwTWpX8nWYUlz5j/IKEJddzOHgjPSKYa0NwviBDB+E8yYw2SbnZwE4aoUSJThq3fr85yHlDPzkTARx+qiwdUg88fA7oST76DCrwn+3KGo0VKQKQrp44wckOAusRanNAivA3yEQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'daba90d1c2110f388185b2d87f961155';

$pushID = 'U7d0f508edb7a20619d7898003880f16c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







