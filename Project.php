<!DOCTYPE html>
<html>
<head>
	<title>Couture De Vogue</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<style >
  body{
    background-image: url("women.jpg");
  }

	    ul{
	    	margin: 0;
	    	list-style-type: none;
	    	padding: 0;
	    	overflow: hidden;
	    }
		li{
			float: left;
		}
		li a{
			display: block;
			width: 50px;
			background-color: gray;
		}
		li a, .menu {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .Menu:hover .menu {
  background-color: red;
}

li.Menu {
  display: inline-block;
}

.women {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.women a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.women a:hover {background-color: #f1f1f1}

.Menu:hover .women {
  display: block;
}
	i{
		float: right;
		color: darkblue;
	}
  input {
  float: right;
  padding: 6px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
  }
		#name {
			color:#003cb3;
			text-align: center;
			padding:25px; 
			border: 10px solid transparent;
			border-color: white;
			height: 20px;
			font-style: italic;
			text-shadow: 4px 2px;
			background-image: url(shop.jpg);
			border-image: url(border.png) 30 stretch;
			border-radius:25px;

		}
		h1{
			color:red;
			text-align: center;
			margin: 20px;
		}
		img{
			display: block;
			max-width: 50%;
			margin-right: auto;
			margin-left: auto;
			object-fit: cover;
			border-radius: 50%;


		}
	</style>
</head>
<body style ="background-color:lightpink;">


<ul>
  <li><a href="#home">Home</a></li>
  <li class="Menu">
  	<a href="javascript:void(0)" class="menu">Menu</a>
  	<div class="women">
     <?php $link_name="SkinCare"; ?>
      <a href="SkinCare3.php"><?php echo $link_name ; ?></a>
      <?php $link_name="MakeUp"; ?>
      <a href="shopping.php"><?php echo $link_name ; ?></a>
    </div>
  </li>
  <li>
  <?php $link_name="SignUP"; ?>
  <a href="SignUP.php"><?php echo $link_name ; ?></a></li>
  <li>
  <?php $link_name="About";?>
  <a href="About.php"><?php echo $link_name ; ?></a></li>
  <li>
  <?php $link_name="Cart";?>
  <a href="cart.php"><?php echo $link_name ; ?></a></li>
</ul>
 <i class="fas fa-search"></i>
 <input type="text" placeholder="Search..">
<br>
<div>
<p id="name"><font size="+3"> <b>COUTURE DE VOGUE</b></font></p>
</div>
<div>
	<img src="propic.jpg" >
</div>
<b><h1>Be a confident girl by yourself.</h1></b>

<?php 
    if(!empty($_POST["remember"]))
        {
            $cookie_name = $_POST["Arpita"];
            $cookie_value = $_POST["arp"];
            setcookie('cookie_name', $cookie_name, time() + (86400*30)); 
        } 
    else
        {
         echo "Cookie Not Set"; 
     } 
?>
</body>
</html>