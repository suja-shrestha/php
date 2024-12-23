<?php 
    $arr = [1, 5 ,6, 3, 4, 9,8];
    $temp = 0;

    for($i = 0; $i < sizeof($arr); $i++) {
        for($j = $i+1; $j < sizeof($arr); $j++) {
            if($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    echo "Ascending: \n";
    foreach($arr as $item) {
        echo $item . "\n";
    }
?>