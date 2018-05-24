<?php
$access_token = 'bnfys5xIi8aqqCUKcwTWpX8nWYUlz5j/IKEJddzOHgjPSKYa0NwviBDB+E8yYw2SbnZwE4aoUSJThq3fr85yHlDPzkTARx+qiwdUg88fA7oST76DCrwn+3KGo0VKQKQrp44wckOAusRanNAivA3yEQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
