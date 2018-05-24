<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot.php');

$channelSecret = '1e3daaa66846449fc789a31e923514da';
$access_token  = 'wa0M79tfvxvub4YcYUNpU7w7xVTbjDrOCPeNKEVHaswmiGM9BqZDT/DvXd86wUWcYSny+7NpYQc4H5oyJ+ZabxQpPCVe+BVWWp0gKN7nNQ+seDK/NlLkUmzaLjRqLYBsA4S2b25ruuWnrAep8JGSCwdB04t89/1O/w1cDnyilFU=
';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody() . 'Hollo Word'; 
	exit();

}
