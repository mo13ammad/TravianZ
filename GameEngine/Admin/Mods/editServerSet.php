<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       editServerSet.php                                           ##
##  Developed by:  ronix                                                       ##
##  License:       nalooti Project                                             ##
##  Copyright:     nalooti (c) 2010-2014. All rights reserved.                 ##
##                                                                             ##
#################################################################################

if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['access'] < 9) {
    die(ACCESS_DENIED_ADMIN);
}

include_once("../../Database.php");

$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$modsDir = __DIR__;
$configFile = realpath($modsDir . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR . 'config.php';
$templateCandidates = array(
    $modsDir . DIRECTORY_SEPARATOR . 'constant_format.tpl',
    realpath($modsDir . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'install' . DIRECTORY_SEPARATOR . 'data') . DIRECTORY_SEPARATOR . 'constant_format.tpl',
);
$templateFile = null;

foreach ($templateCandidates as $candidate) {
    if ($candidate && file_exists($candidate)) {
        $templateFile = $candidate;
        break;
    }
}

if ($templateFile === null) {
    die(
        'Missing <strong>constant_format.tpl</strong>.<br />' .
        'Checked:<br />' .
        htmlspecialchars(implode('<br />', $templateCandidates), ENT_QUOTES, 'UTF-8')
    );
}

if (!file_exists($configFile)) {
    die("Can't find file: GameEngine/config.php");
}

if (!is_writable($configFile)) {
    die("GameEngine/config.php is not writable.");
}

function config_bool($value) {
    return $value ? 'true' : 'false';
}

function post_bool($key, $default) {
    if (!isset($_POST[$key])) {
        return $default;
    }

    $value = strtolower(trim((string) $_POST[$key]));
    return in_array($value, array('1', 'true', 'yes', 'on'), true);
}

function post_enum($key, $allowed, $default) {
    if (!isset($_POST[$key])) {
        return $default;
    }

    $value = (string) $_POST[$key];
    return in_array($value, $allowed, true) ? $value : $default;
}

function post_string($key, $default, $maxLength = 255) {
    if (!isset($_POST[$key])) {
        return $default;
    }

    $value = trim((string) $_POST[$key]);
    $value = str_replace(array("\r", "\n", "\0"), '', $value);

    if ($value === '') {
        return $default;
    }

    if (function_exists('mb_substr')) {
        return mb_substr($value, 0, $maxLength);
    }

    return substr($value, 0, $maxLength);
}

function find_unresolved_placeholders($content) {
    $lines = preg_split('/\R/', $content);
    $issues = array();

    foreach ($lines as $lineNumber => $line) {
        if (preg_match_all('/%[A-Z0-9_]+%/', $line, $matches)) {
            foreach (array_unique($matches[0]) as $placeholder) {
                $issues[] = array(
                    'placeholder' => $placeholder,
                    'line' => $lineNumber + 1,
                    'context' => trim($line),
                );
            }
        }
    }

    return $issues;
}

function post_number($key, $default, $min = null, $max = null, $allowFloat = false) {
    if (!isset($_POST[$key])) {
        return (string) $default;
    }

    $value = trim((string) $_POST[$key]);
    if ($value === '' || !is_numeric($value)) {
        return (string) $default;
    }

    $number = $allowFloat ? (float) $value : (int) $value;

    if ($min !== null && $number < $min) {
        $number = $min;
    }

    if ($max !== null && $number > $max) {
        $number = $max;
    }

    if ($allowFloat) {
        $normalized = rtrim(rtrim(number_format($number, 2, '.', ''), '0'), '.');
        return $normalized === '' ? '0' : $normalized;
    }

    return (string) $number;
}

$replacements = array(
    '%ERRORREPORT%' => post_enum('error', array('error_reporting (E_ALL ^ E_NOTICE);', 'error_reporting (0);'), defined('ERROR_REPORT') ? ERROR_REPORT : 'error_reporting (0);'),
    '%ERROR%' => post_enum('error', array('error_reporting (E_ALL ^ E_NOTICE);', 'error_reporting (0);'), defined('ERROR_REPORT') ? ERROR_REPORT : 'error_reporting (0);'),
    '%SERVERNAME%' => post_string('servername', defined('SERVER_NAME') ? SERVER_NAME : 'nalooti', 100),
    '%STIMEZONE%' => post_enum('tzone', timezone_identifiers_list(), defined('TIMEZONE') ? TIMEZONE : 'UTC'),
    '%STARTTIME%' => defined('COMMENCE') ? COMMENCE : time(),
    '%SSTARTDATE%' => defined('START_DATE') ? START_DATE : date('Y-m-d'),
    '%SSTARTTIME%' => defined('START_TIME') ? START_TIME : date('H:i:s'),
    '%LANG%' => post_enum('lang', array('en', 'fa', 'es', 'rs', 'ru', 'zh_tw'), defined('LANG') ? LANG : 'en'),
    '%SPEED%' => post_number('speed', defined('SPEED') ? SPEED : 1, 1, 100, true),
    '%MAX%' => defined('WORLD_MAX') ? WORLD_MAX : 400,
    '%GP%' => config_bool(post_bool('gpack', defined('GP_ENABLE') && GP_ENABLE)),
    '%GP_LOCATE%' => defined('GP_LOCATE') ? GP_LOCATE : 'gpack/travian_default/',
    '%INCSPEED%' => post_number('incspeed', defined('INCREASE_SPEED') ? INCREASE_SPEED : 1, 1, 100, true),
    '%EVASIONSPEED%' => post_number('evasionspeed', defined('EVASION_SPEED') ? EVASION_SPEED : 1, 1, 100, true),
    '%TRADERCAP%' => post_number('tradercap', defined('TRADER_CAPACITY') ? TRADER_CAPACITY : 500, 1, 1000000, true),
    '%CRANNYCAP%' => post_number('crannycap', defined('CRANNY_CAPACITY') ? CRANNY_CAPACITY : 1000, 1, 1000000, true),
    '%TRAPPERCAP%' => post_number('trappercap', defined('TRAPPER_CAPACITY') ? TRAPPER_CAPACITY : 20, 1, 1000000, true),
    '%VILLAGE_EXPAND%' => post_enum('village_expand', array('0', '1'), defined('CP') ? (string) CP : '1'),
    '%DEMOLISH%' => post_enum('demolish', array('5', '10', '15', '20'), defined('DEMOLISH_LEVEL_REQ') ? (string) DEMOLISH_LEVEL_REQ : '10'),
    '%STORAGE_MULTIPLIER%' => post_number('storage_multiplier', defined('STORAGE_MULTIPLIER') ? STORAGE_MULTIPLIER : 1, 1, 100, true),
    '%QUEST%' => config_bool(post_bool('quest', defined('QUEST') && QUEST)),
    '%QTYPE%' => post_enum('qtype', array('25', '37'), defined('QTYPE') ? (string) QTYPE : '25'),
    '%BEGINNER%' => post_enum('beginner', array('7200', '10800', '18000', '28800', '36000', '43200', '86400', '172800', '259200', '432000'), defined('PROTECTION') ? (string) PROTECTION : '86400'),
    '%WW%' => config_bool(post_bool('ww', defined('WW') && WW)),
    '%SHOW_NATARS%' => config_bool(post_bool('show_natars', defined('SHOW_NATARS') && SHOW_NATARS)),
    '%NATARS_UNITS%' => post_number('natars_units', defined('NATARS_UNITS') ? NATARS_UNITS : 1, 0, 1000000, true),
    '%NATARS_SPAWN_TIME%' => post_number('natars_spawn_time', defined('NATARS_SPAWN_TIME') ? NATARS_SPAWN_TIME : 0, 0, 999999999),
    '%NATARS_WW_SPAWN_TIME%' => post_number('natars_ww_spawn_time', defined('NATARS_WW_SPAWN_TIME') ? NATARS_WW_SPAWN_TIME : 0, 0, 999999999),
    '%NATARS_WW_BUILDING_PLAN_SPAWN_TIME%' => post_number('natars_ww_building_plan_spawn_time', defined('NATARS_WW_BUILDING_PLAN_SPAWN_TIME') ? NATARS_WW_BUILDING_PLAN_SPAWN_TIME : 0, 0, 999999999),
    '%NATURE_REGTIME%' => post_enum('nature_regtime', array('28800', '36000', '43200', '57600', '72000', '86400', '172800', '259200', '432000'), defined('NATURE_REGTIME') ? (string) NATURE_REGTIME : '86400'),
    '%OASIS_WOOD_MULTIPLIER%' => post_number('oasis_wood_multiplier', defined('OASIS_WOOD_MULTIPLIER') ? OASIS_WOOD_MULTIPLIER : 40, 0, 100000, true),
    '%OASIS_CLAY_MULTIPLIER%' => post_number('oasis_clay_multiplier', defined('OASIS_CLAY_MULTIPLIER') ? OASIS_CLAY_MULTIPLIER : 40, 0, 100000, true),
    '%OASIS_IRON_MULTIPLIER%' => post_number('oasis_iron_multiplier', defined('OASIS_IRON_MULTIPLIER') ? OASIS_IRON_MULTIPLIER : 40, 0, 100000, true),
    '%OASIS_CROP_MULTIPLIER%' => post_number('oasis_crop_multiplier', defined('OASIS_CROP_MULTIPLIER') ? OASIS_CROP_MULTIPLIER : 40, 0, 100000, true),
    '%T4_COMING%' => config_bool(defined('T4_COMING') && T4_COMING),
    '%ACTIVATE%' => config_bool(post_bool('activate', defined('AUTH_EMAIL') && AUTH_EMAIL)),
    '%MEDALINTERVAL%' => post_enum('medalinterval', array('0', '(3600*24)', '(3600*24*2)', '(3600*24*3)', '(3600*24*4)', '(3600*24*5)', '(3600*24*6)', '(3600*24*7)'), defined('MEDALINTERVAL') ? (string) MEDALINTERVAL : '0'),
    '%GREAT_WKS%' => config_bool(post_bool('great_wks', defined('GREAT_WKS') && GREAT_WKS)),
    '%TS_THRESHOLD%' => post_number('ts_threshold', defined('TS_THRESHOLD') ? TS_THRESHOLD : 20, 0, 1000000, true),
    '%REG_OPEN%' => config_bool(post_bool('reg_open', defined('REG_OPEN') && REG_OPEN)),
    '%PEACE%' => post_enum('peace', array('0', '1', '2', '3', '4'), defined('PEACE') ? (string) PEACE : '0'),
    '%LOGBUILD%' => config_bool(defined('LOG_BUILD') && LOG_BUILD),
    '%LOGTECH%' => config_bool(defined('LOG_TECH') && LOG_TECH),
    '%LOGLOGIN%' => config_bool(defined('LOG_LOGIN') && LOG_LOGIN),
    '%LOGGOLDFIN%' => config_bool(defined('LOG_GOLD_FIN') && LOG_GOLD_FIN),
    '%LOGADMIN%' => config_bool(defined('LOG_ADMIN') && LOG_ADMIN),
    '%LOGWAR%' => config_bool(defined('LOG_WAR') && LOG_WAR),
    '%LOGMARKET%' => config_bool(defined('LOG_MARKET') && LOG_MARKET),
    '%LOGILLEGAL%' => config_bool(defined('LOG_ILLEGAL') && LOG_ILLEGAL),
    '%BOX1%' => config_bool(defined('NEWSBOX1') && NEWSBOX1),
    '%BOX2%' => config_bool(defined('NEWSBOX2') && NEWSBOX2),
    '%BOX3%' => config_bool(defined('NEWSBOX3') && NEWSBOX3),
    '%SSERVER%' => defined('SQL_SERVER') ? SQL_SERVER : 'localhost',
    '%SPORT%' => defined('SQL_PORT') ? SQL_PORT : 3306,
    '%SUSER%' => defined('SQL_USER') ? SQL_USER : '',
    '%SPASS%' => defined('SQL_PASS') ? SQL_PASS : '',
    '%SDB%' => defined('SQL_DB') ? SQL_DB : '',
    '%PREFIX%' => defined('TB_PREFIX') ? TB_PREFIX : 'zravian_',
    '%CONNECTT%' => defined('DB_TYPE') ? DB_TYPE : 1,
    '%LIMIT_MAILBOX%' => config_bool(defined('LIMIT_MAILBOX') && LIMIT_MAILBOX),
    '%MAX_MAILS%' => defined('MAX_MAIL') ? MAX_MAIL : 30,
    '%ACTCEN%' => defined('WORD_CENSOR') ? config_bool(WORD_CENSOR) : 'false',
    '%CENWORDS%' => defined('CENSORED') ? CENSORED : '',
    '%ARANK%' => config_bool(defined('INCLUDE_ADMIN') && INCLUDE_ADMIN),
    '%AEMAIL%' => defined('ADMIN_EMAIL') ? ADMIN_EMAIL : '',
    '%ASUPPMSGS%' => config_bool(defined('ADMIN_RECEIVE_SUPPORT_MESSAGES') && ADMIN_RECEIVE_SUPPORT_MESSAGES),
    '%ARAIDS%' => config_bool(defined('ADMIN_ALLOW_INCOMING_RAIDS') && ADMIN_ALLOW_INCOMING_RAIDS),
    '%ANAME%' => defined('ADMIN_NAME') ? ADMIN_NAME : 'Admin',
    '%UTRACK%' => '',
    '%UTOUT%' => '',
    '%DOMAIN%' => defined('DOMAIN') ? DOMAIN : '',
    '%HOMEPAGE%' => defined('HOMEPAGE') ? HOMEPAGE : '',
    '%SERVER%' => defined('SERVER') ? SERVER : '',
    '%NEW_FUNCTIONS_OASIS%' => config_bool(defined('NEW_FUNCTIONS_OASIS') && NEW_FUNCTIONS_OASIS),
    '%NEW_FUNCTIONS_ALLIANCE_INVITATION%' => config_bool(defined('NEW_FUNCTIONS_ALLIANCE_INVITATION') && NEW_FUNCTIONS_ALLIANCE_INVITATION),
    '%NEW_FUNCTIONS_EMBASSY_MECHANICS%' => config_bool(defined('NEW_FUNCTIONS_EMBASSY_MECHANICS') && NEW_FUNCTIONS_EMBASSY_MECHANICS),
    '%NEW_FUNCTIONS_FORUM_POST_MESSAGE%' => config_bool(defined('NEW_FUNCTIONS_FORUM_POST_MESSAGE') && NEW_FUNCTIONS_FORUM_POST_MESSAGE),
    '%NEW_FUNCTIONS_TRIBE_IMAGES%' => config_bool(defined('NEW_FUNCTIONS_TRIBE_IMAGES') && NEW_FUNCTIONS_TRIBE_IMAGES),
    '%NEW_FUNCTIONS_MHS_IMAGES%' => config_bool(defined('NEW_FUNCTIONS_MHS_IMAGES') && NEW_FUNCTIONS_MHS_IMAGES),
    '%NEW_FUNCTIONS_DISPLAY_ARTIFACT%' => config_bool(defined('NEW_FUNCTIONS_DISPLAY_ARTIFACT') && NEW_FUNCTIONS_DISPLAY_ARTIFACT),
    '%NEW_FUNCTIONS_DISPLAY_WONDER%' => config_bool(defined('NEW_FUNCTIONS_DISPLAY_WONDER') && NEW_FUNCTIONS_DISPLAY_WONDER),
    '%NEW_FUNCTIONS_VACATION%' => config_bool(defined('NEW_FUNCTIONS_VACATION') && NEW_FUNCTIONS_VACATION),
    '%NEW_FUNCTIONS_DISPLAY_CATAPULT_TARGET%' => config_bool(defined('NEW_FUNCTIONS_DISPLAY_CATAPULT_TARGET') && NEW_FUNCTIONS_DISPLAY_CATAPULT_TARGET),
    '%NEW_FUNCTIONS_MANUAL_NATURENATARS%' => config_bool(defined('NEW_FUNCTIONS_MANUAL_NATURENATARS') && NEW_FUNCTIONS_MANUAL_NATURENATARS),
    '%NEW_FUNCTIONS_DISPLAY_LINKS%' => config_bool(defined('NEW_FUNCTIONS_DISPLAY_LINKS') && NEW_FUNCTIONS_DISPLAY_LINKS),
    '%NEW_FUNCTIONS_MEDAL_3YEAR%' => config_bool(defined('NEW_FUNCTIONS_MEDAL_3YEAR') && NEW_FUNCTIONS_MEDAL_3YEAR),
    '%NEW_FUNCTIONS_MEDAL_5YEAR%' => config_bool(defined('NEW_FUNCTIONS_MEDAL_5YEAR') && NEW_FUNCTIONS_MEDAL_5YEAR),
    '%NEW_FUNCTIONS_MEDAL_10YEAR%' => config_bool(defined('NEW_FUNCTIONS_MEDAL_10YEAR') && NEW_FUNCTIONS_MEDAL_10YEAR),
    '%PLUS_TIME%' => defined('PLUS_TIME') ? PLUS_TIME : 2592000,
    '%PLUS_PRODUCTION%' => defined('PLUS_PRODUCTION') ? PLUS_PRODUCTION : 604800,
    '%ZARINPAL_MERCHANT%' => defined('ZARINPAL_MERCHANT') ? ZARINPAL_MERCHANT : 'martin@martinambrus.com',
    '%PAYMENT_CURRENCY%' => defined('PAYMENT_CURRENCY') ? PAYMENT_CURRENCY : 'Toman',
    '%PLUS_PACKAGE_A_PRICE%' => defined('PLUS_PACKAGE_A_PRICE') ? PLUS_PACKAGE_A_PRICE : '1,99',
    '%PLUS_PACKAGE_A_GOLD%' => defined('PLUS_PACKAGE_A_GOLD') ? PLUS_PACKAGE_A_GOLD : '60',
    '%PLUS_PACKAGE_B_PRICE%' => defined('PLUS_PACKAGE_B_PRICE') ? PLUS_PACKAGE_B_PRICE : '4,99',
    '%PLUS_PACKAGE_B_GOLD%' => defined('PLUS_PACKAGE_B_GOLD') ? PLUS_PACKAGE_B_GOLD : '120',
    '%PLUS_PACKAGE_C_PRICE%' => defined('PLUS_PACKAGE_C_PRICE') ? PLUS_PACKAGE_C_PRICE : '9,99',
    '%PLUS_PACKAGE_C_GOLD%' => defined('PLUS_PACKAGE_C_GOLD') ? PLUS_PACKAGE_C_GOLD : '360',
    '%PLUS_PACKAGE_D_PRICE%' => defined('PLUS_PACKAGE_D_PRICE') ? PLUS_PACKAGE_D_PRICE : '19,99',
    '%PLUS_PACKAGE_D_GOLD%' => defined('PLUS_PACKAGE_D_GOLD') ? PLUS_PACKAGE_D_GOLD : '1000',
    '%PLUS_PACKAGE_E_PRICE%' => defined('PLUS_PACKAGE_E_PRICE') ? PLUS_PACKAGE_E_PRICE : '49,99',
    '%PLUS_PACKAGE_E_GOLD%' => defined('PLUS_PACKAGE_E_GOLD') ? PLUS_PACKAGE_E_GOLD : '2000',
);

$template = file_get_contents($templateFile);
if ($template === false) {
    die('Unable to read constant_format.tpl');
}

$configText = strtr($template, $replacements);

if (preg_match('/%[A-Z0-9_]+%/', $configText)) {
    $unresolved = find_unresolved_placeholders($configText);
    $details = array();

    foreach ($unresolved as $issue) {
        $details[] = htmlspecialchars(
            $issue['placeholder'] . ' on line ' . $issue['line'] . ': ' . $issue['context'],
            ENT_QUOTES,
            'UTF-8'
        );
    }

    die(
        'Configuration template still contains unresolved placeholders.<br />' .
        'Please update <strong>constant_format.tpl</strong> or add missing replacements in <strong>editServerSet.php</strong>.<br />' .
        'Unresolved entries:<br />' .
        implode('<br />', $details)
    );
}

$backupFile = $configFile . '.bak';
$tempFile = $configFile . '.tmp';

if (!@copy($configFile, $backupFile)) {
    die('Unable to create backup of GameEngine/config.php');
}

if (file_put_contents($tempFile, $configText, LOCK_EX) === false) {
    die('Unable to write temporary configuration file.');
}

if (!@rename($tempFile, $configFile)) {
    @unlink($tempFile);
    die('Unable to replace GameEngine/config.php');
}

$database->query("Insert into " . TB_PREFIX . "admin_log values (0," . $id . ",'Changed General Server Settings'," . time() . ")");

header("Location: ../../../Admin/admin.php?p=config");
exit;

?>
