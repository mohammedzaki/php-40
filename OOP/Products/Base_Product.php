<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 12:55 PM
 */

namespace OOP\Products;

abstract class Base_Product
{
    public $id;
    public $name;

    private $type;

    abstract public function get_using();

    public function get_info() {
        return "test test";
    }
}