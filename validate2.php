<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$conn = new mysqli('localhost','root','','loginpage');
	if($conn->connect_error) {
		die("Failed to connect : ".$conn->connect_error);
	}
	else {
			$stmt = $conn->prepare("SELECT * FROM students where username = ?");
			$stmt->bind_param("s",$username);
			$stmt->execute();
			$stmt_result = $stmt->get_result();
			if($stmt_result->num_rows>0) 
			{
				$data = $stmt_result->fetch_assoc();
		
				if($data['password'] === $password)
				{
					header("Location: Scorner.php");
				}
				else{
					echo "invalid";
				}
			}else 
				{
					echo "wrong";
					// echo "<script language='javascript'>";
					// echo "alert('WRONG INFORMATION')";
					// echo "</script>";
					// die();
				}
			}
		
?>
