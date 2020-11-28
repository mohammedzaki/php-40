<?php

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/cart.php";


$cart_products = get_current_cart_products();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $p_id = $_POST['p_id'];

    remove_from_cart($p_id);

    header("Location: /php-40/ecommerce/pages/cart.php");
}

?>
<html>
<head>

</head>
<body>

<?php include("menu.php") ?>

<p>This is an example to show how to cart page</p>

<div>
    Welcome to Products Page
</div>

<?php if ($cart_products == null) {
    echo "No Products";
} ?>

<?php foreach ($cart_products as $product) { ?>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <div>
            <input readonly value="<?php echo $product['name'] ?>"/> :
            <input readonly value="<?php echo $product['price'] ?>"/> :
            <input readonly value="<?php echo $product['quantity'] ?>"/> :
            <input readonly value="<?php echo $product['total'] ?>"/> :

            <input hidden name="p_id" value="<?php echo $product['id'] ?>"/>

            <button>clear from cart</button>

            <br/>
        </div>
    </form>
<?php } ?>

</body>
</html>
