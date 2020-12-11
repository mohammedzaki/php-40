<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 11:33 AM
 */

class Fruit {

    // Properties
    private $name;
    public $color;
    protected $weight;

    function __construct($f_name = "Fruit Name", $color = "") {
        $this->name = $f_name;
        $this->color = $color;
    }

//    function __destruct()
//    {
//        echo "Ending fruit is {$this->name}. <br>";
//    }

    // Methods
    function set_name($f_name) {
        $this->name = $f_name;
    }

    function get_name() {
        return $this->name;
    }


    protected function set_color($n) { // a protected function
        $this->color = $n;
    }
    private function set_weight($n) { // a private function
        $this->weight = $n;
    }

    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }

}

// Declear Objects
$apple = new Fruit('Apple');
$banana = new Fruit();

// $apple->set_name('Apple');

// $banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";

