<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
if (!isset($_SESSION['name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

$conn = connect_mysql();

$request = 'SELECT * FROM products ORDER BY id ASC LIMIT 6';
$request_all = 'SELECT * FROM products ORDER BY id ASC';
$results = mysqli_query($conn, $request);
$results_all = mysqli_query($conn, $request_all);
$count = round(mysqli_num_rows($results_all)/2)

?>
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<!--===============================================================================================-->
</head>
<style>
.container {
  margin: auto;
  width: 50%;
  padding: 10px;
  text-align: -webkit-center;
}
.input200 {
  font-family: Poppins-Medium;
  font-size: 15px;
  line-height: 1.5;
  color: #666666;

  display: block;
  width: 100%;
  background: #e6e6e6;
  height: 120px;
  border-radius: 25px;
  padding: 0 30px 0 68px;
}
</style>
<?=template_header('Menu',$_SESSION['name'])?>

<section class="ftco-section ftco-services">
    <div class="container">
    <form class="login100-form validate-form" action="feedback_form.php" method="post" id="fbform">
					<span class="login100-form-title">
						Feedback Form
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Rating is required">
						<input class="input100" type="phone" name="rating" pattern="[1-5]" placeholder="Rating from 1-5">
					</div>
                            
					<div class="wrap-input100 validate-input" >
                    <textarea class="input200" rows="10" cols="50" name="comment" form="fbform" placeholder="Enter text here..."></textarea>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="submit" value="Send Feedback" class="login100-form-btn" name="send">
					</div>
				</form>
    </div>
</section>
<?=template_footer()?>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/main2.js"></script>
</body>
</html>