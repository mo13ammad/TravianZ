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
    'include_admin' => tz_admin_post_bool_string('admin_rank', INCLUDE_ADMIN),
    'admin_email' => tz_admin_post_string_value('aemail', ADMIN_EMAIL, 255),
    'admin_name' => tz_admin_post_string_value('aname', ADMIN_NAME, 100),
    'admin_receive_support_messages' => tz_admin_post_bool_string('admin_support_msgs', ADMIN_RECEIVE_SUPPORT_MESSAGES),
    'admin_allow_incoming_raids' => tz_admin_post_bool_string('admin_raidable', ADMIN_ALLOW_INCOMING_RAIDS),
));

$database->query("Insert into " . TB_PREFIX . "admin_log values (0," . $id . ",'Changed Admin Info'," . time() . ")");

header("Location: ../../../Admin/admin.php?p=config");
exit;
?>
