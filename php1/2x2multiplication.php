<?php 
    $arr1 = array(
        array(1,2),
        array(3,4)
    );

    $arr2 = array(
        array(5,6),
        array(7,8)
    );

    $result = array();

    for( $i = 0; $i < count($arr1); $i++ ) {
        for( $j = 0; $j < count($arr2); $j++) {
            $result[$i][$j] = 0;
            for($k = 0; $k < count($arr1); $k++) {
                $result[$i][$j] += $arr1[$i][$k] * $arr2[$k][$j];
            }
        }
    }

    foreach($result as $i) {
        foreach($i as $j) {
            echo $j . " ";
        }
        echo "\n";
    }   
?>