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
    'newsbox1' => tz_admin_post_bool_string('box1', NEWSBOX1),
    'newsbox2' => tz_admin_post_bool_string('box2', NEWSBOX2),
    'newsbox3' => tz_admin_post_bool_string('box3', NEWSBOX3),
));

$database->query("Insert into " . TB_PREFIX . "admin_log values (0," . $id . ",'Changed NewsBox Settings'," . time() . ")");

header("Location: ../../../Admin/admin.php?p=config");
exit;
?>
