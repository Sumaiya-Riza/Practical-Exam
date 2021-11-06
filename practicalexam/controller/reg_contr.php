<?php
$status = $_REQUEST['status'];
include '../model/reg_model.php';
$userObj = new user_reg();

switch($status){

    case "addingUser":
        try {
            $username=$_POST['username'];
            $remail=$_POST['remail'];
            $rpass=$_POST['rpass'];           

            // if ($username=="") {
            //     throw new Exception("Please enter User Name!!!");                
            // }            
            // if ($remail=="") {
            //     throw new Exception("Please enter Email!!!");                
            // }
            // if ($rpass=="") {
            //     throw new Exception("Please enter Password No.!!!");                
            // }
            $rpass=sha1($rpass);

            $userObj->addUser($username, $remail, $rpass);

            $msg="$username Added Successfully!!!";
            $msg=base64_encode($msg);
            header ("location: ../index.php?msg=$msg");

        } catch (Exception $th) {
            $msg=$th->getMessage();
            $msg=base64_encode($msg);
            header ("location: ../index.php?error=$msg");
            
        }

    break;
}