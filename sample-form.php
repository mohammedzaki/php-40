<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/13/20
 * Time: 1:01 PM
 */
$name = '';
$age = '';


    $name = $_GET['name'];


    $age = $_GET['age'];


// $_POST['name']



?>

<html>
<head>

</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">

    Name: <input type="text" name="name"/> <br>
    Age: <input type="text" name="age"/> <br>

    <input type="submit"/>

    <?php if ($name && $age) { ?>

        <div>Your name is <?php echo $name ?> and you are <?php echo $age ?> years old</div>

    <?php } elseif (!$age && !$name) { ?>

        <div style="color: red">Please Enter your age and name</div>

    <?php } elseif ($age <= 18) { ?>
        <div style="color: red">Please Enter another age</div>
    <?php } ?>

</form>
</body>
</html>


