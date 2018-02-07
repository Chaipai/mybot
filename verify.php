<?php
$access_token = 'jfbjzxiRVlb523kXaNxjks6LikCEMD9eMZFNQpShbN78TeuA+yJPn+Ph7LKmxte4kwL8XOW+54nvNQSNRiQ85h4KL5YQHNxlQI6h2d06a69ULtqzWvzGRG93EymeubqI2QlaL6v8QcY8Bz6/yYrIXQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>