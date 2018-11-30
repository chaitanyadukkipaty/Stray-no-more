<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from ngos where email = '$user_check' ");
   
   $rows = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   //echo "$row['uid']";
   $login_session = $rows['NGO_name'];
   //echo "$login_session";
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>