<?php
include './db/db.php';

if(isset($_GET['del_id'])){
    $del = $_GET['del_id'];

    $del_row = "DELETE FROM user WHERE id = $del ";
    $result = mysqli_query($conn,$del_row) or die($conn);
    if($result){
        header('location:viewMembers.php');
    }
}


?>