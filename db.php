<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "studentmanagement";
    
    
    
    try{
        $conn = mysqli_connect($host,
                             $username,
                              $password, 
                              $database);
    }
    catch(mysqli_sql_exception){
        echo "could not connect";
    }
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    
?>