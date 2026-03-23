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
    'new_functions_oasis' => tz_admin_post_bool_string('new_functions_oasis', NEW_FUNCTIONS_OASIS),
    'new_functions_alliance_invitation' => tz_admin_post_bool_string('new_functions_alliance_invitation', NEW_FUNCTIONS_ALLIANCE_INVITATION),
    'new_functions_embassy_mechanics' => tz_admin_post_bool_string('new_functions_embassy_mechanics', NEW_FUNCTIONS_EMBASSY_MECHANICS),
    'new_functions_forum_post_message' => tz_admin_post_bool_string('new_functions_forum_post_message', NEW_FUNCTIONS_FORUM_POST_MESSAGE),
    'new_functions_tribe_images' => tz_admin_post_bool_string('new_functions_tribe_images', NEW_FUNCTIONS_TRIBE_IMAGES),
    'new_functions_mhs_images' => tz_admin_post_bool_string('new_functions_mhs_images', NEW_FUNCTIONS_MHS_IMAGES),
    'new_functions_display_artifact' => tz_admin_post_bool_string('new_functions_display_artifact', NEW_FUNCTIONS_DISPLAY_ARTIFACT),
    'new_functions_display_wonder' => tz_admin_post_bool_string('new_functions_display_wonder', NEW_FUNCTIONS_DISPLAY_WONDER),
    'new_functions_vacation' => tz_admin_post_bool_string('new_functions_vacation', NEW_FUNCTIONS_VACATION),
    'new_functions_display_catapult_target' => tz_admin_post_bool_string('new_functions_display_catapult_target', NEW_FUNCTIONS_DISPLAY_CATAPULT_TARGET),
    'new_functions_manual_naturenatars' => tz_admin_post_bool_string('new_functions_manual_naturenatars', NEW_FUNCTIONS_MANUAL_NATURENATARS),
    'new_functions_display_links' => tz_admin_post_bool_string('new_functions_display_links', NEW_FUNCTIONS_DISPLAY_LINKS),
    'new_functions_medal_3year' => tz_admin_post_bool_string('new_functions_medal_3year', NEW_FUNCTIONS_MEDAL_3YEAR),
    'new_functions_medal_5year' => tz_admin_post_bool_string('new_functions_medal_5year', NEW_FUNCTIONS_MEDAL_5YEAR),
    'new_functions_medal_10year' => tz_admin_post_bool_string('new_functions_medal_10year', NEW_FUNCTIONS_MEDAL_10YEAR),
));

$database->query("Insert into " . TB_PREFIX . "admin_log values (0," . $id . ",'Changed New Mechanics and Functions Settings'," . time() . ")");

header("Location: ../../../Admin/admin.php?p=config");
exit;
?>
