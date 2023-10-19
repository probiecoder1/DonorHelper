<?php 
	$Name= filter_input(INPUT_POST, 'Name');
	$Email= filter_input(INPUT_POST, 'Email');
	$Phone= filter_input(INPUT_POST, 'Phone');
	$Message= filter_input(INPUT_POST, 'Message');
	
	if(!empty($email)){
		if(!empty($message)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "message";

			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error() {
				die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

			}
			else{
				$sql = "INSERT INTO messages(Name , Email , Phone , Message) values('$Name', '$Email', '$Phone', '$Message')";
				if ($conn->query($sql)){
					echo "Message has been received";
				}
				else{
					echo "Error:". $sql . "<br>". $conn->error;
				}
				$conn->close();
			}
		}
		else{
			echo "Message cannot be blank";
			die();
		}
	}
	else{
		echo "Email is required to verify message";
		die();
	}
?>