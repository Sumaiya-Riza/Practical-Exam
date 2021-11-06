<?php
include"../model/login_model.php";
$loginObj = new login();
//Validate Email and Password in DB
$email = $_POST['email'];
$password = $_POST['password']; 
$password = sha1($password); //one way encryption
$result = $loginObj->loginvalidation($email, $password);

if($result->num_rows==1){
    $row = $result->fetch_assoc();
    header("Location:../view/bank_details_view.php");
}else{
    $msg = "Invalid Email or Password...!";
    $msg = base64_encode($msg);
    header ("Location:../index.php?msg=$msg");
}