<?php
session_start();
include('connection.php');
include('function.php');

$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY WEBSITE</title>
    <style>
        .div{
           
        }
    </style>
</head>

<body>
    <div class="div">
    <h1>This is index page</h1>
    <a href="logout.php">Logout</a>
    <br>
    hello <?php echo $user_data['user_name'];
   

?>
 </div>
</body>

</html>