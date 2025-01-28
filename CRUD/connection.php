<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "user_database_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$message = "";

if ($conn->connect_error) {
    $message = "<p style='color: red;'>Connection failed: {$conn->connect_error}</p>";
} else {
    $message = "<p style='color: green;'>Connected successfully</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $action = $_POST['action'];

    if (isset($_POST['create'])) {
        $sql = "INSERT INTO user1 (Name, Address, Gender, Department, Action) VALUES ('$name', '$address', '$gender', '$department', '$action')";
        if ($conn->query($sql) === TRUE) {
            $message = "<p style='color: green;'>New record created successfully</p>";
        } else {
            $message = "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }

    if (isset($_POST['read'])) {
        $sql = "SELECT * FROM user1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $message = "<table border='1'><tr><th>SN</th><th>Name</th><th>Address</th><th>Gender</th><th>Department</th><th>Action</th></tr>";
            while ($row = $result->fetch_assoc()) {
                $message .= "<tr><td style='padding: 8px; border: 1px solid black; margin:20px auto'>" . $row["SN"] . "</td><td style='padding: 8px; border: 1px solid black;'>" . $row["Name"] . "</td><td style='padding: 8px; border: 1px solid black;'>" . $row["Address"] . "</td><td style='padding: 8px; border: 1px solid black;'>" . $row["Gender"] . "</td><td style='padding: 8px; border: 1px solid black;'>" . $row["Department"] . "</td><td style='padding: 8px; border: 1px solid black;'>" . $row["Action"] . "</td></tr>";
            }
            $message .= "</table>";
        } else {
            $message = "<p style='color: red;'>0 results</p>";
        }
    }

    if (isset($_POST['update'])) {
        $sql = "UPDATE user1 SET Address='$address', Gender='$gender', Department='$department', Action='$action' WHERE Name='$name'";
        if ($conn->query($sql) === TRUE) {
            $message = "<p style='color: green;'>Record updated successfully</p>";
        } else {
            $message = "<p style='color: red;'>Error updating record: {$conn->error}</p>";
        }
    }

    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM user1 WHERE Name='$name'";
        if ($conn->query($sql) === TRUE) {
            $message = "<p style='color: green;'>Record deleted successfully</p>";
        } else {
            $message = "<p style='color: red;'>Error deleting record: {$conn->error}</p>";
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            background-color: #5cb85c;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .message {
            margin: 20px 0;
            padding: 10px;
            border-radius: 4px;
            width: 300px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }


        
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>

</head>

<body>
    <h2>CRUD Operations</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Address: <input type="text" name="address" required><br>
        Gender: <input type="text" name="gender" required><br>
        Department: <input type="text" name="department" required><br>
        Action: <input type="text" name="action" required><br>
        <input type="submit" name="create" value="Create">
        <input type="submit" name="read" value="Read">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
    </form>
    <div class="message">
        <?php echo $message; ?>
    </div>
</body>

</html>