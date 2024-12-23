<?php
    $array = array(
        array(6,1,1),
        array(4,-2,5),
        array(2,8,7)
    );

    $sum = 0;

    for($i = 0; $i < count($array); $i++) {
        $sum += $array[$i][$i];
    }
    echo "Sum of Diagonals: $sum \n";
?>