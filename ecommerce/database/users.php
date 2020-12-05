<?php


require "../helpers/session_handler.php";
require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/connect.php";

function checkUser($username, $password) {
    $sql = "SELECT * FROM users WHERE username = '{$username}' and `password` = '{$password}';";
    $result = execute_select_one($sql);

    if (count($result) > 0) {
        save_into_session(App_Keys::USERNAME, $result['username']);
        return true;
    } else {
        return false;
    }
}

function getUserData($username) {
    switch ($username) {
        case "abc": return "A B C";
        case "mm": return "M B";
        default: "None";
    }
}
