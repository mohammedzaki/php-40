<?php
require ("../database/users.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (checkUser($username, $password)) {
        header("Location: home.php");
    } else {
        echo "error in username or password!";
    }
}

?>

<html>
<head>

</head>
<body>

<?php connect_to_db(); ?>

<form action="<?php $_PHP_SELF ?>" method="POST">

    Username: <input type="text" name="username"/> <br>
    Password: <input type="text" name="password"/> <br>

    <input type="submit" value="Login"/> <br>

</form>
</body>
</html>


