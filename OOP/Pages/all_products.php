<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 12:55 PM
 */

namespace OOP\Pages;

// include "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/OOP/Products/Base_Product.php";
// include "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/OOP/Products/Kitchen_Machine.php";

use OOP\Products\Kitchen_Machine;

$prod = new Kitchen_Machine();

echo $prod->get_using();