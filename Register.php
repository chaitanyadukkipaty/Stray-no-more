<!DOCtype html>
<html>
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Registration Page</title>
    
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
    // define variables and set to empty values
    include("config.php");
    $name = $email = $uid = $contact = $address = $pass = $repass = $lat = $lon = "";
    echo "hey";
    echo $_SERVER['REQUEST_METHOD'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $uid = test_input($_POST["uid"]);
      $contact = test_input($_POST["contact"]);
      $address = test_input($_POST["address"]);
      $pass = md5(test_input($_POST["pass"]));
      $repass = test_input($_POST["repass"]);
      $lat = test_input($_POST["lat"]);
      $lon = test_input($_POST["lon"]);
      echo "hey";
      // Check connection
      if ($db->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          echo "failed";
      } 
      $sql = "INSERT INTO ngos VALUES ('$name', '$email', '$contact', '$uid', '$address', '$lat', '$lon', '$pass')";

      if ($db->query($sql) === TRUE) {
          echo "New record created successfully";
          header("location: main.html");
      } else {
          echo "Error: " . $sql . "<br>" . $db->error;
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
                              <h2 class="section-heading text-uppercase">REGISTER HERE</h2>
                              
                            </div>
                          </div>
                          <div class="row row-centered" >
                            <div class="col-lg-12 text-center">
                              <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"`>
                                <div >
                                  <div class="col-lg-offset-6 text-center">
                                    <div class="form-group">
                                            <div class="form-group">
                                                <span class=" form-control btn btn-primary text-uppercase " style="background-color: firebrick;">NGO's name</span>
                                                    <input class="form-control" id="name" name="name" type="text" placeholder="NGo's name*" required="required" data-validation-required-message="Please enter your NGO's Name.">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                      <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <span class=" form-control btn btn-primary text-uppercase " style="background-color: firebrick;">Mail ID</span>
                                            <input class="form-control" id="mail_id" name="email" type="email" placeholder="Mail id*" required="required" data-validation-required-message="Please enter your mail_id">
                                      <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <span class=" form-control btn btn-primary text-uppercase " style="background-color: firebrick;">Contact Number</span>      
                                      <input class="form-control" id="contact" name="contact" type="tel" placeholder="Contact Number*" required="required" data-validation-required-message="Please enter your contact Number">
                                      <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <span class=" form-control btn btn-primary text-uppercase " style="background-color: firebrick;">Your Unique ID </span>
                                            <input class="form-control" id="unique_id" name="uid" type="text" placeholder="Unique ID*" required="required" data-validation-required-message="Please enter your unique ID">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <span class=" form-control btn btn-primary text-uppercase " style="background-color: firebrick;">Password</span>
                                            <input class="form-control" id="password" name="pass" type="password" placeholder="Enter your password *" required="required" data-validation-required-message="Please enter your password">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <span class=" form-control btn btn-primary text-uppercase" style="background-color: firebrick;">Re-enter Password</span>
                                            <input class="form-control" id="r_password" name="repass" type="password" placeholder="Rewrite password*" required="required" data-validation-required-message="Please enter your r_password.">
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="form-group">
                                        <span class=" form-control btn btn-primary text-uppercase " style="background-color: firebrick;">Your Address</span>
                                            <input class="form-control" id="message" name="address" placeholder="Your Address *" required="required" data-validation-required-message="Please enter your Address">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <span class=" form-control btn btn-primary text-uppercase " style="background-color: firebrick;">Your Address</span>
                                            <input class="form-control" id="demo" name="lat" placeholder="Your Latitude *" required="required" data-validation-required-message="Please enter your Latitude">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <span class=" form-control btn btn-primary text-uppercase " style="background-color: firebrick;">Your Address</span>
                                            <input class="form-control" id="d" name="lon" placeholder="Your Longitude *" required="required" data-validation-required-message="Please enter your Longitude">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-xl text-uppercase " value="REGISTER">
                                    <br><br><br>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <a href="main.html" class="btn btn-primary btn-xl text-uppercase " type="submit"> BACK</a>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </section>

<script>
    var x = document.getElementById("demo");
    var y = document.getElementById("d");
    var z = document.getElementById("n");
    function la(){
      z.value = "Chaitanya";
    }
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    
    function showPosition(position) {
        x.value = position.coords.latitude;
        y.value = position.coords.longitude;
    }
    window.onload = getLocation;

    </script>
 

</body>
</html>