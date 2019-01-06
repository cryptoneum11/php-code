<?php

# use with command line curl. use with a file or can type the JSON data inline
# curl -X POST -H 'content-type:application/json' -d @json.txt http://localhost/php-code/write_to_html.php

if( $json = file_get_contents('php://input') ) {
    $indexes = json_decode($json, true);

    $handle = fopen('index.html', 'w');
    $contents = "
    <!DOCTYPE html>
    <html>
        <head>
            <style>
                div{ font-family:'Ubuntu Regular', sans-serif; color:#000; }
            </style>
            <title>curl REST API to PHP script to HTML page</title>
        </head>
        <body>
        ";

    $count = 0;
    foreach ( $indexes as $index=>$value ){
        foreach ( $value as $key=>$item ) {
            $contents .= "<div>" . $key . " : " . $item . "</div>";
        }
        $contents .= "<br>";
        $count++;
    }

//    $contents .= count( $indexes );

    $contents .= "
        </body>
    </html>
    ";

    fwrite( $handle, $contents );
    fclose( $handle );

}
