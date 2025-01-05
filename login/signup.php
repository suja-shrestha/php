<?php 
session_start();
include('connection.php');
include('function.php');
//check if the user has clicked in the post button

if($_SERVER['REQUEST_METHOD']=='POST'){

    $user_name = $_POST['user_name'];
    $password =$_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

        //save to database'
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }
    else{
        echo 'please enter some valid information';
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            background: #000000;
            min-height: 100vh;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin: 0 15px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: rgb(0, 0, 0);
        }

        .navbar ul li a:hover {
            color: #007bff;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px; /* Adjust to avoid overlap with navbar */
        }

        .login-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            align-items: center;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333333;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #555555;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        .login-btn {
            width: 100%;
            padding: 0.8rem;
            background: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
        }

        .login-btn:hover {
            background: #0056b3;
        }

        .forgot-password {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #007BFF;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .signup-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }

        .signup-link a {
            color: #007BFF;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">MyBrand</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="login-container">
            <h1>Sign Up</h1>
            <form method="post">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" id="name" placeholder="Enter your username" name="user_name" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" placeholder="Enter your password" name="password" required>
                </div>
                
                <button type="submit" class="login-btn">Login</button>
            </form>
            <a href="forgot.php" class="forgot-password">Forgot Password?</a>
            <p class="signup-link">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>
