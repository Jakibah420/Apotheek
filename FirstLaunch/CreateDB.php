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
            echo " / Please Refresh to commense table creation.";
            } else {
            echo "Error creating database: " . mysqli_error($conn);
            }    
        }else{
            echo "Connection to database established\r\n";
        }
        return $serverLink;
    }
    function createtb(){
        $host = "127.0.0.1:3306";
        $username = "root";
        $password = "";
        $db = "db";
        $serverLink = mysqli_connect($host, $username, $password, $db);
        if($serverLink == true){
            $sql = "CREATE TABLE users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            email VARCHAR(100) NOT NULL,
            pass VARCHAR(500) NOT NULL,
            reg_date TIMESTAMP
            )";
                
            if ($serverLink->query($sql) === TRUE) {
                echo "Table users created successfully";
                echo "Creating UserInfo table...";
				$sql ="CREATE TABLE userinfo(
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				email VARCHAR(100) NOT NULL,
				nam VARCHAR(100) NOT NULL,
                ename VARCHAR(100) NOT NULL,
				surname VARCHAR(100) NOT NULL,
                bsn VARCHAR(100) NOT NULL,
                gender VARCHAR(100) NOT NULL,
				mobilephone INT(10) NOT NULL,
                phone VARCHAR(100) NOT NULL,
                adres VARCHAR(100) NOT NULL,
                postal VARCHAR(100) NOT NULL,
                birthdate DATE,
				activation_date TIMESTAMP
				)";
				  if ($serverLink->query($sql) === TRUE) {
					echo "Table userinfo created successfully";
				  }else{
					  echo "Table userinfo creation failed";
				  }
            } else {
                echo "Error creating table: " . $serverLink->error;
            }
        } else {
            echo "Error: ". $serverLink->error;
        }
    }
?>

<html>
    <h2>Checking if Database exists...</h2><h2><?php connect(); ?></h2>
    <h2>Creating user table...</h2></h2><h2><?php createtb(); ?></h2>
    <h2>Proceed?</h2></h2>
    <h1><a style="color:red;outline:none;text-decoration:none;" href="#">--Start FirstLaunch?  | ERROR: cannot proceed! ask dev to continue development!</a></h1>
</html>