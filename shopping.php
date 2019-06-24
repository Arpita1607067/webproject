<style >
	body{
		background-image: url("woman.jpg");
	}
	button{
		color: blue;

	}
</style>
<?php
session_start();
echo "<style><?php include 'CSS/style.css'; ?></style>";
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
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$conn,
"SELECT * FROM lippi WHERE code='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$brandname=$row['brandname'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'brandname'=>$brandname,
	'quantity'=>1)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>
<?php
$result = mysqli_query($conn,"SELECT * FROM lippi");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='name'>".$row['name']."</div>
    <div class='brandname'>".$row['brandname']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($conn);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>