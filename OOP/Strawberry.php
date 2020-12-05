<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 12:08 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/OOP/Fruit.php";

class Strawberry extends Fruit
{
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();