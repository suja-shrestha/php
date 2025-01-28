<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "user_database_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: {$conn->connect_error}");
}

if (isset($_POST['course']) && isset($_POST['semester'])) {
    $course = $_POST['course'];
    $semester = $_POST['semester'];

    if ($semester == 4 && $course == "BCSIT" || $semester == 4 && $course == "bcsit") {
        $course = "java";
    }

    $sql = "INSERT INTO bscit (course, semester) VALUES ('$course', '$semester')";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: {$conn->error}";
    }
} else {
    echo "Course and Semester are required fields.";
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add New Record</h2>
        <form action="medhavi.php" method="post">
            <label for="course">Course:</label>
            <input type="text" id="course" name="course">
            <label for="semester">Semester:</label>
            <input type="text" id="semester" name="semester">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>