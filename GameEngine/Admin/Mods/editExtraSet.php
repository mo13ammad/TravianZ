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
    'limit_mailbox' => tz_admin_post_bool_string('limit_mailbox', LIMIT_MAILBOX),
));

$database->query("Insert into " . TB_PREFIX . "admin_log values (0," . $id . ",'Changed Extra server settings'," . time() . ")");

header("Location: ../../../Admin/admin.php?p=config");
exit;
?>
