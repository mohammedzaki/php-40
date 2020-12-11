<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 12:33 PM
 */

class GoodBye
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye()
    {
        echo self::LEAVING_MESSAGE;
    }
}


echo GoodBye::LEAVING_MESSAGE;

$goodbye = new Goodbye();
$goodbye->byebye();