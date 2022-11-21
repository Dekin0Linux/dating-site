<?php
ob_start();
include './inc/header.php';
include './db/db.php';

$id = '';
if (isset($_GET['user_id'])) {
    $id = $_GET['user_id'];

    $getUser = "SELECT * FROM user WHERE id = '$id'";
    ($query = mysqli_query($conn, $getUser)) or die($conn);
    while ($row = mysqli_fetch_assoc($query)) {
        $user_id = $row['id'];
        $name = $row['user_name'];
        $bodyType = $row['body_type'];
        $interest = $row['interest'];
        $image = $row['image'];
        $image2 = $row['image2'];
    }
}else{
    header('location:members.php');
}

?>

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


    <!-- ================> header section start here <================== -->
    <header class="header" id="navbar">
		<div class="header__bottom">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="index.php">Qrúca</a>
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler--icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
						<div class="navbar-nav mainmenu">
							<ul>
								<li>
									<a href="#0">Home</a>
									<ul>
										<li><a href="index.php">Home</a></li>
									</ul>
								</li>
								
								<li>
									<a href="#0">Community</a>
									<ul>
										<li><a href="members.php">All Members</a></li>
									</ul>
								</li>
								<li><a href="contact.html">contact</a></li>
							</ul>
						</div>
						<div class="header__more">
                            <button class="default-btn dropdown-toggle" type="button" id="moreoption" data-bs-toggle="dropdown" aria-expanded="false">Account</button>
                            <ul class="dropdown-menu" aria-labelledby="moreoption">
                                <li><a class="dropdown-item" href="login.html">Log In</a></li>
                            </ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
    </header>
    <!-- ================> header section end here <================== -->

    

    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader bg_img" style="background-image: url(assets/images/bg-img/pageheader.jpg);">
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>Over-view Section</h2>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->

    <!-- ================> shop section start here <================== -->
    
    <div class="shop-single padding-top padding-bottom aside-bg">
        <div class="container">
        <?php  
    if (isset($_GET['match'])) {
        // Insert Username and Number into DB
        $userName = $_SESSION['username'];
        $userPhone = $_SESSION['phone'];
    
        $matchedUser = "UPDATE user SET match_name ='$userName',match_no='$userPhone' WHERE id = $id ";
    
        $result = mysqli_query($conn,$matchedUser) or die($conn);
        if($result){
            echo '<div class="alert alert-success mx-5" >Your match is requested</div>';
            header('refresh:2 , url=./index.php');
        }
    
    }
    ?>
            <div class="row justify-content-center pt-4">
                <div class="col-lg-9 col-12">
                    <article>

					<?php if ($id): ?>
                        <div class="product-details">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    <div class="product-thumb">
                                        <div class="swiper-container pro-single-top ">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="./uploads/<?= empty($image) ? $image2 : $image ; ?>" alt="shop"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="./uploads/<?= empty($image2) ? $image : $image2 ; ?>" alt="shop"></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="swiper-container pro-single-thumbs">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="./uploads/<?= empty($image) ? $image2 : $image ; ?>" alt="shop"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="./uploads/<?= empty($image2) ? $image : $image2 ; ?>" alt="shop"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="pro-single-next"><i class="fa-solid fa-angle-left"></i></div>
                                        <div class="pro-single-prev"><i class="fa-solid fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="post-content">
                                        <h4><?= $name ?></h4>
                                        <p class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            (5 review)
                                        </p>
                                        <p>Interest : <?= $interest ?></p>
                                        <p>Body Type : <?= $bodyType ?></p>
                                        <a href="?user_id=<?= $user_id ?>&match=matched" class="btn btn-primary"><span>Interested</span>
                                            <i class="fa-solid fa-thumbs-up"></i>
                                        </a>
                                        <a href="./members.php?service=&username=<?= $_SESSION['username']?>&phone=<?= $_SESSION['phone']?>&submit1=" class="btn btn-danger"><span>Not Interested</span>
                                            <i class="fa-solid fa-thumbs-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php else: echo "<h2 class='text-center my-3'>Waiting Approval from your match</h2>";endif; ?>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Footer section start here <================== -->
	<?php include './inc/footer.php'; ?>
