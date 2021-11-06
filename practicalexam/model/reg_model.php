<?php
include 'db.php';

class user_reg{  
    function addUser($username,$remail,$rpass){
        $dbconObj = new dbconnect();
        $conn = $dbconObj->dbconn();
        $sql = "INSERT INTO user_login(username,email,password) VALUES('$username','$remail','$rpass')";
        $result = $conn->query($sql);
        return $result;
    }
}