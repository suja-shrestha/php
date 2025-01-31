<?php
$hostname = 'localhost';
$username = 'root';
$password = 'password';
$dbname = "db_database_user";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection Failed " . $conn->error . "\n");
} else {
    echo "Connected successfully\n";
}

$sql = "CREATE TABLE CMAT (
            id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL UNIQUE,
            mobile BIGINT NOT NULL UNIQUE,
            D_O_B DATE,
            program VARCHAR(255) NOT NULL,
            gender VARCHAR(255) NOT NULL
        );";

if ($conn->query($sql) == true) {
    echo ("Table `CMAT` created successfully!\n");
} else {
    echo ("Error creating table: " . $conn->error . "\n");
}