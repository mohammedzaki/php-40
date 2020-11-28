<htm>
    <head>

    </head>
    <body>

    <?php

    $filename = "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/textdatadada.txt";

    if (file_exists($filename) == false) {
        echo "File doesn't exist!";
        exit();
    }


    $file = fopen($filename, "r");

    $filesize = filesize( $filename );

    $filetext = fread( $file, $filesize );

    fclose( $file );

    echo ( "File size : $filesize bytes" );
    echo ( "<pre>$filetext</pre>" );


    ?>

    </body>
</htm>