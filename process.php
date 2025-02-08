<?php
session_start();
include './db/db.php';
//Create a model;
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $body_type = $_POST['body_type'];
    $service = $_POST['service'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $interest = $_POST['interest'];
    $amount = $_POST['amount'];
    $desc = $_POST['desc'];

    //Image Uploading
    $uploadDir = './uploads/'; //upload Dir
    $allowTypes = array('jpg','png','jpeg','gif','pdf',''); //extensions

    $imageName = $_FILES['image']['name']; //get file name
    $imageName2 = $_FILES['image2']['name'];

    $tempLoc = $_FILES['image']['tmp_name']; //temp location
    $tempLoc2 = $_FILES['image2']['tmp_name'];


    $uploadFile = $uploadDir . $imageName;
    $uploadFile2 = $uploadDir . $imageName2;

    $fileType = pathinfo($imageName,PATHINFO_EXTENSION);
    $fileType2 = pathinfo($imageName2,PATHINFO_EXTENSION);


    if(in_array($fileType,$allowTypes) || in_array($fileType2,$allowTypes)){
        if(move_uploaded_file($tempLoc,$uploadFile) || move_uploaded_file($tempLoc,$uploadFile2)){
            
        }else{
            $_SESSION['alertMsg']= "<div class='alert alert-danger mx-4'><h5>Error Uploading file</h5></div>";
            header('location:register.php');
        }
    }else{
        $_SESSION['alertMsg']= "<div class='alert alert-danger mx-4'><h5>Invalid File</h5></div>";
        header('location:register.php');
    }

    $create_user = "INSERT INTO user (user_name,age,gender,service,phone,body_type,interest,image,image2,amount,description) VALUES('$username','$age','$gender','$service','$phone','$body_type','$interest','$imageName','$imageName2','$amount','$desc')";
    $query = mysqli_query($conn,$create_user) or die($conn);
    if($query){
        $_SESSION['alertMsg']= "<div class='alert alert-success mx-4'><h5>Client Added</h5></div>";
        header('location:viewMembers.php');
    }else{
        echo 'Error ';
    }


    

}





?>