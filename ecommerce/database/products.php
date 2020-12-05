<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/20/20
 * Time: 6:17 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/connect.php";


function get_all_products() {
    $con = connect_to_db();

    $sql = "SELECT * FROM `products`;";

    $result = mysqli_query($con, $sql);


    if (mysqli_num_rows($result) > 0) {

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $rows;

    } else {
        echo "No Products <br>";
        return [];
    }
}

function add_new_product($id, $name, $price, $desc) {
    $con = connect_to_db();

    $sql = "INSERT INTO `products` (`id`, `name`, `price`, `desc`)  VALUES ({$id}, '{$name}', {$price}, '{$desc}')";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully <br>";
        header("Location: /php-40/ecommerce/pages/products/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}