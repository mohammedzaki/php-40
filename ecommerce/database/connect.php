<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/20/20
 * Time: 4:36 PM
 */

function connect_to_db() {

    $servername = "localhost"; // "127.0.0.1"

    $username = "db_user";
    $password = "3qtMWAAKLBfS1U2j";
    $dbname = "ecommerce";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //echo "Connected successfully";

    return $con;
}