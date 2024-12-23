<?php
    // 2x2 determinant
    $arr = array(
        array(3, 8),
        array(4, 6)
    );

    $det = $arr[0][0] * $arr[1][1] - $arr[0][1] * $arr[1][0];

    echo "Determinant for 2x2 = $det \n";
    echo '\n';

    function determinant3x3($matrix) {
        return ($matrix[0][0] * ($matrix[1][1] * $matrix[2][2] - $matrix[1][2] * $matrix[2][1])) 
             - ($matrix[0][1] * ($matrix[1][0] * $matrix[2][2] - $matrix[1][2] * $matrix[2][0])) 
             + ($matrix[0][2] * ($matrix[1][0] * $matrix[2][1] - $matrix[1][1] * $matrix[2][0]));
    }

    $array = array(
        array(6,1,1),
        array(4,-2,5),
        array(2,8,7)
    );

    $deter = determinant3x3($array);

    echo "Determinant for 3x3 = $deter \n";
?>