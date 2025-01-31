<?php
include 'connection.php';

function createEmployee($department, $gender, $name, $address) {
    global $conn;
    $sql = "INSERT INTO employee (name, gender,department,address) VALUES ('$name', '$gender','$department','$address')";
    return $conn->query($sql);
}

function getAllEmployee() {
    global $conn;
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);
    return $result;
}


function updateEmployee($department,$name,$gender,$address) {
    global $conn;
    $sql = "UPDATE employee SET name='$name', department='$department',gender='$gender',address = '$address'  WHERE id='$id'";
    return $conn->query($sql);
}

// DELETE
function deleteUser($id) {
    global $conn;
    $sql = "DELETE FROM employee WHERE id='$id'";
    return $conn->query($sql);
}
?>
