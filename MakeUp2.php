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

$sql1 = "INSERT INTO lippi (name, price,shade, brandname,code)
VALUES ('kj', 1200,'bottle','Kylie','kj');";
$sql1 .= "INSERT INTO lippi (name, price,shade, brandname,code)
VALUES ('famous', 1300,'red', 'Kylie','kj1');";
$sql1 .= "INSERT INTO lippi (name, price,shade, brandname,code)
VALUES ('love life', 600,'meroon', 'colorpop','kj2');";
$sql1 .= "INSERT INTO lippi (name, price,shade, brandname,code)
VALUES ('happy thoughts', 600,'dark red','colorpop','kj3')";




if (mysqli_multi_query($conn, $sql1)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>