<?php
$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="hotelBook";
$conn="";

 
try{
    $conn=mysqli_connect($db_server,$db_user,$db_password,$db_name);
}
catch(mysqli_sql_exception){
 echo "please solve connction";
}
if($conn){
   // header("Location :register.php");
   echo "HotelBooking.com";
}

?>