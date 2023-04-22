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

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"] )?>" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <input type="submit" class="registerbtn" name="submit" value="Register">
  </div>
  <?php 
  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $useremail=filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
    $passwordemail=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
    //$psw_repeat=filter_input(INPUT_POST,"psw-repeat",FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($useremail)){
      echo '<h3 class="variablecolor"> please esert email</h3>';
    }
    elseif(empty($passwordemail)){
      echo "please insert the password";
    }
    else{
          $hash1=password_hash($passwordemail,PASSWORD_DEFAULT);
      //$hash2=password_hash($psw_repeat,PASSWORD_DEFAULT);
     // if($hash1==$hash2){
          $sql="INSERT INTO register(email, password) VALUES ('$useremail','$hash1')";
      
          try{
            if(mysqli_query($conn,$sql))
               echo '<h3 class="variablecolor"> you are registred </h3>';
        }
      catch(mysqli_sql_exception){
            echo "please solve connction";
       }
     // }

    }
  }

 mysqli_close($conn);

?>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>


</body>
</html>


