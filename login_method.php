<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE email = '$myemail' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("email");
         $_SESSION['login_user'] = $myemail;
         
         header("location: admin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>