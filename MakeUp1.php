<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MakeUp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE lippi (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name varchar(30),
price int(10),
shade varchar(20),
brandname varchar(10),
code varchar(100) not null,
UNIQUE KEY code (code)
)";
if (mysqli_query($conn, $sql)) {
    echo "Table lippi created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
/*$sql1 = "CREATE TABLE others (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
type varchar(20),
name varchar(30),
price int(10),
brandname varchar(10),
code varchar(100) not null,
UNIQUE KEY code (code)
)";
if (mysqli_query($conn, $sql1)) {
    echo "Table others created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}*/


mysqli_close($conn);
?>