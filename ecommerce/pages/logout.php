<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/20/20
 * Time: 6:11 PM
 */

require '/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/helpers/session_handler.php';

reset_session_data();

header("Location: home.php");
