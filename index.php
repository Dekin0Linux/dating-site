<?php include './inc/header.php'; ?>
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
								<li class="active">
									<a href="#0">Home</a>
									<ul>
										<li><a href="index.html" class="active">Home</a></li>
									</ul>
								</li>
								<li>
									<a href="#0">Community</a>
									<ul>
										<li><a href="members.html">All Members</a></li>

									</ul>
								</li>
								<li><a href="contact.html">contact</a></li>
							</ul>
						</div>
						<div class="header__more">
                            <button class="default-btn dropdown-toggle" type="button" id="moreoption" data-bs-toggle="dropdown" aria-expanded="false">Account</button>
                            <ul class="dropdown-menu" aria-labelledby="moreoption">
                                <li><a class="dropdown-item" href="login.php">Log In</a></li>
                               </ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
    </header>
    <!-- ================> header section end here <================== -->


    <!-- ================> Banner section start here <================== -->
	<div class="banner padding-top padding-bottom bg_img" style="background-image: url(assets/images/banner/bg.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-12">
					<div class="banner__content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
						<div class="banner__title">
							<h2>Find your true love</h2>
							<p>Serious dating with your perfect match is just a click away.</p>
						</div>
						<div class="banner__form">
							<form action="members.php" method="GET">

								<!-- <div class="banner__list">
									<label>I am a</label>
									<div class="row">
										<div class="col-6">
											<label class="banner__inputlist" for="male">
												<input type="radio" id="male" value="male" name="gender" class="male" checked required>
												<span>Male</span>
												<span class="banner__inputlist--icon"><i class="fa-solid fa-mars"></i></span>
											</label>
										</div>
										<div class="col-6">
											<label class="banner__inputlist" for="female">
												<input type="radio" id="female" name="gender" value="female" class="female" required>
												<span>Female</span>
												<span class="banner__inputlist--icon"><i class="fa-solid fa-venus"></i></span>
											</label>
										</div>
									</div>
								</div> -->
								<!-- <div class="banner__list">
									<label>Looking for</label>
									<div class="row">
										<div class="col-6">
											<label class="banner__inputlist" for="male2">
												<input type="radio" id="male2" name="interest" class="male" value="male" required>
												<span>Male</span>
												<span class="banner__inputlist--icon"><i class="fa-solid fa-mars"></i></span>
											</label>
										</div>
										<div class="col-6">
											<label class="banner__inputlist" for="female2">
												<input type="radio" id="female2" name="interest" class="female" value="female" checked required>
												<span>Female</span>
												<span class="banner__inputlist--icon"><i class="fa-solid fa-venus"></i></span>
											</label>
										</div>
									</div>
								</div> -->

								<!-- <div class="banner__list">
									<label>Age</label>
									<div class="row">
										<div class="col-6">
											<div class="banner__inputlist">
												<select name="start_age" required>
													<option value="18" selected>18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
												</select>
											</div>
										</div>
										<div class="col-6">
											<div class="banner__inputlist" >
												<select name="end_age" required>
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
								</div> -->
								<div class="banner__list">
									<label>Services</label>
									<div class="row">
										<div class="col-12">
											<div class="banner__inputlist">
												<select id="country" name="service" >
													<option value="Select Service">Select Service</option>
													<option value="regular">Regular</option>
													<option value="premium">Premium</option>
													</select>
											</div>
										</div>
									</div>
								</div>

								<div class="banner__list">
									<label>Psuedonym</label>
									<div class="row">
										<div class="col-6">
											<label class="banner__inputlist" for="username">
												<input type="text" id="username" name="username" class="male" placeholder="Name" required>
												<span class="banner__inputlist--icon"><i class="fa-solid fa-user"></i></span>
											</label>
										</div>
										<div class="col-6">
											<label class="banner__inputlist" for="phone">
												<input type="text" id="phone" name="phone" class="male" placeholder="Number" required>
												<span class="banner__inputlist--icon"><i class="fa-solid fa-phone"></i></span>
											</label>
										</div>
									</div>
								</div>

								
								<!-- <button type="submit" class="default-btn reverse d-block"><span>Find Your Partner</span></button> -->
								<input type="submit" class="default-btn reverse d-block" value="Find Your Partner" name="submit1"/>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="banner__thumb banner__thumb--thumb1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
						<img src="assets/images/banner/01.png" alt="banner">
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> Banner section end here <================== -->


    <!-- ================> About section start here <================== -->
	<div class="about padding-top padding-bottom">
		<div class="container">
			<div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
				<h2>Qrúca Super Powers</h2>
				<p>Our dating platform is like a breath of fresh air. Clean and trendy design with ready to use features we are sure you will love.</p>
			</div>
			<div class="section__wrapper">
				<div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
					<div class="col wow fadeInUp" data-wow-duration="1.5s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="assets/images/about/01.jpg" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Simple To Use</h4>
									<p>Simple steps to follow to have a matching connection.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col wow fadeInUp" data-wow-duration="1.5s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="assets/images/about/02.jpg" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Smart Matching</h4>
									<p>Create connections with users that are like you.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col wow fadeInUp" data-wow-duration="1.5s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="assets/images/about/03.jpg" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Filter Very Fast</h4>
									<p>Don’t waste your time! Find only what you are interested</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col wow fadeInUp" data-wow-duration="1.5.5s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="assets/images/about/04.jpg" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Cool Community</h4>
									<p>BuddyPress network is full of cool members.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> About section end here <================== -->

    <!-- ================> Member section start here <================== -->
	<div class="member padding-top padding-bottom overflow-hidden">
		<div class="container">
			<div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
				<h2>Most Popular Members</h2>
				<p>Learn from them and try to make it to this board. This will for sure boost you visibility and increase your chances to find you loved one.</p>
			</div>
			<div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
				<ul class="member__buttongroup filters-button-group w-100 d-flex flex-wrap justify-content-center">
                    <li class="button is-checked filter-btn" data-filter="*"><span class="member__radio"></span> View All <span class="banner__inputlist--icon"><i class="fa-solid fa-venus-mars"></i></span></li>
                    <li class="button filter-btn" data-filter=".male"><span class="member__radio"></span> Regular <span class="banner__inputlist--icon"><i class="fa-solid fa-user"></i></span></li>
                    <li class="button filter-btn" data-filter=".female"><span class="member__radio"></span> Premium <span class="banner__inputlist--icon"><i class="fa-solid fa-user"></i></span></li>
                </ul>

                <div class="member__grid mx-12-none">
                    <div class="member__item male">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/male/01.jpg" alt="member-img">
								<span class="member__activity">Online</span>
							</div>
							<div class="member__content">
								<a href="overview.html"><h5>Smith Jhonson</h5></a>
								<p>32 Years old <i class="fa-solid fa-mars"></i></p>
							</div>
						</div>
                    </div>
                    <div class="member__item female">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/female/01.jpg" alt="member-img">
								<span class="member__activity member__activity--ofline">2 days ago</span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Arika Q Smith</h5></a>
								<p>22 Years old <i class="fa-solid fa-venus"></i></p>
							</div>
						</div>
                    </div>
                    <div class="member__item male">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/male/02.jpg" alt="member-img">
								<span class="member__activity">Online</span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>William R Show</h5></a>
								<p>32 Years old <i class="fa-solid fa-mars"></i></p>
							</div>
						</div>
                    </div>
                    <div class="member__item female">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/female/02.jpg" alt="member-img">
								<span class="member__activity member__activity--ofline">10 Minites ago</span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Karolin Kuhn</h5></a>
								<p>22 Years old <i class="fa-solid fa-venus"></i></p>
							</div>
						</div>
                    </div>
                    <div class="member__item male">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/male/03.jpg" alt="member-img">
								<span class="member__activity">Online</span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Dieter Hoover</h5></a>
								<p>32 Years old <i class="fa-solid fa-mars"></i></p>
							</div>
						</div>
                    </div>
				</div>
				<div class="text-center mt-4">
					<a href="members.html" class="default-btn"><span>See More Popular</span></a>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> Member section end here <================== -->

	<!-- ================> Work section start here <================== -->
	<div class="work work--style2 padding-top padding-bottom bg_img" style="background-image: url(assets/images/bg-img/01.jpg);">
		<div class="container">
			<div class="section__wrapper">
				<div class="row g-4 justify-content-center">
					<div class="col-xl-6 col-lg-8 col-12 wow fadeInLeft" data-wow-duration="1.5s">
						<div class="work__item">
							<div class="work__inner">
								<div class="work__thumb">
									<img src="assets/images/work/09.png" alt="dating thumb">
								</div>
								<div class="work__content">
									<h3>Trust And Safety</h3>
									<p>Choose from one of our membership levels and unlock features you need. </p>
									<a href="#" class="default-btn"><span>See More Details</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-8 col-12 wow fadeInRight" data-wow-duration="1.5s">
						<div class="work__item">
							<div class="work__inner">
								<div class="work__thumb">
									<img src="assets/images/work/10.png" alt="dating thumb">
								</div>
								<div class="work__content">
									<h3>Simple Membership</h3>
									<p>Choose from one of our membership levels and unlock features you need. </p>
									<a href="#" class="default-btn reverse"><span>Membership Details</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> Work section end here <================== -->


    <!-- ================> App section start here <================== -->
	<div class="app padding-top">
		<div class="container">
			<div class="row g-4 justify-content-center flex-row-reverse">
				<div class="col-xxl-6 col-12 wow fadeInUp" data-wow-duration="1.5s">
					<div class="app__item">
						<div class="app__inner">
							<div class="app__content">
								<h4>Easy Connect To Everyone</h4>
								<h2>Download App Our Qrúca</h2>
								<p>You find us, finally and you are already in love. More than 5.000.000 around the world already shared the same experience andng ares uses our system Joining us today just got easier!</p>
								<ul>
									<li><a href="comingsoon.html"><img src="assets/images/app/01.jpg" alt="dating thumb"></a></li>
									<li><a href="comingsoon.html"><img src="assets/images/app/02.jpg" alt="dating thumb"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> App section end here <================== -->

<?php include './inc/footer.php'?>