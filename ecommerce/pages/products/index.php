<?php

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/cart.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];

    add_to_cart($p_id, $p_name, $p_price);

    header("Location: /php-40/ecommerce/pages/cart.php");
}

?>

<html>
<head>

</head>
<body>

<?php include("../menu.php") ?>

<p>This is an example to show how to products page</p>


<div>
    Welcome to Products Page
</div>

<form action="<?php $_PHP_SELF ?>" method="post">
    <div>
        <input readonly name="p_name" value="product 1"/>: <input readonly name="p_price" value="15"/>

        <input hidden name="p_id" value="1"/>

        <button>add to cart</button>

        <br/>
    </div>
</form>

<form action="<?php $_PHP_SELF ?>" method="post">

    <div>
        <input readonly name="p_name" value="product 2"/>: <input readonly name="p_price" value="30"/>

        <input hidden name="p_id" value="2"/>

        <button>add to cart</button>

        <br/>
    </div>
</form>

<form action="<?php $_PHP_SELF ?>" method="post">
    <div>
        <input readonly name="p_name" value="product 3"/>: <input readonly name="p_price" value="20"/>

        <input hidden name="p_id" value="3"/>

        <button>add to cart</button>

        <br/>
    </div>
</form>

</body>
</html>


