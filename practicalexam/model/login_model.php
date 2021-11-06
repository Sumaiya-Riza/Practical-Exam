<?php
session_start();

//Include other pages
include '../db.php'; //Connect the database connection

class login{
  
  function loginvalidation($email, $password){
     //create object
    $ob = new dbconnect();
    $conn = $ob -> dbconn();
    //Assign SQL
    $sql = "SELECT * FROM user_login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql)or die($conn->error);
    return $result; //to execute the query
  }
}