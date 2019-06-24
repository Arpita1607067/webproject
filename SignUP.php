

<html>
<head>
<style>
body{
  background-image: url("social-shopping.jpg");
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: block;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="b">
      
<h2>CREATE YOUR ACCOUNT</h2>
<p><span class="error">* required field</span></p>
<form autocomplete="off" method="post" action="database.php">  
  Name: <input autocomplete="off" type="text" name="user" >
  <span class="error">* </span>
  <br><br>
  E-mail: <input autocomplete="off" type="text" name="email" >
  <span class="error">* </span>
  <br><br>
  Website: <input autocomplete="off" type="text" name="website">
  <span class="error"></span>
  <br><br>
  Password:<input autocomplete="off" type="password" name="password">
  <span class="error">*</span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* </span>
  <br><br>
  <input type="submit" name="submit" value="SIGN UP">  
</form>

   </div>


</body>
</html>