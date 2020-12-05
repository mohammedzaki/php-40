<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 12:40 PM
 */

abstract class Base_Product {

    public $id;
    public $name;

    private $type;

    abstract public function get_using();

    public function get_info() {
        return "test test";
    }
}


class Kitchen_Machine extends Base_Product {


    public function get_using()
    {
        return "Kitchen_Machine in cook";
    }
}


$prod = new Kitchen_Machine();


echo $prod->get_using();

echo $prod->get_info();