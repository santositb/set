<?php


echo @color('purple', "NOMOR\t\t: ");
$nomor = trim(fgets(STDIN));
$login = login($nomor);
echo @color('green', $login['message']."\n");



function login($nomor){
	$host = "bimaplus.tri.co.id";        
    $data = '{"imei":"Android 93488a982824b403","language":1,"msisdn":"'.$nomor.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/otp-request', $data);
        return $ceknom;
}
