<?php

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/database/products.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    add_new_product($_POST['id'], $_POST['name'], $_POST['price'], $_POST['desc']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Product</title>
</head>
<body>

<?php include("../menu.php") ?>

<p>This is an example to add new product</p>


<form action="<?php $_PHP_SELF ?>" method="post">

    <label>ID: </label> <input type="text" name="id"/> <br>
    <label>Name: </label> <input type="text" name="name"/> <br>
    <label>Price: </label> <input type="text" name="price"/> <br>
    <label>Description: </label> <input type="text" name="desc"/> <br>


    <input type="submit" value="Add New" />

</form>

<!--<form action="/php-40/ecommerce/helpers/file_uploader.php" method="post" enctype="multipart/form-data">-->
<!---->
<!--    <input type="file" required name="file" size="10" />-->
<!--    <br />-->
<!--    <input type="submit" value="Upload File" />-->
<!---->
<!--</form>-->


</body>
</html>