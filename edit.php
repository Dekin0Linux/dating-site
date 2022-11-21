<?php session_start(); 
include './db/db.php';

if(isset($_GET['edit_id'])){
    $editId = $_GET['edit_id'];

    $get_all = " SELECT * FROM user WHERE id = '$editId' ";
    $query = mysqli_query($conn, $get_all) or die($conn);
    while($data = mysqli_fetch_assoc($query)){
        $userName = $data['user_name'];
        $phone = $data['phone'];
        $bodyType = $data['body_type'];
        $service = $data['service'];
        $age = $data['age'];
        $Usergender = $data['gender'];
        $interest = $data['interest'];
        $amount = $data['amount'];
        $desc = $data['description'];
        $image = $data['image'];
        $image2 = $data['image2'];

    }

    //Update User Data
    if(isset($_POST['edit'])){
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $body_type = $_POST['body_type'];
        $service = $_POST['service'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $interest = $_POST['interest'];
        $amount = $_POST['amount'];
        $desc = $_POST['desc'];

        // Image Uploading
        $uploadDir = './uploads/'; //upload Dir
        $allowTypes = array('jpg','png','jpeg','gif','pdf'); //extensions
    
        $imageName = $_FILES['image']['name']; //get file name
        $imageName2 = $_FILES['image02']['name']; //get file name2

        $tempLoc = $_FILES['image']['tmp_name']; //temp location
        $tempLoc2 = $_FILES['image02']['tmp_name']; //temp location2
    
        $uploadFile = $uploadDir . $imageName;
        $uploadFile2 = $uploadDir . $imageName2;

        echo '$imageName';
        echo '$imageName2';
        
        // $fileType = pathinfo($imageName,PATHINFO_EXTENSION);

        //image1
        if(!empty($imageName)){
            move_uploaded_file($tempLoc,$uploadFile);
                $create_user = "UPDATE user SET user_name='$username',age='$age',gender='$gender',service='$service',phone='$phone',body_type='$body_type',interest='$interest',image='$imageName',amount='$amount',description='$desc' WHERE id= '$editId'; ";

                $query = mysqli_query($conn,$create_user) or die($conn);
                if($query){
                    $_SESSION['alertMsg']= "<div class='alert alert-success mx-4'><h5>Client Updated</h5></div>";
                    header('location:viewMembers.php');
                }else{
                    echo 'Failed to Add';
                }
        }else{
            $create_user = "UPDATE user SET user_name='$username',age='$age',gender='$gender',service='$service',phone='$phone',body_type='$body_type',interest='$interest',image='$image',amount='$amount',description='$desc' WHERE id= '$editId'; ";

            $query = mysqli_query($conn,$create_user) or die($conn);
            if($query){
                $_SESSION['alertMsg']= "<div class='alert alert-success mx-4'><h5>Client Updated</h5></div>";
                header('location:viewMembers.php');
            }else{
                echo 'Failed to Add';
            }
        }

        //Image 2
        if(!empty($imageName2)){
            move_uploaded_file($tempLoc,$uploadFile2);
                $create_user = "UPDATE user SET user_name='$username',age='$age',gender='$gender',service='$service',phone='$phone',body_type='$body_type',interest='$interest',image2='$imageName2',amount='$amount',description='$desc' WHERE id= '$editId'; ";

                $query = mysqli_query($conn,$create_user) or die($conn);
                if($query){
                    $_SESSION['alertMsg']= "<div class='alert alert-success mx-4'><h5>Client Updated</h5></div>";
                    header('location:viewMembers.php');
                }else{
                    echo 'Failed to Add';
                }
        }else{
            $create_user = "UPDATE user SET user_name='$username',age='$age',gender='$gender',service='$service',phone='$phone',body_type='$body_type',interest='$interest', image2='$image2',amount='$amount',description='$desc' WHERE id= '$editId'; ";

            $query = mysqli_query($conn,$create_user) or die($conn);
            if($query){
                $_SESSION['alertMsg']= "<div class='alert alert-success mx-4'><h5>Client Updated</h5></div>";
                header('location:viewMembers.php');
            }else{
                echo 'Failed to Add';
            }
        }
    }
}
?>

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
        <!-- <?php if(isset($_SESSION['alertMsg'])){ echo $_SESSION['alertMsg']; unset($_SESSION['alertMsg']);}?> -->
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
                            <form action="#" method="post" enctype="multipart/form-data">
                                <h4 class="content-title">Acount Details</h4>
                                <div class="form-group">
                                    <label>Username*</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Username" name="username" required value="<?php if(isset($userName)){echo $userName; } ?>">
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number*</label>
                                    <input type="number" class="my-form-control" placeholder="Enter Mobile Number" name="phone" required value="<?php if(isset($phone)){echo $phone; } ?>">		
                                </div>
                                <div class="form-group">
                                    <label>Body Type*</label>
                                    <input type="text" class="my-form-control" placeholder="ex. Slim, Thick, Mid-Thick, Slender" name="body_type" required value="<?php if(isset($bodyType)){echo $bodyType; } ?>">
                                </div>
                                <div class="form-group">
                                    <label>Services*</label>
                                    <input type="text" class="my-form-control" name="service" id="" value="<?php if(isset($service)){echo $service; } ?>">
                                </div>
                                <div class="form-group">
                                    <label>Age*</label>
                                    <input type="number" class="my-form-control" placeholder="your Age" name="age" required value="<?php if(isset($age)){echo $age; } ?>">
                                </div>

                                <div class="form-group">
                                    <label>Gender*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="gender" id="males1" value="male"
                                            <?php if(isset($Usergender) == 'female'){echo 'checked';} ?>
                                            required ><label for="males1">Man</label>
                                        </div>

                                        <div class="s-input">
                                            <input type="radio" name="gender" id="females1" value="female"
                                            <?php if(isset($Usergender) == 'female'){echo 'checked';} ?>
                                             required><label
                                                for="females1" >Woman</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- <label>Upload a Picture*</label> -->
                                 <img src="./uploads/<?php if(isset($image)){echo $image; } ?>" alt="image" width="100px">
                                 <input type="file" style="padding-top:15px; color:#EAF2FC;" class="my-form-control" placeholder="Upload a Picture" name="image">

                                 <img src="./uploads/<?php if(isset($image2)){echo $image2; } ?>" alt="image" width="100px">
                                 <input type="file" style="padding-top:15px; color:#EAF2FC;margin-top:10px;" class="my-form-control" placeholder="Upload a Picture" name="image02" >
                                </div>
                                <div class="form-group">
                                    <label>Interests*</label>
                                    <input type="text" class="my-form-control" placeholder="ex. likes movies, travelling, adventure" name="interest">
                                </div>
                                <div class="form-group">
                                    <label>Amount*</label>
                                    <input type="number" step="any" class="my-form-control" placeholder="e.g 200" name="amount" value="<?php if(isset($amount)){echo $amount; } ?>">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control " rows="7" placeholder="" name="desc"><?php if(isset($desc)){echo $desc; } ?></textarea>
                                </div>
                                <input type="submit" class="default-btn reverse" name="edit" value="Update client"/>
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