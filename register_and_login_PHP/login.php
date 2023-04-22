<?php 
 include("database.php")

 ?>
 <?php  include("header.php")?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="registerStyle.css">
</head>
<body>

<form action="sessionlogin.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <?php if(isset($_GET['error'])) {?>
      <p> <?php  echo $_GET['error']; ?></p>
      <?php }  ?>
    
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>
    <hr>

    <input type="submit" class="registerbtn" name="submit" value="Login">
  </div>
 
  
  <div class="container signin">
    <p>if you have no account? <a href="#">Register in</a>.</p>
  </div>
</form>


</body>
</html>
