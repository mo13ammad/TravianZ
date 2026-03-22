<?php
include_once("GameEngine/Village.php");

$merchantID = ZARINPAL_MERCHANT;
$amount = 0;
$package = $_GET['package'];
$authority = $_GET['Authority'];

switch ($package) {
    case 'A': $amount = (int)str_replace(",", "", PLUS_PACKAGE_A_PRICE); $gold = PLUS_PACKAGE_A_GOLD; break;
    case 'B': $amount = (int)str_replace(",", "", PLUS_PACKAGE_B_PRICE); $gold = PLUS_PACKAGE_B_GOLD; break;
    case 'C': $amount = (int)str_replace(",", "", PLUS_PACKAGE_C_PRICE); $gold = PLUS_PACKAGE_C_GOLD; break;
    case 'D': $amount = (int)str_replace(",", "", PLUS_PACKAGE_D_PRICE); $gold = PLUS_PACKAGE_D_GOLD; break;
    case 'E': $amount = (int)str_replace(",", "", PLUS_PACKAGE_E_PRICE); $gold = PLUS_PACKAGE_E_GOLD; break;
}

if ($_GET['Status'] == 'OK') {
    $data = array('MerchantID' => $merchantID, 'Authority' => $authority, 'Amount' => $amount);
    $jsonData = json_encode($data);
    $ch = curl_init('https://www.zarinpal.com/pg/rest/WebGate/PaymentVerification.json');
    curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonData)
    ));
    $result = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);
    $result = json_decode($result, true);
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        if ($result['Status'] == 100) {
            $database->modifyGold($session->uid, $gold, 1);
            header("Location: plus.php?id=3&success=1");
        } else {
            echo 'Transction failed. Status:' . $result['Status'];
        }
    }
} else {
    echo 'Transaction cancelled by user';
}
?>
