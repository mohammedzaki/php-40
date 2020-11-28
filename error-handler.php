<?php

//function handleError($errno, $errstr, $error_file, $error_line)
//{
//    echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
//    echo "<br />";
//    echo "Terminating PHP Script";
//    die();
//}
//
//function error_handler($output)
//{
//    $error = error_get_last();
//    $output = "";
//
//    foreach ($error as $info => $string)
//        $output .= "{$info}: {$string}<br>";
//    return $output;
//}
//
//ob_start('error_handler');
////set error handler
//set_error_handler("handleError");
//
////trigger error
//myFunction();

//try {
//    $error = 'Always throw this error';
//    throw new Exception($error);
//// Code following an exception is not executed.
//    echo 'Never executed';
//} catch (Exception $e) {
//    echo 'Caught exception: ', $e->getMessage(), "\n";
//}
//// Continue execution
//echo 'Hello World';

//function exception_handler($exception) {
//    echo "E-COM Uncaught exception: " , $exception->getMessage(), "\n";
//}
//
//set_exception_handler('exception_handler');
//throw new Exception('Uncaught Exception');
//
//echo "Not Executed\n";
//
//
echo "Welcome " . $name;
?>