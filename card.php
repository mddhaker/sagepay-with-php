<?php
$merchantSessionKey = 'BD225765-F81E-40ED-B96F-4EA7BDDFED6F';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://pi-test.sagepay.com/api/v1/card-identifiers",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{' .
                            '"cardDetails": {' .
                            '    "cardholderName": "SAM JONES",' .
                            '    "cardNumber": "4929000000006",' .
                            '    "expiryDate": "0320",' .
                            '    "securityCode": "123"' .
                            '}' .
                        '}',
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer $merchantSessionKey",
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
