<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Helping Stray</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
  </head>

<body>
    <?php
    // define variables and set to empty values
    $nam = $email = $gender = $comment = $website = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nam = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $number = test_input($_POST["number"]);
      $lat = test_input($_POST["lat"]);
      $lon = test_input($_POST["lon"]);
      $incident = test_input($_POST["incident"]);
      $landmark = test_input($_POST["landmark"]);

      $servername = "localhost";
      $username = "root";
      $password = "Chaitanya1!";
      $dbname = "ip";
      // Create connection
      $conn = new mysqli($servername, $username, $password,$dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "INSERT INTO request VALUES ('$nam', '$email', '$number',  '$lat', '$lon',  '$incident', '$landmark')";

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
          header("location: main.html");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
<section id="help" class="about-section text-center" style="background-color:black">
  <!-- <button onclick="la()">Get Location</button> -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">HELP PAGE!!</h2>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <input name="name" type="name" class="form-control " placeholder="Enter your full name..." required="required" data-validation-required-message="Please enter your name."><br>
          <input name="email" type="email" class="form-control " placeholder="mail id..."><br>
          <input name="number" type="tel" class="form-control " placeholder="Contact number"><br>
          <input name="lat" type="text" class="form-control " placeholder="Accessing latitude...." id="demo"><br>
          <input name="lon" type="text" class="form-control " placeholder="Accessing longitude...." id="d"><br>
          <input name="incident" type="incident" class="form-control " placeholder="Incident.."><br>
          <input name="landmark" type="landmark" class="form-control " placeholder="Landmark........."><br>
          <input type="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger " value="GET HELP"><br>
        </form>
         <br><br><br>
        </div>
      </div>
    </div>
    <a href="main.html" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger ">BACK</a>
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
