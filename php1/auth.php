<?php
// Database connection
$host = "localhost";
$username = "root"; // Change this to your DB username
$password = ""; // Change this to your DB password
$dbname = "user_auth"; // Change to your DB name

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $action = $_POST['action'];

    if ($action === 'register') {
        // Register user
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (name, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } elseif ($action === 'login') {
        // Login user
        $stmt = $conn->prepare("SELECT password FROM users WHERE name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashedPassword);
            $stmt->fetch();

            if (password_verify($password, $hashedPassword)) {
                echo "Login successful!";
            } else {
                echo "Invalid credentials!";
            }
        } else {
            echo "User not found!";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="action" value="register">Register</button>
    </form>

    <h2>Login</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="action" value="login">Login</button>
    </form>
</body>
</html>
