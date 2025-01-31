<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMAT Registration</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once "../cmat/conn.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $mobile = htmlspecialchars($_POST['mobile']);
        $dob = htmlspecialchars($_POST['dob']);
        $program = htmlspecialchars($_POST['program']);
        $gender = htmlspecialchars($_POST['gender']);

        $sql = "INSERT INTO CMAT (name, email, mobile, D_O_B, program, gender) 
            VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $email, $mobile, $dob, $program, $gender);

        if(strlen($name) < 8 ) { 
            echo '<script>alert("Name should be atleast 8 characters long")</script>';
        } else if(strlen($mobile) !== 10 | !ctype_digit($mobile)) {
            echo '<script>alert("Mobile number should be 10 digits long.")</script>';
        } else if($stmt->execute()) {
            echo '<script>alert("Registered Successfully")</script>';
            header("Location: register.php");
            return true;
        } else {
            echo '<script>alert("Registration failed")</script>';
            return false;
        }
    }
    ?>
    <div class="container">
        <h1>Register for CMAT</h1>
        <form action="register.php" class="form" method="post">
            <div class="name">
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" placeholder="Atleast 8 characters..." required>
            </div><br>
            <div class="email">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required>
            </div><br>
            <div class="mobile">
                <label for="text">Mobile Number</label><br>
                <input type="number" name="mobile" id="mobile" placeholder="Must be 10 digits long..." required>
            </div><br>
            <div class="dob">
                <label for="dob">Date of Birth</label><br>
                <input type="date" name="dob" id="dob">
            </div><br>
            <div class="program">
                <label for="program">Program Choice</label>
                <select name="program" id="program">
                    <option value="BBS">BBS</option>
                    <option value="BBA">BBA</option>
                    <option value="BCA">BCA</option>
                    <option value="BIM">BIM</option>
                </select>
            </div><br>
            <div class="gender">
                <label for="gender">Gender: </label>
                <input type="radio" id="male" name="gender" value="male" class="form-check-input m-2">
                <label for="male" class="form-check-label me-3">Male</label>
                <input type="radio" id="female" name="gender" value="female" class="form-check-input m-2">
                <label for="female" class="form-check-label">Female</label>
            </div><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>