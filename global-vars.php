<?php 


$name = "Mohammed Ahmed";



function printName($fn, $age = 0, $ln = "") 
{
    global $name;

    if ($name == null)
        return;
    
    $name = $fn . " " . $ln . ", age: " . $age;

    echo "in func: {$name} <br>";

}

printName("Mohame Zxxx");
printName("Mohame Zxxx", 13);
printName("fsdfdf a", 'mkkkkk');
//
//echo 'outside func: ' . $name;
//
//
//function autoInc(){
//
//    STATIC $index = 0;
//
//    $index++;
//
//    print $index;
//    print "<br>";
//}
//
//autoInc(); // 1
//autoInc(); // 2
//autoInc(); // 3
//autoInc(); // 4
//
//
//define('BYE', 3.14);
//
//echo BYE;
//
//$res = 45 * BYE;
//
//echo "========= " . $res . " ========= ";
//
//
//
//echo $BYE;