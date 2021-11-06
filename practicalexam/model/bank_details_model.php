<?php
include '../db.php';


class details{ 


    function addDetails($bank_name,$branch_name,$branch_code,$account_number){
        $dbconObj = new dbconnect();
        $conn = $dbconObj->dbconn();
        $sql = "INSERT INTO bank_details(bank_name,branch_name,branch_code,account_number)
                VALUES('$bank_name','$branch_name','$branch_code','$account_number')";
        $result = $conn->query($sql) or die ($conn->error);
        return $result;
    }

    function updateBank($ebank_id,$ebank_name,$ebranch_name,$ebranch_code,$eaccount_number){
        $dbconObj = new dbconnect();
        $conn = $dbconObj->dbconn();
        $sql = "UPDATE bank_details SET ('$ebank_id','$ebank_name','$ebranch_name','$ebranch_code','$eaccount_number')";
        $result = $conn->query($sql) or die ($conn->error);
        return $result;
    }
    function deleteBank($dbank_id,$dbank_name,$dbranch_name,$dbranch_code,$daccount_number){
        $dbconObj = new dbconnect();
        $conn = $dbconObj->dbconn();
        $sql = "DELETE from bank_details ('$dbank_id','$dbank_name','$dbranch_name','$dbranch_code','$daccount_number')";
        $result = $conn->query($sql) or die ($conn->error);
        return $result;
    }


    function getBankDetails($ebank_id){       
        $dbconObj = new dbconnect();
        $conn = $dbconObj->dbconn();
        $sql = "SELECT * FROM bank_details WHERE bank_id=$ebank_id";
        $result = $conn->query($sql) or die ($conn->error);
        return $result;
    }

    function getBankTable(){       
        $dbconObj = new dbconnect();
        $conn = $dbconObj->dbconn();
        $sql = "SELECT * FROM bank_details";
        $staff_result = $conn->query($sql) or die ($conn->error);
        return $staff_result;
    }
}