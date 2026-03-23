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
    'log_build' => tz_admin_post_bool_string('log_build', LOG_BUILD),
    'log_tech' => tz_admin_post_bool_string('log_tech', LOG_TECH),
    'log_login' => tz_admin_post_bool_string('log_login', LOG_LOGIN),
    'log_gold_fin' => tz_admin_post_bool_string('log_gold_fin', LOG_GOLD_FIN),
    'log_admin' => tz_admin_post_bool_string('log_admin', LOG_ADMIN),
    'log_war' => tz_admin_post_bool_string('log_war', LOG_WAR),
    'log_market' => tz_admin_post_bool_string('log_market', LOG_MARKET),
    'log_illegal' => tz_admin_post_bool_string('log_illegal', LOG_ILLEGAL),
));

$database->query("Insert into " . TB_PREFIX . "admin_log values (0," . $id . ",'Changed Log Settings'," . time() . ")");

header("Location: ../../../Admin/admin.php?p=config");
exit;
?>
