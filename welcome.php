<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <!-- <h2><?php echo $row['Contact_number']; ?></h2>
      <h2><?php echo $row['Unique_id']; ?></h2> -->
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>