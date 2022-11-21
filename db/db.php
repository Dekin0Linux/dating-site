<?php

$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'qruca';


$conn = mysqli_connect($server,$user,$password,$dbname);

if(!$conn){
    echo 'check server connection';
}


?>