<?php 

	session_start();

	if((!isset($_POST['login'])) || (!isset($_POST['password']))){
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$connection = @new mysqli($host, $db_user, $db_password, $db_name);

	if($connection->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno." Opis: ".$polaczenie->connect_error;
	}
	else{
		$login = $_POST['login'];
		$password = $_POST['password'];

		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");

		$sql = "SELECT * FROM users WHERE user='$login' AND pass='$password'";
		
		if($result = @$connection->query(
			sprintf("SELECT * FROM users WHERE user='%s' AND pass='%s'",
			mysqli_real_escape_string($connection,$login),
			mysqli_real_escape_string($connection,$password)
			))){
				
			$user_count = $result->num_rows;
			if($user_count>0){
				$_SESSION['logged'] = true;
				$row = $result->fetch_assoc();
				$_SESSION['id'] = $row['id'];
				$_SESSION['user'] = $row['user'];

				unset($_SESSION['blad']);
				$result->free_result();
				header('Location: panel.php');
			} else {
				$_SESSION['blad'] = '<span style="color:red; font-size: 16px;">Nieprawidłowy login lub hasło</span>';
				header('Location: login.php');
			}
		}

		$connection->close();
	}
	
?>