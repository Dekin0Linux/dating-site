<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>Qrúca</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
	<!-- <link rel="icon" type="image/png" href="assets/images/favicon.png"> -->
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
	<!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
	<!-- preloader ending here -->

	<!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- ================> login section start here <================== -->
    <section class="log-reg">
        <div class="top-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-7">
                        <div class="logo">
                            <a href="index.php">Qrúca</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-5">
                        <a href="index.php" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
            session_start();
            include './db/db.php';
            $username = '';
            $password = '';

                if(isset($_POST['login'])){
                    $username = $_POST['uname'];
                    $password = $_POST['password'];

                    $get_user = "SELECT * FROM adminLogin";
                    $adminQuery = mysqli_query($conn,$get_user) or die($conn);

                    while($row = mysqli_fetch_assoc($adminQuery)){
                        if($username == $row['username'] && $password === $row['password']){
                            $_SESSION['loggedIn'] = true;
                            header('location:./viewMembers.php');
                        }else{
                            echo '<h2 class="alert alert-danger mx-4">Invalid Credentials</h2>';
                        }
                    }
                }
            ?>
            
            <div class="row">
                <div class="image image-log"></div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="section-header inloginp">
                            <h2 class="title">Welcome to Qrúca</h2>
                        </div>
                        <div class="main-content inloginp">
                            <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
                                <div class="form-group">
                                    <label >Your Username</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Username" name="uname">
                                </div>
                                <div class="form-group">
                                    <label >Password</label>
                                    <input type="password" class="my-form-control" placeholder="Enter Your Password" name="password">
                                </div>
                                <p class="f-pass">Forgot your password? <a href="#">recover password</a></p>
                                <div class="text-center">
                                    <button type="submit" class="default-btn" name="login"><span>Sign in</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<!-- All Needed JS -->
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<!-- <script src="assets/js/all.min.js"></script> -->
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/counterup.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>


	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>