<!doctype htm>
<!DOCTYPE html>
<html>
<head>
	<title>MAKEUP</title>
	<style>
		body {
  background-image: url("1-iAu65xDmvpVdBJgps6EDEw.png"); 
  background-color: #cccccc; 
  height: 500px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
}
table{
  border-style: solid;
  border-width: 5px;
  background-color: pink;
  margin: 0px 500px;
}
h1{
	color: red ;
	margin: 50px  500px 0px;
	text-decoration: underline;
	}
	h2{
	color:  #ffffcc;
	margin: 10px  500px 0px;
	text-decoration: underline;
	}s
	</style>


</head>
<body>
	<h1>LIPSTICKS</h1>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "MakeUp");
  if($conn){
  	echo " <br>";
  }else{
  	die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql="select * from lippi";
  $results=mysqli_query($conn,$sql);
  echo "<table>";
  echo "<tr><th>ID</th><th>NAME</th><th>PRICE</th><th>SHADE</th><th>BRANDNAME</th></tr>";
  if(mysqli_num_rows($results)>0){
  	while($row=mysqli_fetch_array($results)){
  		echo "<tr><td>";
  		echo $row[0];
  		echo "</td><td>";
  		echo $row[1];
  		echo "</td><td>";
  		echo $row[2];
  		echo "</td><td>";
  		echo $row[3];
  		echo "</td><td>";
  		echo $row[4];
  		echo "</td></tr>";
  		echo "<br>";
  	}
  	echo "</table>";
  }
  $sql1="select * from others";
  $results=mysqli_query($conn,$sql1);
  echo "<h2> OTHERS </h2>";
  echo "<table>";
  echo "<tr><th>ID</th><th>TYPE</th><th>NAME</th><th>PRICE</th><th>BRANDNAME</th></tr>";
  if(mysqli_num_rows($results)>0){
  	while($row=mysqli_fetch_array($results)){
  		echo "<tr><td>";
  		echo $row[0];
  		echo "</td><td>";
  		echo $row[1];
  		echo "</td><td>";
  		echo $row[2];
  		echo "</td><td>";
  		echo $row[3];
  		echo "</td><td>";
  		echo $row[4];
  		echo "</td></tr>";
  		echo "<br>";
  	}
  	echo "</table>";
  }
  mysqli_close($conn);

  ?>
</body>
</html>