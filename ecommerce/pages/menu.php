<?php require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/helpers/session_handler.php"; ?>

<menu>
    <a href="/php-40/ecommerce/pages/home.php">Home</a> -
    <a href="/php-40/ecommerce/pages/products/index.php">Products</a> -
    <a href="/php-40/ecommerce/pages/cart.php">Cart</a> -
    <a href="/php-40/ecommerce/pages/checkout.php">Checkout</a> -

    <?php if (get_from_session(USERNAME) != null) { ?>

        <a href="logout.php">Hello, <?php echo get_from_session(USERNAME); ?> - Logout</a>

    <?php } else { ?>
        <a href="login.php">Login</a>
    <?php } ?>

</menu>