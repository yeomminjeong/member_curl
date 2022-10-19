<?php

$curl = curl_init();
$url = "http://localhost:8080/member/";

curl_setopt($curl, CURLOPT_URL, $url);

$result = curl_exec($curl);

curl_close($curl);

?>