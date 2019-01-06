<?php

if( $json = file_get_contents('php://input') ){
    $obj = json_decode( $json, true );

    $handle = fopen('text.txt', 'w');
    $contents = "";

    foreach( $obj as $k=>$v ){
        $contents .= "\n\n" . $k . " : " . $v;
    }

    fwrite( $handle, $contents );
    fclose( $handle );

}
