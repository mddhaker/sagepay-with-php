<?php
$merchantSessionKey = 'BD225765-F81E-40ED-B96F-4EA7BDDFED6F';
$cardIdentifier = 'D479B2FC-92E0-4C5A-9513-BD67826391F9';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://pi-test.sagepay.com/api/v1/transactions",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{' .
                          '"transactionType": "Payment",' .
                          '"paymentMethod": {' .
                          '    "card": {' .
                          '        "merchantSessionKey": "' . $merchantSessionKey . '",' .
                          '        "cardIdentifier": "' . $cardIdentifier . '",' .
                          '        "save": "false"' .
                          '    }' .
                          '},' .
                          '"vendorTxCode": "demotransaction' . time() . '",' .
                          '"amount": 10000,' .
                          '"currency": "GBP",' .
                          '"description": "Demo transaction",' .
                          '"apply3DSecure": "UseMSPSetting",' .
                          '"customerFirstName": "Sam",' .
                          '"customerLastName": "Jones",' .
                          '"billingAddress": {' .
                          '    "address1": "407 St. John Street",' .
                          '    "city": "London",' .
                          '    "postalCode": "EC1V 4AB",' .
                          '    "country": "GB"' .
                          '},' .
                          '"entryMethod": "Ecommerce"' .
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
