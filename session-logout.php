<?php
session_start();

// unset($_SESSION['counter']);

session_destroy();

$msg = "Session logout";

?>
<html>
<head>
    <title>Setting up a PHP session</title>
</head>
<body>
<?php echo($msg); ?>
</body>
</html>