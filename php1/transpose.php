<?php 
    $array = array(
        array(6,1,1),
        array(4,-2,5),
        array(2,8,7)
    );

    $transpose = array();

    for($i = 0; $i < count($array); $i++) {
        for($j = 0; $j < count($array); $j++) {
            $transpose[$i][$j] = $array[$j][$i];
        }
    }

    foreach($transpose as $i) {
        foreach($i as $j) {
            echo $j . " ";
        }
        echo "\n";
    }
?>