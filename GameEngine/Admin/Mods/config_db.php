<?php

if (!function_exists('tz_admin_config_columns')) {
    function tz_admin_config_columns()
    {
        return array(
            'error_report' => 'TEXT NULL',
            'server_name' => 'TEXT NULL',
            'timezone' => 'TEXT NULL',
            'lang' => 'TEXT NULL',
            'speed' => 'TEXT NULL',
            'gp_enable' => 'TEXT NULL',
            'increase_speed' => 'TEXT NULL',
            'evasion_speed' => 'TEXT NULL',
            'trader_capacity' => 'TEXT NULL',
            'cranny_capacity' => 'TEXT NULL',
            'trapper_capacity' => 'TEXT NULL',
            'cp' => 'TEXT NULL',
            'demolish_level_req' => 'TEXT NULL',
            'storage_multiplier' => 'TEXT NULL',
            'quest' => 'TEXT NULL',
            'qtype' => 'TEXT NULL',
            'protection' => 'TEXT NULL',
            'ww' => 'TEXT NULL',
            'show_natars' => 'TEXT NULL',
            'natars_units' => 'TEXT NULL',
            'natars_spawn_time' => 'TEXT NULL',
            'natars_ww_spawn_time' => 'TEXT NULL',
            'natars_ww_building_plan_spawn_time' => 'TEXT NULL',
            'nature_regtime' => 'TEXT NULL',
            'oasis_wood_multiplier' => 'TEXT NULL',
            'oasis_clay_multiplier' => 'TEXT NULL',
            'oasis_iron_multiplier' => 'TEXT NULL',
            'oasis_crop_multiplier' => 'TEXT NULL',
            'auth_email' => 'TEXT NULL',
            'medalinterval' => 'TEXT NULL',
            'great_wks' => 'TEXT NULL',
            'ts_threshold' => 'TEXT NULL',
            'reg_open' => 'TEXT NULL',
            'peace' => 'TEXT NULL',
            'plus_time' => 'TEXT NULL',
            'plus_production' => 'TEXT NULL',
            'zarinpal_merchant' => 'TEXT NULL',
            'payment_currency' => 'TEXT NULL',
            'plus_package_a_price' => 'TEXT NULL',
            'plus_package_a_gold' => 'TEXT NULL',
            'plus_package_b_price' => 'TEXT NULL',
            'plus_package_b_gold' => 'TEXT NULL',
            'plus_package_c_price' => 'TEXT NULL',
            'plus_package_c_gold' => 'TEXT NULL',
            'plus_package_d_price' => 'TEXT NULL',
            'plus_package_d_gold' => 'TEXT NULL',
            'plus_package_e_price' => 'TEXT NULL',
            'plus_package_e_gold' => 'TEXT NULL',
            'log_build' => 'TEXT NULL',
            'log_tech' => 'TEXT NULL',
            'log_login' => 'TEXT NULL',
            'log_gold_fin' => 'TEXT NULL',
            'log_admin' => 'TEXT NULL',
            'log_war' => 'TEXT NULL',
            'log_market' => 'TEXT NULL',
            'log_illegal' => 'TEXT NULL',
            'newsbox1' => 'TEXT NULL',
            'newsbox2' => 'TEXT NULL',
            'newsbox3' => 'TEXT NULL',
            'limit_mailbox' => 'TEXT NULL',
            'include_admin' => 'TEXT NULL',
            'admin_email' => 'TEXT NULL',
            'admin_name' => 'TEXT NULL',
            'admin_receive_support_messages' => 'TEXT NULL',
            'admin_allow_incoming_raids' => 'TEXT NULL',
            'new_functions_oasis' => 'TEXT NULL',
            'new_functions_alliance_invitation' => 'TEXT NULL',
            'new_functions_embassy_mechanics' => 'TEXT NULL',
            'new_functions_forum_post_message' => 'TEXT NULL',
            'new_functions_tribe_images' => 'TEXT NULL',
            'new_functions_mhs_images' => 'TEXT NULL',
            'new_functions_display_artifact' => 'TEXT NULL',
            'new_functions_display_wonder' => 'TEXT NULL',
            'new_functions_vacation' => 'TEXT NULL',
            'new_functions_display_catapult_target' => 'TEXT NULL',
            'new_functions_manual_naturenatars' => 'TEXT NULL',
            'new_functions_display_links' => 'TEXT NULL',
            'new_functions_medal_3year' => 'TEXT NULL',
            'new_functions_medal_5year' => 'TEXT NULL',
            'new_functions_medal_10year' => 'TEXT NULL',
        );
    }
}

