<?php include './inc/header.php';?>

<?php
ob_start();
include './db/db.php';

//All users count
$get_all = " SELECT * FROM user";
$query = mysqli_query($conn, $get_all) or die($conn);
$row_count = mysqli_num_rows($query);


if(isset($_GET['submit1']) || ''){
	$service = '';
	$usern ='';
	$phone = '';

	$service = $_GET['service'];
	$usern = $_GET['username'];
	$phone = $_GET['phone'];

	$_SESSION['username'] = $usern;
	$_SESSION['phone'] = $phone;

	
	$get_search = "SELECT * FROM user";
	$sql = mysqli_query($conn,$get_search) or die($conn);
	if(mysqli_num_rows($sql) <= 0){
		echo '<h2 class="text-center my-5">No Match Found</h2>';
	}
}

?>
	<!-- preloader start here -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
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
								<li class="active">
									<a href="#0">Community</a>
									<ul>
										<li><a href="members.php" class="active">All Members</a></li>
									</ul>
								</li>
								<li><a href="contact.html">contact</a></li>
							</ul>
						</div>
						<div class="header__more">
                            <button class="default-btn dropdown-toggle" type="button" id="moreoption" data-bs-toggle="dropdown" aria-expanded="false">My Account</button>
                            <ul class="dropdown-menu" aria-labelledby="moreoption">
                                <li><a class="dropdown-item" href="login.php">Log In</a></li>
                                <!-- <li><a class="dropdown-item" href="register.php">Sign Up</a></li> -->
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
                <h2>Qrúca All Members</h2>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->



    <!-- ================> About section start here <================== -->
	<div class="about about--style3 padding-top pt-xl-0">
		<div class="container">
			<div class="section__wrapper">
				<form action="<?=$_SERVER['PHP_SELF'];?>" method="GET">
					<div class="banner__list">
						<div class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1">
							<div class="col-6">
								<label>I am a</label>
								<div class="banner__inputlist">
									<select name="gender">
										<option>Select Gender</option>
										<option value="male" selected>Male</option>
										<option value="female">Female</option>
										<option value="others">Others</option>
									</select>
								</div>
							</div>
							<div class="col-6">
								<label>Looking for</label>
								<div class="banner__inputlist">
									<select name="interest">
										<option>Select Gender</option>
										<option value="male">Male</option>
										<option value="female" selected>Female</option>
										<option value="others">Others</option>
									</select>
								</div>
							</div>
							<div class="col">
								<label>Age</label>
								<div class="row g-3">
									<div class="col-6">
										<div class="banner__inputlist">
											<select name="start_age">
												<option value="18" selected>18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="banner__inputlist">
											<select name="end_age">
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25" selected>25</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<label>Country</label>
								<div class="banner__inputlist">
									<select id="country" name="country">
										<option value="Afganistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										</select>
								</div>
							</div>
							<div class="col">
								<button type="submit" class="default-btn reverse d-block" name="submit"><span>Find Your Partner</span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- ================> About section end here <================== -->



	<!-- ================> Member section start here <================== -->
	<div class="member member--style2 padding-top padding-bottom">
		<div class="container">
			<div class="section__wrapper">
				<div class="member__info mb-4">
					<div class="member__info--left">
						<div class="member__info--filter">
							<div class="default-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Filter Your Search <i class="fa-solid fa-sliders"></i></span></div>
						</div>
						<div class="member__info--count">
							<div class="default-btn"><span>All Members</span></div>
							<p><?=$row_count?></p>
						</div>
					</div>
					<div class="member__info--right">
						<div class="member__info--customselect right w-100">
							<div class="default-btn"><span>Order By:</span></div>
							<div class="banner__inputlist">
								<select>
									<option value="0">Last Active </option>
									<option value="1">Oldest</option>
									<option value="2">Popular</option>
									<option value="3">Most Active</option>
								</select>
							</div>
						</div>
					</div>
                </div>

				<!-- Members card -->
				<?php
					include './db/db.php';

					if(isset($_GET['submit'])){
						
						// $gender = $_GET['gender'];
	                $interest = $_GET['interest'];
					$start_age = $_GET['start_age'];
					$end_age = $_GET['end_age'];


					$get_search = "SELECT * FROM user WHERE age BETWEEN '$start_age' AND '$end_age' AND gender='$interest'";
					$sql = mysqli_query($conn,$get_search) or die($conn);
					if(mysqli_num_rows($sql) <= 0){
						echo '<h2 class="text-center my-5">No Match Found</h2>';
					}
					
				}
				?>
				
				<div class="row g-0 justify-content-center mx-12-none">
					
				<?php while($row = mysqli_fetch_assoc($sql)): ?>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="./uploads/<?= empty($row['image']) ? $row['image2'] : $row['image'] ; ?>">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="overview.php?user_id=<?= $row['id']?>"><h5><?= $row['user_name']?></h5></a>
								<p><?= $row['age']?></p>
							</div>
						</div>
					</div>
				<?php endwhile;?>
					
					
				</div>
				<div class="member__pagination mt-4">
					<div class="member__pagination--left">
						<!-- <p>Viewing 1 - 20 of 12,345 Members</p> -->
					</div>
					<div class="member__pagination--right">
						<ul class="default-pagination">
                            <li>
                                <a href="#"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#">01</a>
                            </li>
                            <li>
                                <a href="#" class="active">02</a>
                            </li>
                            <li>
                                <a href="#">03</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> Member section end here <================== -->


	<!-- Modal -->
	<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Filter your search</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="banner__list">
						<div class="row align-items-center row-cols-1">
							<div class="col">
								<label>I am a</label>
								<div class="banner__inputlist">
									<select>
										<option>Select Gender</option>
										<option value="male" selected>Male</option>
										<option value="female">Female</option>
										<option value="others">Others</option>
									</select>
								</div>
							</div>
							<div class="col">
								<label>Looking for</label>
								<div class="banner__inputlist">
									<select>
										<option>Select Gender</option>
										<option value="male">Male</option>
										<option value="female" selected>Female</option>
										<option value="others">Others</option>
									</select>
								</div>
							</div>
							<div class="col">
								<label>Age</label>
								<div class="row g-3">
									<div class="col-6">
										<div class="banner__inputlist">
											<select>
												<option value="18" selected>18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="banner__inputlist">
											<select>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25" selected>25</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<label>Country</label>
								<div class="banner__inputlist">
									<select id="country2" name="country2">
										<option value="Afganistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
									</select>
								</div>
							</div>
							<div class="col">
								<button type="submit" class="default-btn reverse d-block"><span>Find Your Partner</span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div> -->
	<!-- modal -->

	<?php include './inc/footer.php';?>