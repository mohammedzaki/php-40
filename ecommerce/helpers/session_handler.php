<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/27/20
 * Time: 9:52 AM
 */

require_once '/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/helpers/app_keys.php';

session_start();

function get_from_session($key) {
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    } else {
        return null;
    }
}

function save_into_session($key, $value) {
    $_SESSION[$key] = $value;
}

function reset_session_data() {
    session_destroy();
}