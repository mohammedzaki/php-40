<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/20/20
 * Time: 6:17 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/connect.php";


function get_all_products() {
    $sql = "SELECT * FROM `products`;";
    return execute_select_all($sql);
}

function add_new_product($id, $name, $price, $desc) {
    $sql = "INSERT INTO `products` (`id`, `name`, `price`, `desc`)  VALUES ({$id}, '{$name}', {$price}, '{$desc}');";
    if (execute_command($sql)) {
        header("Location: /php-40/ecommerce/pages/products/index.php");
    }
}