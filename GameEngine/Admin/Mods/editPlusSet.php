<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['access'] < 9) {
    die(ACCESS_DENIED_ADMIN);
}

include_once("../../Database.php");
require_once("config_db.php");

$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;

tz_admin_config_save($database, array(
    'plus_time' => tz_admin_post_number_value('plus_time', PLUS_TIME, 0, 999999999),
    'plus_production' => tz_admin_post_number_value('plus_production', PLUS_PRODUCTION, 0, 999999999),
    'zarinpal_merchant' => tz_admin_post_string_value('zarinpal-merchant', ZARINPAL_MERCHANT, 255),
    'payment_currency' => tz_admin_post_string_value('payment-currency', PAYMENT_CURRENCY, 50),
    'plus_package_a_gold' => tz_admin_post_number_value('plus-a-gold', PLUS_PACKAGE_A_GOLD, 0, 999999999),
    'plus_package_a_price' => tz_admin_post_string_value('plus-a-price', PLUS_PACKAGE_A_PRICE, 50),
    'plus_package_b_gold' => tz_admin_post_number_value('plus-b-gold', PLUS_PACKAGE_B_GOLD, 0, 999999999),
    'plus_package_b_price' => tz_admin_post_string_value('plus-b-price', PLUS_PACKAGE_B_PRICE, 50),
    'plus_package_c_gold' => tz_admin_post_number_value('plus-c-gold', PLUS_PACKAGE_C_GOLD, 0, 999999999),
    'plus_package_c_price' => tz_admin_post_string_value('plus-c-price', PLUS_PACKAGE_C_PRICE, 50),
    'plus_package_d_gold' => tz_admin_post_number_value('plus-d-gold', PLUS_PACKAGE_D_GOLD, 0, 999999999),
    'plus_package_d_price' => tz_admin_post_string_value('plus-d-price', PLUS_PACKAGE_D_PRICE, 50),
    'plus_package_e_gold' => tz_admin_post_number_value('plus-e-gold', PLUS_PACKAGE_E_GOLD, 0, 999999999),
    'plus_package_e_price' => tz_admin_post_string_value('plus-e-price', PLUS_PACKAGE_E_PRICE, 50),
));

$database->query("Insert into " . TB_PREFIX . "admin_log values (0," . $id . ",'Changed PLUS Settings'," . time() . ")");

header("Location: ../../../Admin/admin.php?p=config");
exit;
?>
