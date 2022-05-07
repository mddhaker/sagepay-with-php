<?php
$merchantSessionKey = '05D96B32-68CD-4A7B-A7E6-A345A5CC60B7';
$cardIdentifier = '1E22CFA9-16F4-4EC6-AF4D-A28887017B0E';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://pi-test.sagepay.com/api/v1/transactions",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{' .
                          '"transactionType": "Repeat",' .
                          '"referenceTransactionId": "12B1E91C-6FDF-D8BE-CAF9-0A08E539D35D",' .
                          '"vendorTxCode": "demotransaction' . time() . '",' .
                          '"amount": 10000,' .
                          '"currency": "GBP",' .
                          '"description": "Demo transaction",' .
                          '"shippingDetails": {' .
                          '    "recipientFirstName": "Sam",' .
                          '    "recipientLastName": "Jones",' .
                          '    "shippingAddress1": "407 St. John Street",' .
                          '    "shippingCity": "London",' .
                          '    "shippingPostalCode": "EC1V 4AB",' .
                          '    "shippingCountry": "GB"' .
                          '}' .
                        '}',
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic aEpZeHN3N0hMYmo0MGNCOHVkRVM4Q0RSRkxodUo4RzU0TzZyRHBVWHZFNmhZRHJyaWE6bzJpSFNyRnliWU1acG1XT1FNdWhzWFA1MlY0ZkJ0cHVTRHNocktEU1dzQlkxT2lONmh3ZDlLYjEyejRqNVVzNXU=",
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
