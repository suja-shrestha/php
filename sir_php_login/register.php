<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_BCRYPT);
   $sql = 'INSERT INTO USERS(username, email, password) VALUES($username, $email, $hash)';
    $result = mysqli_query($conn, $sql);
}
   if($connection->query($sql)=== TRUE){
    echo "New record created successfully";
    header('Location: login.php');
    exit();
   }
   else{
    echo "Error: " . $sql . "<br>" . $conn->error;
   }
$connection->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register">


    </form>
</body>
</html>