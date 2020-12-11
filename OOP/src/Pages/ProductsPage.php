<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 10:30 AM
 */

namespace OOP\Pages;

use OOP\Products\Kitchen_Machine;

class ProductsPage
{
    public function get() {
        $prod = new Kitchen_Machine();

        echo "Products Page \n";

        echo $prod->get_using();
    }

}