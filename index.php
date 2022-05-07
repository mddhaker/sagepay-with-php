<?php

//$integrationKey = 'hJYxsw7HLbj40cB8udES8CDRFLhuJ8G54O6rDpUXvE6hYDrria';
//$integrationPassword = 'o2iHSrFybYMZpmWOQMuhsXP52V4fBtpuSDshrKDSWsBY1OiN6hwd9Kb12z4j5Us5u';
//echo base64_encode("$integrationKey:$integrationPassword");exit;
error_reporting(E_ALL);
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://pi-test.sagepay.com/api/v1/merchant-session-keys",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{ "vendorName": "sandbox" }',
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic TOKEN",
    "Cache-Control: no-cache",
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
echo '<pre>';
print_r($response);exit;
?>
