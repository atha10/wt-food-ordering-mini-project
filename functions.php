<?php 
function connect_mysql() {

$conn = mysqli_connect('localhost','root','root123','food_ordering');
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 else{
    return $conn;
 }
}

function template_header($title,$name) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
    <head>
            <title>$title</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
            <link rel="stylesheet" href="css/animate.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            <link rel="stylesheet" href="css/owl.theme.default.min.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            <link rel="stylesheet" href="css/ionicons.min.css">
            <link rel="stylesheet" href="css/jquery.timepicker.css">
            <link rel="stylesheet" href="css/animate.css">
            <link rel="stylesheet" href="css/flaticon.css">
            <link rel="stylesheet" href="css/icomoon.css">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                    <div class="container">
                        <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
                        <span> Welcome $name </span>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                            <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
                            <li class="nav-item"><a href="index.php?logout='1'" class="nav-link">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    EOT;
    }

function template_footer() {
    $year = date('Y');
    echo <<<EOT
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Quick links</h3>
                    <a href="index.php"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="menu.php"><i class="fas fa-angle-right"></i>Menu</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                </div>
                <div class="box">
                    <h3>Extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
                </div>
                <div class="box">
                    <h3>Contact links</h3>
                    <a href="#"><i class="fas fa-phone"></i>7744836429</a>
                    <a href="#"><i class="fas fa-envelope"></i>atharvamsc.24@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i>Pune, India</a>
                </div>
                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter </a>
                    <a href="#"><i class="fab fa-linkedin"></i> Linked In </a>
                </div>
                </div>
            <div class="credit"> created by <span> (Atharva, Santosh, Shubham, Pratik) </span> | all rights reserved!|</div>
        </section>
        <div class="modal fade" id="feedback_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      

    EOT;
    }
?>