<?php

$url = 'http://localhost:8080/member/?id=3';

$data = array(
    'mb_name' => 'name',
    'mb_id' => 'id',
    'mb_password' => '1234',
    'mb_birth' => '001203',
    'mb_gender' => 'F',
    'mb_email' => 'aaa@gmail.com',
    'mb_phone' => '010-1111-1111' 
);

$data_result = json_encode($data);


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: Application/json"));
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');

curl_setopt($curl, CURLOPT_POSTFIELDS, $data_result);

$response = curl_exec($curl);

var_dump($response);

curl_close($curl);

var_dump($data);

?>