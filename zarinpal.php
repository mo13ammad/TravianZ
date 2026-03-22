<?php
include_once("GameEngine/Village.php");

$merchantID = ZARINPAL_MERCHANT;
$amount = (int)$_POST['amount']; // In Toman
$package = $_POST['package'];
$description = SERVER_NAME . " Package $package Gold Pack (" . $session->username . ")";
$email = $session->userinfo['email'];
$callbackURL = rtrim(SERVER, '/') . '/zarinpal_callback.php?package=' . $package;

// ZarinPal handles Tomans or Rials. We'll use Tomans.
$data = array(
    'MerchantID' => $merchantID,
    'Amount' => $amount,
    'Description' => $description,
    'Email' => $email,
    'CallbackURL' => $callbackURL,
);

$jsonData = json_encode($data);
$ch = curl_init('https://www.zarinpal.com/pg/rest/WebGate/PaymentRequest.json');
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
$result = json_decode($result, true);
curl_close($ch);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    if ($result["Status"] == 100) {
        header('Location: https://www.zarinpal.com/pg/StartPay/' . $result["Authority"]);
    } else {
        echo 'ERR: ' . $result["Status"];
    }
}
?>
