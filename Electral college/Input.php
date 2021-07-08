	<?php 
	if (isset($_POST['login-submit'])) {
		
		require 'db.php';

	$username = $_POST['user'];
	$id = $_POST['id'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$pwdrepeat = $_POST['pwdrepeat'];

	if (empty($username)||empty($id)||empty($number)||empty($password)||empty($pwdrepeat)) {
		header("location:/login.html?error = emptyfields&user".$username."&id".$id.);

		exit();
		
	}
	elseif ($password!==$pwdrepeat) {
		header("location:/login.html?error = passcheck&user".$username."&id".$id.);
	} 
	else{
		$sql = "SELECT uid_users FROM users WHERE uidUsers =? "
		$stmt = mysqli_stmt_innit($conn);

		if (!mysli_stmt_prepare($stmt,$sql)) {
			header("location:/login.html?error = sqlerror");
		}
		else{
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultcheck = mysqli_stmt_num_rows($stmt);

			}if ($resultcheck>0) {
				header("location:/login.html?error = username or passwordalready in use");
			}
			else{
				$sql = "INSERT INTO users2(uidUsers,numUsers,passUsers) VALUES(?,?,?) "
				$stmt = mysqli_stmt_innit($conn);

		if (!mysli_stmt_prepare($stmt,$sql)) {
			header("location:/login.html?error = sqlerror");
		}
		else{

			$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt,"sss",$username,$number,$hashedpwd);
			mysqli_stmt_execute($stmt);
				header("location:/login.html?signup=successful");
				exit();
		}

			}
		}
	}

	mysqli_stmt_close($stmt);
	mysql_close($conn);


	
	//elseif (!filter_var($id FILTER_VALIDATE_ID) {
		//header("location:/login.html?error = invalid&user".$username."&id".$id."&number".$number.)

		//exit();
	//} no connection to valid id's
	}

	

}
	