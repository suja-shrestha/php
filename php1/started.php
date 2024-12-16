<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="started.css">
</head>

<body>
    <?php
    #print
    $a = "sujal";
    echo '<button class="sujal">' . $a . ' is my name</button>';
    echo '<h1 class="sujal1"> hello every one </h1>';

    #variables:
    $name = "row";
    $age = 39;
    $salary = 100000000000;
    $ismanager = true;
    
    #array assign:
    $array_name = array("sujal", "shrestha", "prayush", "shrestha", "binita", "shrestha", "everyone-is-shrestha");
    echo "<br>";

    #variable types:
    var_dump($name);
    var_dump($age);
    var_dump($salary);
    var_dump($ismanager);
    echo "<br>";

    var_dump($array_name);
    $salary = 5000.99;
    $salary_int = (int)$salary;
    echo "<br>";

    #type-casting:
    var_dump($salary_int);
    echo "<br>";

    #constants:

    const API_ENDPOINT = "www.facebook.com";
    echo '<a href="' . API_ENDPOINT . '"><button class="sujal">Click Me</button></a>';

    #ternari operator:
    $val = null;
    $result = $val ?? 5;
    echo $result
    ?>
    
</body>

</html>