<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 10:19 AM
 */

require_once __DIR__ . "/../vendor/autoload.php";

use OOP\Pages\ProductsPage;

$prod = new ProductsPage();

echo $prod->get();
