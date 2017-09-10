<?php
    header("content-type:text/html;charset=utf-8");
    echo "hello world!";
    $num =1;
    for($num = 1;$num < 10;$num++) {
        echo $num."\b";
    }
