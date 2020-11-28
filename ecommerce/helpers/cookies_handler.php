<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/28/20
 * Time: 11:24 AM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/helpers/app_keys.php";

function get_from_cookies($key) {
    if (isset($_COOKIE[$key])) {
        return $_COOKIE[$key];
    } else {
        return null;
    }
}

function save_into_cookies($key, $value, $time) {
    setcookie($key, $value, $time, "/", "", 0);
}

function reset_cookies_data() {

}