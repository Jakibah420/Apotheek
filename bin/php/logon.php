

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