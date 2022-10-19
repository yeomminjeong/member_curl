<?php

$curl = curl_init();
$url = "http://localhost:8080/member";
$queryParams = '?'. urlencode('id') . '={id}';

curl_setopt($curl, CURLOPT_URL, $url . $queryParams);

$result = curl_exec($curl);
curl_close($curl);
print $result;

?>