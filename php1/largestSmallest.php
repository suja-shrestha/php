<?php
    $arr = [8,12,13, 20, 60,55];

    echo "The smallest number is: " . min($arr) . "\n";
    echo "The largest number is: " . max($arr) . "\n";


    echo "With foreach:\n ";
    $max = $arr[0];
    $min = $arr[0];
    foreach($arr as $i) {
        if($max < $i) {
            $max = $i;
        } 
    }

    foreach($arr as $i) {
        if($min > $i) {
            $min = $i;
        }
    }
    echo "Largest: " . $max . "\n";
    echo "Smallest: " .$min . "\n";
?>