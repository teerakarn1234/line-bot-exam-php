<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot.php');

$channelSecret = 'daba90d1c2110f388185b2d87f961155';
$access_token  = 'WaxvDhJ3Ee2YwvcrfTGeLmdq20cW9cdoEfqBQ889jGOsfkuBjlf5N7oEoXo9qR66bnZwE4aoUSJThq3fr85yHlDPzkTARx+qiwdUg88fA7qGWaKa8zWX4wZSTp8+wL7oCcv128mt27u9D6eDDir4twdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
