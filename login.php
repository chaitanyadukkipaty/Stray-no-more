<!DOCtype html>
<html>
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>LOG IN Page</title>
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
        <!-- Custom styles for this template -->
        <link href="css/agency.min.css" rel="stylesheet">
        
    
      </head>

<body id="register">
<?php
   include("config.php");
   session_start();
   $name=$pas=="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $name = test_input($_POST["email"]);
      $pass = md5(test_input($_POST["pass"]));
      
      $sql = "SELECT email FROM ngos WHERE Email = '$name' and password = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      //echo "$count";
      // If result matched $myusername and $mypassword, table row must be 1 row
      //echo "New record created successfully";
      if($count == 1) {
        // echo "New record created successfully";
      //  header("location: help.php");
        //  session_register("name");
         $_SESSION['login_user'] = $name;
         echo "New record created successfully";
         header("location: request.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "$error";
      }
   }
   function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
                <section id="contact">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 text-center">
                              <h2 class="section-heading text-uppercase">LOG IN</h2>
                              
                            </div>
                          </div>
                          <div class="row row-centered" >
                            <div class="col-lg-12 text-center">
                              <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div >
                                  <div class="col-lg-offset-6 text-center">
                                    
                                    <div class="form-group">
                                      
                                            <input class="form-control" id="mail_id" name="email" type="email" placeholder="Mail id*" required="required" data-validation-required-message="Please enter your mail_id">
                                      <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        
                                            <input class="form-control" id="password" name="pass" type="password" placeholder="Enter your password *" required="required" data-validation-required-message="Please enter your password">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    

                                    
                                  </div>
                                  <input type="submit" class="btn btn-primary btn-xl text-uppercase " value="LOG IN">
                                    <br><br><br>
                                  <div class="clearfix"></div>
                                  <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <a href="main.html" class="btn btn-primary btn-xl text-uppercase " type="submit">BACK</a>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </section>

 

</body>
</html>