<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "user_database_db";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {


    die("failed to connect!");
}
