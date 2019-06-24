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

$sql1 = "INSERT INTO masks (name, price, brandname,code)
VALUES ('Charcoal & black sugar', 750, 'Freeman','f1');";
$sql1 .= "INSERT INTO masks (name, price, brandname,code)
VALUES ('Black sugar mask', 1430, 'SkinFood','f2');";
$sql1 .= "INSERT INTO masks (name, price, brandname,code)
VALUES ('Rice mask', 1430, 'SkinFood','f3');";
$sql1 .= "INSERT INTO masks (name, price, brandname,code)
VALUES ('Glycolic mask', 1950, 'Andalou','f4')";



if (mysqli_multi_query($conn, $sql1)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>