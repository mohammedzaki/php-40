<?php

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/cart.php";
require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/products.php";

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
    <a href="add-new.php">Add New Product</a>
</div>
<br>

<?php foreach (get_all_products() as $product) { ?>

    <form action="<?php $_PHP_SELF ?>" method="post">
        <div>
            <input readonly name="p_name" value="<?php echo $product['name']?>"/>: <input readonly name="p_price" value="<?php echo $product['price']?>"/>

            <input hidden name="p_id" value="<?php echo $product['id']?>"/>

            <button>add to cart</button>

            <br/>
        </div>
    </form>

<?php } ?>

</body>
</html>


