
<?php
$proxy = '54.173.229.200/24';
$proxyauth = 'comtoetoa@gmail.com:idecorearX1*';

$access_token = 'oKQWl/XURFKCVIgvIUQ+Y/Kc8tFJxIWH8wlZp2B7vzBW0uBSb+Q+brh2gnzYuPzHPCvlWmqIbLK4BH1iv/1K11GPDzJ9U8nYVRVs69hdU33cOJDoRGHq+bcg4+1i2gDlVwsE135swWe4CEmXal3ylwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
