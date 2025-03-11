<?php
    $x  = 10;

    function teste(){
        global $x;
        $x++;
        echo $x . "\n";
    }

    teste();
    echo $x . "\n";