

<?php
	register("Jan van de broek", "Welkom02");
	echo login("Jan van de broek", "Welkom02");
	
	function login(string $Username, String $Password){
		$serverLink = connect();
		
		$query = "SELECT Password FROM login WHERE Username='".$Username."'";
		$result = mysqli_query($serverLink, $query);
		$data = mysqli_fetch_assoc($result);
		$Password = hash('sha256', $Password);
		if($Password==$data['Password']){
				return true;
		}else{
			return false;
		}
	}
	
	function connect(){
		$host = "127.0.0.1:3306";
		$username = "Iakovos";
		$password = "Welkom01";
		$db = "logindatabase";
		$serverLink = mysqli_connect($host, $username, $password, $db);
		if($serverLink == false){
			echo "failed to connect\r\n";
		
		}else{
			echo "Connected to database\r\n";
			return $serverLink;
		}
	}
	
	function register(string $Username, String $Password){
		$serverLink = connect();
		$query = "INSERT INTO login (ID, Username, Password) VALUES (" . $Username . ", " . hash('sha256', $Password).")";	
		$result = mysqli_query($serverLink, $query);
		if($query==true){
			echo "registered";
		}else{
			echo "register failed";
		}
		}
		
	
	
?>