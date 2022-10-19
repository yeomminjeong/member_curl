<?php

$curl = curl_init();
$url = "http://localhost:8080/member/?id=5";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');

$result = curl_exec($curl);
curl_close($curl);
print $result;

?>