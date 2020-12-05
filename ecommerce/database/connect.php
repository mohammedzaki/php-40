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

    return $con;
}

function execute_select_one($sql)
{
    $con = connect_to_db();

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        return $row;
    } else {
        return [];
    }

    mysqli_close($con);
}

function execute_select_all($sql)
{
    $con = connect_to_db();

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $rows;
    } else {
        return [];
    }

    mysqli_close($con);
}

function execute_command($sql) {
    $con = connect_to_db();

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully <br>";
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        return false;
    }

    mysqli_close($con);
}