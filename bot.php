<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php
echo "I am a cryptobot";
include ('line-bot-api/php/line-bot.php');

$channelSecret = '6b134f677d24fc7fec476c02a78702c1';
$access_token  = 'oKQWl/XURFKCVIgvIUQ+Y/Kc8tFJxIWH8wlZp2B7vzBW0uBSb+Q+brh2gnzYuPzHPCvlWmqIbLK4BH1iv/1K11GPDzJ9U8nYVRVs69hdU33cOJDoRGHq+bcg4+1i2gDlVwsE135swWe4CEmXal3ylwdB04t89/1O/w1cDnyilFU=
';

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
?>
