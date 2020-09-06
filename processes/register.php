<?php
	
	require "../includes/connect.php";

	
	if (isset($_POST["signup"])){
	
	$name = mysqli_real_escape_string($pdo, $_POST["fname"]);
	$email = mysqli_real_escape_string($pdo, $_POST["email"]);
	$type = mysqli_real_escape_string($pdo, $_POST["type"]);
	$password = mysqli_real_escape_string($pdo, $_POST["pass"]);
	$cpassword = mysqli_real_escape_string($pdo, $_POST["cpass"]);
	
	if($cpassword != $password){
		
		$err= "Passwords do not match! ";
		header ("Location: ../signup.php?error=$err");
			exit ();
		
	}else{
		    $select_qry = "SELECT * FROM users WHERE email = '$email'";

			$blog_res = $pdo->query($select_qry);
			
    if($blog_res->num_rows == 0){
		$enc_password=md5($password);
	   
	$users_insert = "INSERT INTO users(name, email, password, type) VALUES ('$name', '$email', '$enc_password', '$type' )";
	
		if ($pdo->query($users_insert)==TRUE){
		
		
	header("Location: ../login.php?mes=Account created. Login to start your session.");
	exit();
		
		}else{
		print "Failed <br/>" . $pdo->error;
		}
		}else{
		
		$err= "Email already exists!";
		header ("Location: ../signup.php?em_error=$err");
		exit();
	}
	}
	
	
	}
		
?>