<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 12:59 PM
 */

namespace OOP\Products;

use OOP\Products\Base_Product;

class Kitchen_Machine extends Base_Product {


    public function get_using()
    {
        return "Kitchen_Machine in cook";
    }
}