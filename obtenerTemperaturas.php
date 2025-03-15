<?php

$url = 'http://192.168.1.105/temp/index.php?format=json';

$sh = curl_init();

curl_setopt($sh, CURLOPT_URL, $url);
curl_setopt($sh, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($sh);

curl_close($sh);

$data = json_decode($response,true);

print_r($data);

?>