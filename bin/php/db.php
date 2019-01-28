<?php
	function connect(){
		$host = "127.0.0.1:3306";
		$username = "root";
		$password = "";
		$db = "db";
		$serverLink = mysqli_connect($host, $username, $password, $db);
		if($serverLink == false){
			echo "failed to connect\r\n";
		
		}else{
			echo "Connection to database established\r\n";
			return $serverLink;
		}
	}	
?>