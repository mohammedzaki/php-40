<?php
session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
    $_SESSION['counter_01'] += 1;
} else {
    $_SESSION['counter'] = 1;
    $_SESSION['counter_01'] += 1;
}
$msg = "You have visited this page " . $_SESSION['counter'] . " ";

$msg .= "<br> You have visited this page " . $_SESSION['counter_01'] . " ";
$msg .= " in this session.";

?>
<html>
<head>
    <title>Setting up a PHP session</title>
</head>
<body>
<?php echo($msg); ?>
</body>
</html>