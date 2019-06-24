
<?php
if(isset($_COOKIE['cookie_name']))
{
   header('Location: project.php');
}
else
{
?>

<html lang = "en">
   
   <head>
      <title>Login.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            /*background-color:  #80ffd4;*/
            background-image: url("images.jpg");
         }
        
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: blue;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
            align-content: center;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: blue;
         }
      </style>
      
   </head>
   
   <body>

   <form action="project.php" method="post">
  <div class="imgcontainer">
   
    
  </div>

  <div class="container" style="height:150px;width:250px;margin-left:400px;background-color:blue;text-align: : center;">
 
    <label for="uname"><b>Username</b></label>
    <form autocomplete="off" action="project.php" method="post">
    <input type="text" placeholder="Enter Username" name="Arpita" required>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="arp" required>
    
    <button type="submit">Login</button>
    <label>
</form>
<br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
   <br >
       <button type="button" class="cancelbtn">Cancel</button>
  </div>
  
  
</form>

</body>
  
</html>
<?php
}
?>

      
            
         
      
         