<?php
session_start();
    // Include database connection settings



include"../db_config.php";

$username=$_POST['username'];
$password=$_POST['password'];



$user = stripslashes($username);
$pass =stripslashes($password);

$username=$con->real_escape_string($user);
$userpassword=$con->real_escape_string($pass);

     if(!isset($_POST['username']) && !isset($_POST['password']))
     {

      header("location: ../index.php");

     }


    

     

 /*$salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
     $salt = base64_encode($salt);
     $salt = str_replace('+', '.', $salt);
     $hash = crypt($password, '$10$');
    */




    






      $query = "SELECT * FROM chat_user_table WHERE user_name='$username' AND user_password = '$password'";
	  
$sql = $con->query($query);

      $rows = $sql->num_rows;
	  $fet=$sql->fetch_array();
      if ($rows==1) 
	  {
      // Set username session variable

      $_SESSION['username'] =$fet['user_id'];
     
      $_SESSION['jina']=$fet['fname'];
      $_SESSION['pic']=$fet['user_profile'];
     
	 

     // Jump to secured page
	  $rows;
      
    echo '<script type="text/javascript">alert("Welcome to MyChat");window.location=\'index.php\';</script>'; 


     }

  


     else {
	
     // Jump to login page
     $rows;
	
    echo '<script type="text/javascript">alert("Wrongly typed username or password");window.location=\'../index.php\';</script>';

     }
     exit;
     ?>
