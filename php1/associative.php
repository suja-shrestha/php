<?php
    $array = ["name"=>"Abdul", "age"=>1, "gender"=>"Male"];
    array_pop($array);

    $name = $array["name"];
    echo $name . "\n";

    $arr = ["Math"=> 92,"Science"=> 12];
    $arr["Science"] = 99;

    unset($arr["Math"]);    // Deleting element with certain key.
    foreach($arr as $key=>$value) {
        echo "$key: $value" . "\n";
    }

    $mark = $arr["Science"];
    echo $mark . "\n";
    // Looping through associative array
    foreach($array as $key=>$value) {
        echo "$key: $value" . "\n";
    }
?>