if (!function_exists('tz_admin_post_bool_string')) {
    function tz_admin_post_bool_string($key, $default = false)
    {
        if (!isset($_POST[$key])) {
            return $default ? 'true' : 'false';
        }

        $value = strtolower(trim((string) $_POST[$key]));
        return in_array($value, array('1', 'true', 'yes', 'on'), true) ? 'true' : 'false';
    }
}

if (!function_exists('tz_admin_post_enum_string')) {
    function tz_admin_post_enum_string($key, $allowed, $default)
    {
        if (!isset($_POST[$key])) {
            return (string) $default;
        }

        $value = (string) $_POST[$key];
        return in_array($value, $allowed, true) ? $value : (string) $default;
    }
}

if (!function_exists('tz_admin_post_string_value')) {
    function tz_admin_post_string_value($key, $default = '', $maxLength = 255)
    {
        if (!isset($_POST[$key])) {
            return (string) $default;
        }

        $value = trim((string) $_POST[$key]);
        $value = str_replace(array("\r", "\n", "\0"), '', $value);

        if ($value === '') {
            return (string) $default;
        }

        if (function_exists('mb_substr')) {
            return mb_substr($value, 0, $maxLength);
        }

        return substr($value, 0, $maxLength);
    }
}

if (!function_exists('tz_admin_post_number_value')) {
    function tz_admin_post_number_value($key, $default, $min = null, $max = null, $allowFloat = false)
    {
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
}

if (!function_exists('tz_admin_config_ensure_schema')) {
    function tz_admin_config_ensure_schema($database)
    {
        $table = TB_PREFIX . 'config';
        $escapedTable = str_replace('`', '``', $table);

        $database->query(
            "CREATE TABLE IF NOT EXISTS `{$escapedTable}` (" .
            "`lastgavemedal` int(11) NULL" .
            ") ENGINE=InnoDB DEFAULT CHARSET=utf8"
        );

        $existing = array();
        $result = $database->query("SHOW COLUMNS FROM `{$escapedTable}`");
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $existing[$row['Field']] = true;
            }
            mysqli_free_result($result);
        }

        foreach (tz_admin_config_columns() as $column => $definition) {
            if (!isset($existing[$column])) {
                $escapedColumn = str_replace('`', '``', $column);
                $database->query("ALTER TABLE `{$escapedTable}` ADD COLUMN `{$escapedColumn}` {$definition}");
            }
        }

        $result = $database->query("SELECT 1 FROM `{$escapedTable}` LIMIT 1");
        $hasRow = ($result && mysqli_num_rows($result) > 0);
        if ($result) {
            mysqli_free_result($result);
        }

        if (!$hasRow) {
            $database->query("INSERT INTO `{$escapedTable}` (`lastgavemedal`) VALUES (0)");
        }
    }
}

if (!function_exists('tz_admin_config_save')) {
    function tz_admin_config_save($database, array $values)
    {
        tz_admin_config_ensure_schema($database);

        $allowedColumns = tz_admin_config_columns();
        $assignments = array();
        $table = str_replace('`', '``', TB_PREFIX . 'config');

        foreach ($values as $column => $value) {
            if (!isset($allowedColumns[$column])) {
                continue;
            }

            $escapedColumn = str_replace('`', '``', $column);
            if ($value === null) {
                $assignments[] = "`{$escapedColumn}` = NULL";
                continue;
            }

            $assignments[] = "`{$escapedColumn}` = '" . $database->escape((string) $value) . "'";
        }

        if (empty($assignments)) {
            return;
        }

        $database->query("UPDATE `{$table}` SET " . implode(', ', $assignments) . " LIMIT 1");
    }
}
