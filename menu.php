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

<?=template_header('Menu',$_SESSION['name'])?>
<section class="ftco-section ftco-services">
    <div class="container">
    	<div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Menu</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
    	<div class="row no-gutters d-flex">
            <?php while($product = mysqli_fetch_assoc($results)) {?>
                <div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img <?= $product['id'] > 3 ? 'order-lg-last' :''?>" style="background-image: url(images/<?=$product['img']?>);"></a>
    					<div class="text p-4">
    						<h3><?=$product['name']?></h3>
    						<p><?=$product['desc']?></p>
    						<p class="price"><span><?=$product['price']?></span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
    	<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Our Menu Pricing</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
        <? $i = 1?>
            <?php while($product = mysqli_fetch_assoc($results_all)) {?>
                <?= ($i = 1 ||$i = $count ) ? '<div class="col-md-6">' :''?>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/<?=$product['img']?>);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span><?=$product['name']?></span></h3>
                                <span class="price"><?=$product['price']?></span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <?= ($i = 1 ||$i = $count ) ? '</div>' :''?>
                    <? $i = $i+1?>
            <?php } ?>
        </div>
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