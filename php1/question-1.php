<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Area Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 20px;
        }
        input[type="number"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<h1>Circle Area Calculator</h1>
<form method="post">
    <label for="radius">Enter the radius:</label><br>
    <input type="number" id="radius" name="radius" required><br>
    <input type="submit" value="Calculate Area">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];
    $area = pi() * pow($radius, 2);
    echo "<h2>The area of the circle with radius " . htmlspecialchars($radius) . " is: " . htmlspecialchars($area) . "</h2>";
}
?>

</body>
</html>
