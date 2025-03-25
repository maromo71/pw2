<?php
    $num = [31, 1, 7, 2, 0];
    for ($i=0; $i < sizeof($num); $i++) { 
        for($j=$i+1; $j < sizeof($num); $j++){
            if($num[$i] > $num[$j]){
                $troca = $num[$i];    
                $num[$i] = $num[$j];
                $num[$j] = $troca;
            }
        }
    }
    for ($i=0; $i < sizeof($num); $i++) { 
        echo $num[$i] . "\n";
    }