<!DOCTYPE html>
<html lang="en">
<style>
  td{ color: #ffffff; }
  </style>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>requests</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
  <?php
   include('session.php');
   
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"><?php echo strtoupper($login_session); ?></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/1.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">hello</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home">Home</a>
          </li>
          <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#request">Requests</a>
              </li>
              <li>
                    <a href="logout.php" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger " style="background-color: brown">LOGOUT </a>
              </li>
              
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="home">
        <div class="my-auto">
          <h1 class="mb-0"><?php echo $login_session; ?>
          </h1>
          <div class="subheading mb-5">
            <a class="mb-0" href="mailto:name@email.com"><?php echo $row['email']; ?></a>
          </div>
          
          
        </div>
      </section>
      <section id="request">
            <div class="container">
                    <div class="row row-centered">
                      <div class="col-lg-12 mx-auto ">
                        <h2 class="text-white mb-4 ">REQUEST</h2>
                        <!-- <button class"btn btn-primary btn-xl text-uppercase" onclick="loadDoc()">Get responses<button> -->
                        <p id="demo"></p>

                       

                      </div>
                    </div>
                  </div>
      </section>

      <hr class="m-0">

      
    </div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "data.php", true);
  xhttp.send();
}
window.onload = loadDoc;
</script>
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
