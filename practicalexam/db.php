<?php

//class for Database Connection
class dbconnect{
    function dbconn()
    {
    
    //to connect to database
        $dbhost = "localhost";  //localhost name
        $dbuser = "root";   //username
        $dbpass = "";   //password
        $db = "internship";    //database name
    
        //connection string
        $conn = new mysqli ($dbhost,$dbuser,$dbpass,$db)
        or
        die ("Connection Failed".$conn->error);
    
        return $conn;
    }
}