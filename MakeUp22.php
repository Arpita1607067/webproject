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
$sql2 = "INSERT INTO lippi (name, price,shade,brandname,code)
VALUES ('Fit me',750,'dark pink','Kylie','kj4');";
$sql2 .= "INSERT INTO lippi (name, price,shade,brandname,code)
VALUES ('Kristen', 850,'pink','Hourglass','kj5');";
$sql2 .= "INSERT INTO lippi (name, price,shade,brandname,code)
VALUES ('Ever matte', 2260,'majenda', 'Becca','kj6');";
$sql2 .= "INSERT INTO lippi (name, price,shade,brandname,code)
VALUES ('parker', 3195,'nude','Milani','kj7')";



if (mysqli_multi_query($conn, $sql2)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>