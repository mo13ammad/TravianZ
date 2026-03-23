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
$medalIntervalMap = array(
    '0' => '0',
    '(3600*24)' => (string) (3600 * 24),
    '(3600*24*2)' => (string) (3600 * 24 * 2),
    '(3600*24*3)' => (string) (3600 * 24 * 3),
    '(3600*24*4)' => (string) (3600 * 24 * 4),
    '(3600*24*5)' => (string) (3600 * 24 * 5),
    '(3600*24*6)' => (string) (3600 * 24 * 6),
    '(3600*24*7)' => (string) (3600 * 24 * 7),
);
$selectedMedalInterval = tz_admin_post_enum_string('medalinterval', array_keys($medalIntervalMap), (string) MEDALINTERVAL);

tz_admin_config_save($database, array(
    'error_report' => tz_admin_post_enum_string('error', array('error_reporting (E_ALL ^ E_NOTICE);', 'error_reporting (0);'), ERROR_REPORT),
    'server_name' => tz_admin_post_string_value('servername', SERVER_NAME, 100),
    'timezone' => tz_admin_post_enum_string('tzone', timezone_identifiers_list(), TIMEZONE),
    'lang' => tz_admin_post_enum_string('lang', array('en', 'fa', 'es', 'rs', 'ru', 'zh_tw'), LANG),
    'speed' => tz_admin_post_number_value('speed', SPEED, 1, 100, true),
    'gp_enable' => tz_admin_post_bool_string('gpack', GP_ENABLE),
    'increase_speed' => tz_admin_post_number_value('incspeed', INCREASE_SPEED, 1, 100, true),
    'evasion_speed' => tz_admin_post_number_value('evasionspeed', EVASION_SPEED, 1, 100, true),
    'trader_capacity' => tz_admin_post_number_value('tradercap', TRADER_CAPACITY, 1, 1000000, true),
    'cranny_capacity' => tz_admin_post_number_value('crannycap', CRANNY_CAPACITY, 1, 1000000, true),
    'trapper_capacity' => tz_admin_post_number_value('trappercap', TRAPPER_CAPACITY, 1, 1000000, true),
    'cp' => tz_admin_post_enum_string('village_expand', array('0', '1'), (string) CP),
    'demolish_level_req' => tz_admin_post_enum_string('demolish', array('5', '10', '15', '20'), (string) DEMOLISH_LEVEL_REQ),
    'storage_multiplier' => tz_admin_post_number_value('storage_multiplier', STORAGE_MULTIPLIER, 1, 100, true),
    'quest' => tz_admin_post_bool_string('quest', QUEST),
    'qtype' => tz_admin_post_enum_string('qtype', array('25', '37'), (string) QTYPE),
    'protection' => tz_admin_post_enum_string('beginner', array('7200', '10800', '18000', '28800', '36000', '43200', '86400', '172800', '259200', '432000'), (string) PROTECTION),
    'ww' => tz_admin_post_bool_string('ww', WW),
    'show_natars' => tz_admin_post_bool_string('show_natars', SHOW_NATARS),
    'natars_units' => tz_admin_post_number_value('natars_units', NATARS_UNITS, 0, 1000000, true),
    'natars_spawn_time' => tz_admin_post_number_value('natars_spawn_time', NATARS_SPAWN_TIME, 0, 999999999),
    'natars_ww_spawn_time' => tz_admin_post_number_value('natars_ww_spawn_time', NATARS_WW_SPAWN_TIME, 0, 999999999),
    'natars_ww_building_plan_spawn_time' => tz_admin_post_number_value('natars_ww_building_plan_spawn_time', NATARS_WW_BUILDING_PLAN_SPAWN_TIME, 0, 999999999),
    'nature_regtime' => tz_admin_post_enum_string('nature_regtime', array('28800', '36000', '43200', '57600', '72000', '86400', '172800', '259200', '432000'), (string) NATURE_REGTIME),
    'oasis_wood_multiplier' => tz_admin_post_number_value('oasis_wood_multiplier', OASIS_WOOD_MULTIPLIER, 0, 100000, true),
    'oasis_clay_multiplier' => tz_admin_post_number_value('oasis_clay_multiplier', OASIS_CLAY_MULTIPLIER, 0, 100000, true),
    'oasis_iron_multiplier' => tz_admin_post_number_value('oasis_iron_multiplier', OASIS_IRON_MULTIPLIER, 0, 100000, true),
    'oasis_crop_multiplier' => tz_admin_post_number_value('oasis_crop_multiplier', OASIS_CROP_MULTIPLIER, 0, 100000, true),
    'auth_email' => tz_admin_post_bool_string('activate', AUTH_EMAIL),
    'medalinterval' => isset($medalIntervalMap[$selectedMedalInterval]) ? $medalIntervalMap[$selectedMedalInterval] : (string) MEDALINTERVAL,
    'great_wks' => tz_admin_post_bool_string('great_wks', GREAT_WKS),
    'ts_threshold' => tz_admin_post_number_value('ts_threshold', TS_THRESHOLD, 0, 1000000, true),
    'reg_open' => tz_admin_post_bool_string('reg_open', REG_OPEN),
    'peace' => tz_admin_post_enum_string('peace', array('0', '1', '2', '3', '4'), (string) PEACE),
));

$database->query("Insert into " . TB_PREFIX . "admin_log values (0," . $id . ",'Changed General Server Settings'," . time() . ")");

header("Location: ../../../Admin/admin.php?p=config");
exit;
?>
