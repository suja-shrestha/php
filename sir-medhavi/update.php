<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM employee WHERE id = $id";
$result = $conn->query($sql);
$employee = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];

    $sql = "UPDATE employee SET name = '$name', address = '$address', gender = '$gender', department = '$department' WHERE id = $id";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php $employee['name']; ?>" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="3" required><?= $employee['address']; ?></textarea><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" <?= $employee['gender'] == 'Male' ? 'checked' : ''; ?>>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" <?= $employee['gender'] == 'Female' ? 'checked' : ''; ?>>
        <label for="female">Female</label><br><br>

        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="HR" <?= $employee['department'] == 'HR' ? 'selected' : ''; ?>>HR</option>
            <option value="Engineering" <?= $employee['department'] == 'Engineering' ? 'selected' : ''; ?>>Engineering</option>
            <option value="Marketing" <?= $employee['department'] == 'Marketing' ? 'selected' : ''; ?>>Marketing</option>
            <option value="Sales" <?= $employee['department'] == 'Sales' ? 'selected' : ''; ?>>Sales</option>
        </select><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>


