<?php

/*
 $_FILES['file']['tmp_name']- the uploaded file in the temporary directory on the web server.

 $_FILES['file']['name'] - the actual name of the uploaded file.

 $_FILES['file']['size'] - the size in bytes of the uploaded file.

 $_FILES['file']['type'] - the MIME type of the uploaded file.

 $_FILES['file']['error'] - the error code associated with this file upload.
*/
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    die("Not Allowed");
}
if( $_FILES['file']['name'] != "" )
{
    copy( $_FILES['file']['tmp_name'], "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/storage/products_img/" . $_FILES['file']['name'] ) or
    die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
?>

<html>
<head>
    <title>Uploading Complete</title>
</head>
<body>
<h2>Uploaded File Info:</h2>
<ul>
    <li>Sent file: <?php echo $_FILES['file']['name']; ?>
    <li>File size: <?php echo $_FILES['file']['size']; ?> bytes
    <li>File type: <?php echo $_FILES['file']['type']; ?>
</ul>
</body>
</html>
