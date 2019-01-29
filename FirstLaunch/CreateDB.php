<?php
    function connect(){
        $host = "127.0.0.1:3306";
        $username = "root";
        $password = "";
        $db = "db";
        $conn = mysqli_connect($host, $username, $password);
        $serverLink = mysqli_connect($host, $username, $password, $db);
        if($serverLink == false){
            $sql = "CREATE DATABASE db";
            if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
            } else {
            echo "Error creating database: " . mysqli_error($conn);
            }    
        }else{
            echo "Connection to database established\r\n";
            return $serverLink;
        }
    }   
?>

<html>
    <h1><?php connect(); ?></h1>
</html>



