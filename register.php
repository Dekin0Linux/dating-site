<?php session_start(); ?>

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
                        <a href="adminDashboard.php" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="image">
                </div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="section-header">
                            <h2 class="title">Welcome to Qrúca </h2>
                            <p>Let's create your profile! Just fill in the fields below, and we’ll get a new account. </p>
                        </div>
                        <div class="main-content">
                            <form action="process.php" method="post" enctype="multipart/form-data">
                                <h4 class="content-title">Acount Details</h4>
                                <div class="form-group">
                                    <label>Username*</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number*</label>
                                    <input type="number" class="my-form-control" placeholder="Enter Mobile Number" name="phone" required>		
                                </div>
                                <div class="form-group">
                                    <label>Body Type*</label>
                                    <input type="text" class="my-form-control" placeholder="ex. Slim, Thick, Mid-Thick, Slender" name="body_type" required>
                                </div>
                                <div class="form-group">
                                    <label>Services*</label>
                                    <select class="my-form-control" name="service">
                                        <option value="regular">Select a Service</option>
                                        <option value="regular" >Regular</option>
                                        <option value="premium">Premium</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Age*</label>
                                    <input type="number" class="my-form-control" placeholder="your Age" name="age" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="gender" id="males1" value="male" required><label for="males1">Man</label>
                                        </div>
                                        <div class="s-input">
                                            <input type="radio" name="gender" id="females1" value="female" required><label
                                                for="females1">Woman</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Upload a Picture*</label>
                                    <input type="file" style="padding-top:15px; color:#EAF2FC;" class="my-form-control" placeholder="Upload a Picture" name="image">

                                    <input type="file" style="padding-top:15px; color:#EAF2FC;margin-top:10px;" class="my-form-control" placeholder="Upload a Picture" name="image2">
                                </div>
                                <div class="form-group">
                                    <label>Interests*</label>
                                    <input type="text" class="my-form-control" placeholder="ex. likes movies, travelling, adventure" name="interest">
                                </div>
                                <div class="form-group">
                                    <label>Amount*</label>
                                    <input type="number" step="any" class="my-form-control" placeholder="e.g 200" name="amount">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control " rows="7" placeholder="" name="desc"></textarea>
                                </div>
                                <button class="default-btn reverse" data-toggle="modal" data-target="#email-confirm" name="register"><span>Create Profile</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> login section end here <================== -->

	
	

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