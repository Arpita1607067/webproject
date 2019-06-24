<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SkinCare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE masks (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name varchar(30),
price int(10),
brandname varchar(10),
code varchar(100) not null,
UNIQUE KEY code (code)
)";
if (mysqli_query($conn, $sql)) {
    echo "Table masks created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>