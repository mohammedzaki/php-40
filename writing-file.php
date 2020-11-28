<?php
$filename = "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/textdata.txt";
$file = fopen( $filename, "w" );

if( $file == false )
{
    echo ( "Error in opening new file" );
    exit();
}
fwrite( $file, "This is a simple test\n" );
fclose( $file );

?>