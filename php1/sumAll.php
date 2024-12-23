<?php
    $arr = [10, 18, 15, 6, 24];
    $sum = 0;
    echo "Sum of all elements in an array\n";

    foreach($arr as $item) {
        $sum += $item;
    }
    echo "The sum is :" . $sum . "\n";
?>