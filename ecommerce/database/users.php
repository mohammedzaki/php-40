<?php


require "../helpers/session_handler.php";


function checkUser($username, $password) {

    if ($username == 'abc' && $password == '123') {

        save_into_session(USERNAME, $username);

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
