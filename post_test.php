<?php

include 'number_to_words.php';

if( !empty($_POST['var']) ){
    #echo "\n\n".'we have received your var, but don\'t care about it.';
    $var = number_to_word($_POST["var"]);
    echo "\n\n your var came through! we're happy to tell you that it's '{$var}'";
}else{
    echo "\n\n".'no var received.';
}

### use a command similar to below to post using curl
# curl -X POST -d 'var=3056548' 127.0.0.1/php-code/post_test.php

