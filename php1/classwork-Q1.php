<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Tasks Results</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                margin: 20px;
            }

            .task {
                background-color: #e9ecef;
                border: 1px solid #ccc;
                padding: 15px;
                margin-bottom: 10px;
                border-radius: 5px;
            }

            h2 {
                text-transform: capitalize;
            }

            h1 {
                text-transform: capitalize;
            }

            input {
                background: white;
                border: 2px solid black;
                border-radius: 10px;
                padding: 5px;
                transition: 0.5s;
            }
        </style>
    </head>

    <body>
        <ol>
            <li>
                <div class="task">

                    <h1>PHP Tasks Results</h1>

                    <form action="classwork-Q1.php" method="post">
                        <label for="number"></label>
                        <input name="number" type="number" placeholder="enter the number">
                        <label for="submit"></label>
                        <input name="submit" type="submit" value="submit">
                    </form>
                    <h2>Check if a Number is Even or Odd</h2>
                    <p><?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $i = htmlspecialchars($_POST['number']);
                            echo ($i % 2 == 0) ? "$i is Even" : "$i is Odd";
                        }


                        ?></p>

                </div>

            </li>
            <li>

                <div class="task">
                    <h2>switch case print day result</h2>
                    <?php

                    $dayNumber = 2;

                    switch ($dayNumber) {
                        case 1:
                            echo "Monday";
                            break;
                        case 2:
                            echo "Tuesday";
                            break;
                        case 3:
                            echo "Wednesday";
                            break;
                        case 4:
                            echo "Thursday";
                            break;
                        case 5:
                            echo "Friday";
                            break;
                        case 6:
                            echo "Saturday";
                            break;
                        case 7:
                            echo "Sunday";
                            break;
                        default:
                            echo "Invalid input! Please enter a number between 1 and 7.";
                    }
                    ?>
                </div>

            </li>

            <li>
                <div class="task">
                    <h2>Check for Leap Year</h2>
                    <p><?php
                        $year = 2024;
                        echo ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? "$year is a Leap Year" : "$year is not a Leap Year";
                        ?></p>
                </div>
            </li>

            <li>
                <div class="task">
                    <h2>Check for Leap Year</h2>
                    <p>
                        <?php
                        $year = 2024;

                        if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
                            echo "$year is a Leap Year";
                        } else {
                            echo "$year is not a Leap Year";
                        }
                        ?>
                    </p>
                </div>
            </li>

            <li>
                <div class="task">
                    <h2>Check if a Number is Positive or Negative</h2>
                    <p><?php
                        $num = -5;
                        echo ($num >= 0) ? "$num is Positive" : "$num is Negative";
                        ?></p>
                </div>
            </li>

            <li>
                <div class="task">
                    <h2>Calculate Electric Bill</h2>
                    <p><?php
                        $units = 150;
                        $rate = 0.5;
                        $bill = $units * $rate;
                        echo "Electric Bill for $units units is $" . number_format($bill, 2);
                        ?></p>
                </div>
            </li>

            <li>
                <div class="task">
                    <h2>foreach task result</h2>
                    <?php

                    $items = array(3, 5, 10, 20, 30);
                    $sum = 0;
                    foreach ($items as $item) {
                        echo ("$item" . " ");
                        $sum += $item;
                    }
                    echo nl2br($sum);
                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h2>print odd and even from 1 to 50</h2>
                    <?php
                    for ($i = 1; $i <= 50; $i++) {
                        if ($i % 2 == 0) {
                            echo " the number " . $i . " is even " . "<br>";
                        } else {
                            echo "the number " . $i . " is odd"  . "<br>";
                        }
                    }
                    ?>
                </div>
            </li>
            <li>

                <div class="task">
                    <h1>pattern *</h1>
                    <?php



                    $rows = 5;


                    for ($i = 1; $i <= $rows; $i++) {

                        echo str_repeat("*", $i) . "<br>";
                    }
                    ?>


                </div>
            </li>
            <li>
                <div class="task">
                    <h1>Pattern *</h1>
                    <?php
                    $rows = 5;

                    for ($i = 1; $i <= $rows; $i++) {
                        // Inner loop to print stars
                        for ($j = 1; $j <= $i; $j++) {
                            echo "*";
                        }
                        // Break line after each row
                        echo "<br>";
                    }
                    ?>
                </div>
            </li>
            <li>
                <div class="task">
                    <h2>Plindrom or not</h2>
                    <?php
                    $number = 121;
                    $originalNumber = $number;
                    $reversedNumber = 0;

                    while ($number > 0) {
                        $remainder = $number % 10;
                        $reversedNumber = ($reversedNumber * 10) + $remainder;
                        $number = (int)($number / 10);
                    }

                    if ($originalNumber == $reversedNumber) {
                        echo "$originalNumber is a Palindrome.";
                    } else {
                        echo "$originalNumber is not a Palindrome.";
                    }
                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h1>
                        palindrom or not
                    </h1>
                    <?php
                    $rem;
                    $rev = 0;
                    $num = 121;
                    $temp;
                    $temp = $num;
                    while ($num != 0) {
                        $rem = $num % 10;
                        $rev = $rev * 10 + $rem;
                        $num = (int)($num / 10);
                    }
                    if ($temp == $rev) {
                        echo "the number is palindrom";
                    } else
                        echo "the number is not palindrom";
                    ?>


                </div>
            </li>
            <li>
                <div class="task">
                    <h1>Armstrong or not</h1>
                    <?php
                    $number = 153;
                    $arm = 0;
                    $originalNumber = $number;

                    while ($number > 0) {
                        $rem = $number % 10;
                        $arm += $rem * $rem * $rem;
                        $number = (int)($number / 10);
                    }

                    if ($originalNumber == $sum) {
                        echo "$originalNumber is an Armstrong Number.";
                    } else {
                        echo "$originalNumber is not an Armstrong Number.";
                    }
                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h1>Reversed String</h1>
                    <?php
                    $number = 12345;
                    $reversedNumber = 0;

                    while ($number > 0) {
                        $remainder = $number % 10;
                        $reversedNumber = ($reversedNumber * 10) + $remainder;
                        $number = (int)($number / 10);
                    }

                    echo "Reversed Number: $reversedNumber";
                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h1>wap to sum all element in an aray using foreach</h1>
                    <?php
                    $arr = array(10, 18, 15, 6, 24);
                    $sum = 0;
                    foreach ($arr as $i) {
                        $sum += $i;
                    }
                    echo $sum;
                    ?>
                </div>
            </li>
            <li>
                <div class="task">
                    <h1>find the biggest $ smallesst number in an array(8,12,13,20,60,55)</h1>
                    <?php

                    $arr = array(8, 12, 13, 20, 60, 55);
                    echo "the smallest number in array is " . min($arr) . '<br>';
                    echo "the largest number in array is " . max($arr);

                    ?>
                </div>
            </li>
            <li>
                <div class="task">
                    <h1>find the biggest $ smallesst number in an array(8,12,13,20,60,55)</h1>
                    <?php
                    $arr = array(8, 12, 13, 20, 60, 55);
                    $min = $arr[0];
                    $max = $arr[0];

                    foreach ($arr as $i) {
                        if ($i < $min) {
                            $min = $i;
                        }
                        if ($i > $max) {
                            $max = $i;
                        }
                    }

                    echo "The smallest number in the array is " . $min . "<br>";
                    echo "The largest number in the array is " . $max;
                    ?>
                </div>
            </li>
            <li>
                <div class="task">
                    <h1>WAP without using sort() ir rsort() function to sort the array in ascending and descending order</h1>
                    <?php
                    echo "<h1>" . "ASCENDING ORDER" . "<h1/>";
                    $arr = array(8, 12, 13, 20, 60, 55);
                    $temp;
                    for ($i = 0; $i < sizeof($arr); $i++) {
                        for ($j = $i + 1; $j < sizeof($arr); $j++) {
                            if ($arr[$i] < $arr[$j]) {
                                $temp = $arr[$i];
                                $arr[$i] = $arr[$j];
                                $arr[$j] = $temp;
                            }
                        }
                    }
                    for ($z = 0; $z < sizeof($arr); $z++) {
                        echo $arr[$z] . "<br>";
                    }
                    echo "<h1>" . "DESCENDING ORDER" . "<h1/>";

                    for ($i = 0; $i < sizeof($arr); $i++) {
                        for ($j = $i + 1; $j < sizeof($arr); $j++) {
                            if ($arr[$i] > $arr[$j]) {
                                $temp = $arr[$i];
                                $arr[$i] = $arr[$j];
                                $arr[$j] = $temp;
                            }
                        }
                    }
                    for ($z = 0; $z < sizeof($arr); $z++) {
                        echo $arr[$z] . '<br>';
                    }
                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h1>searching strings</h1>

                    <?php
                    $college_list = ['seabird', 'medhavi', 'abcd'];
                    $tofind = 'medhavi';
                    $isfound = false;
                    foreach ($college_list as $college) {
                        if ($college === $tofind) {
                            $isfound = true;

                            break;
                        }
                    }
                    if ($isfound) {
                        echo "the string was found";
                    } else {
                        echo "the string was not found";
                    }
                    ?>
                </div>
            </li>
            <li>
                <div class="task">
                    <h1>prime number or not</h1>
                    <?php
                    $number = 3;
                    $flag = 0;

                    if ($number <= 1) {
                        echo "it is not a prime number";
                    } else {
                        for ($i = 2; $i <= sqrt($number); $i++) {
                            if ($number % $i == 0) {
                                $flag++;
                                break;
                            }
                        }
                        if ($flag == 0) {
                            echo "it is a prime number";
                        } else {
                            echo "it is not a prime number";
                        }
                    }
                    ?>
                </div>
            </li>
            <li>
                <div class="task">
                    <h1>maro tarika prime or not</h1>
                    <?php
                    $n = 3;
                    $a;
                    $c = 0;
                    $r;
                    for ($a = 1; $a <= $n; $a++) {
                        $r = $n % $a;
                        if ($r == 0) {
                            $c++;
                        }
                    }
                    if ($c == 2)
                        printf("prime");
                    else
                        printf("not prime");

                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h1>Odd or Even</h1>
                    <?php
                    $number = 17;
                    if ($number % 2 == 0) {
                        echo "it is the even number";
                    } else {
                        echo 'it is odd number';
                    }
                    ?>
                </div>
            </li>
            <li>
                <div class="task">
                    <h1>Associative array</h1>
                    <?php
                    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
                    echo $car["model"] . "<br>";

                    $car["year"] = 2024;
                    echo $car['year'] . "<br>";

                    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

                    foreach ($car as $x => $y) {
                        echo "$x: $y <br>";
                    }
                    function me_function()
                    {
                        return "I am the function";
                    }

                    $function = [
                        "mode" => 12,
                        "name" => "supra",
                        "funct" => 'me_function'
                    ];

                    foreach ($function as $a => $b) {
                        if (is_callable($b)) {

                            echo $a . ': ' . $b() . "<br>";
                        } else {

                            echo $a . ': ' . $b . "<br>";
                        }
                    }



                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h1>execute function by refering to the key</h1>
                    <?php
                    function myFunction()
                    {
                        echo "I come from a function!";
                    }

                    $myArr = array("car" => "Volvo", "age" => 15, "message" => 'myFunction');

                    $myArr["message"]();
                    ?>
                </div>
            </li>
            <li>
                <div class="task">

                    <h1>function</h1>
                    <?php

                    function addnumber(...$nums)
                    {
                        $n = 0;
                        $count = count($nums);
                        for ($i = 0; $i < $count; $i++) {
                            $n = $n + $nums[$i];
                        }
                        echo "Sum is " . $n;
                    }

                    addnumber(1, 2, 3, 4, 5);

                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h1>function with required parameter</h1>
                    <?php
                    function sum($a, $b = 5)
                    {
                        $sum = $a + $b;
                        echo $sum;
                    }
                    sum(5);

                    ?>

                </div>
            </li>
            <li>
                <div class="task">
                    <h1>compare two string</h1>
                    <?php
                    $name = "Ram    ";
                    $toCompare = "Ram";
                    if (trim($name) == $toCompare) {
                        echo "True";
                    } else {
                        echo "False";
                    }
                    ?>
                </div>
            </li>
            <li>
                <div class="task">
                    <h1>substring and slicedString</h1>
                    <?php
                    $string = 'Hello There';
                    $SlicedString = substr($string, 6, 5);
                    echo $SlicedString;

                    ?>
                </div>

            </li>
          
        </ol>
    </body>

    </html>

</body>

</html>