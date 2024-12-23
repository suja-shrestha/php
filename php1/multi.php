
<?php 
    $multi = array(
        array(1,2),
        array(3,4),
        array(10,9)
    );

    $value1 = $multi[1][1];
    $firstValue = $multi[0][0];
    

    echo "value1 = $value1 \n";
    echo "firstValue = $firstValue \n";

    for($i = 0; $i < sizeof($multi); $i++) {
        for($j = 0; $j < sizeof($multi[$i]); $j++) {
            echo $multi[$i][$j] . " ";
        }
}
    echo "\n";

    foreach($multi as $row) {
        foreach($row as $value) {
            echo $value . " ";
        }
    }

    $sum = 0;
    foreach($multi as $row) {
        foreach($row as $value) {
            $sum = $sum + $value;
        }
    }
    echo "\n";
    echo "sum = $sum \n";
    echo "\n";
?>