<?php


require "../helpers/session_handler.php";
require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/connect.php";

function checkUser($username, $password) {

    /*
     SELECT *
FROM users
WHERE username = "mzaki" and `password` = "123456";
     */

    $con = connect_to_db();

    $sql = "SELECT * FROM users WHERE username = '{$username}' and `password` = '{$password}';";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        save_into_session(USERNAME, $row['username']);

        return true;
    } else {
        return false;
    }

    mysqli_close($con);
}

function getUserData($username) {
    switch ($username) {
        case "abc": return "A B C";
        case "mm": return "M B";
        default: "None";
    }
}
