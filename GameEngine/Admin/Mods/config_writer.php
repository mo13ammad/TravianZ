<?php

function tz_admin_get_config_path() {
    return realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR . 'config.php';
}

function tz_admin_get_template_path() {
    $candidates = array(
        __DIR__ . DIRECTORY_SEPARATOR . 'constant_format.tpl',
        realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'install' . DIRECTORY_SEPARATOR . 'data') . DIRECTORY_SEPARATOR . 'constant_format.tpl',
    );

    foreach ($candidates as $candidate) {
        if ($candidate && file_exists($candidate)) {
            return $candidate;
        }
    }

    die(
        'Missing <strong>constant_format.tpl</strong>.<br />' .
        'Checked:<br />' .
        htmlspecialchars(implode('<br />', $candidates), ENT_QUOTES, 'UTF-8')
    );
}

function tz_admin_load_template() {
    $template = file_get_contents(tz_admin_get_template_path());

    if ($template === false) {
        die('Unable to read constant_format.tpl');
    }

    return $template;
}

function tz_admin_save_config_text($configText) {
    $configFile = tz_admin_get_config_path();

    if (!file_exists($configFile)) {
        die("Can't find file: GameEngine/config.php");
    }

    if (!is_writable($configFile)) {
        die("GameEngine/config.php is not writable.");
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
}

?>
