<?php
include_once("GameEngine/Village.php");

$merchantID = ZARINPAL_MERCHANT;
$amount = (int)$_POST['amount']; // In Toman
$package = $_POST['package'];
$description = SERVER_NAME . " Package $package Gold Pack (" . $session->username . ")";
$email = $session->userinfo['email'];
$callbackURL = rtrim(SERVER, '/') . '/zarinpal_callback.php?package=' . $package;

$data = array(
    'merchant_id' => $merchantID,
    'amount' => $amount,
    'description' => $description,
    'callback_url' => $callbackURL,
    'metadata' => [
        'email' => $email
    ],
);

$jsonData = json_encode($data);
$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v4');
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
    if (empty($result['errors'])) {
        if ($result['data']['code'] == 100) {
            header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
        } else {
            echo 'ERR: ' . $result['data']['code'];
        }
    } else {
        echo 'ERR: ' . $result['errors']['code'] . ' - ' . $result['errors']['message'];
    }
}
?>
