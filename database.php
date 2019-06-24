<?php
// define variables and set to empty values
session_start();

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


  if (empty($_POST["user"])== true) {
    echo "<h1>Name is required!!!!<br></h1>";
  } else {
    $name = test_input($_POST["user"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo"<h1>Only letters and white space allowed!!<br></h1>"; 
    }
   }
  
  if (empty($_POST["email"])== true) {
    echo"<h1>Email is required!!!<br></h1>";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script>
  window.alert('INVALID EMAIL');
  </script>";

    }
  }
    
  if (empty($_POST["website"])== true) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      echo "<script>
  window.alert('INVALID website');
  </script>";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])== true) {
    echo"<h1>Gender is required!!!<br></h1>";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["password"])== true) {
    echo"<h1>Password is required!!!<br></h1>";
  } else {
    $gender = test_input($_POST["password"]);
  }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (empty($_POST["gender"])!= true && empty($_POST["user"])!=true && empty($_POST["email"])!=true&& empty($_POST["password"])!=true)
{
$con=mysqli_connect("localhost","root","","registration") ;


$name=$_POST['user'];
$pass=$_POST['password'];

// $s="select * from user where name ='$name'";

// $result = mysqli_query($con,$s);

// $num=mysqli_num_rows($result);
// echo $name;
// echo $pass;
$num = 2;
if ($num==1){
  echo"<h1>username already taken<br></hr>";
}
else
{

	$reg="insert into user(name,pass) values ('$name','$pass')";
	mysqli_query($con,$reg);
	echo "<h1>REGISTRATION SUCCESSFULLY<br><hr>";
  echo $name;
  echo $pass;
}
}
mysqli_close($con);
?>
