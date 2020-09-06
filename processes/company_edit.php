<?php
  session_start();
include("../includes/connect.php");
	
	if (isset($_POST["company_edit"])){
		$error="";
		
       
		
		$name = mysqli_real_escape_string($pdo, $_POST["name"]);
		$city = mysqli_real_escape_string($pdo, $_POST["city"]);
		$email = mysqli_real_escape_string($pdo, $_POST["email"]);
		$location = mysqli_real_escape_string($pdo, $_POST["location"]);
		$phone = mysqli_real_escape_string($pdo, $_POST["phone"]);
		
		$id = $_SESSION['id'];
		
		
			
		$products_insert = "UPDATE users SET name = '$name', email = '$email', city = '$city', location = '$location', phone = '$phone' WHERE user_id = $id" ;
		
		
		if ($pdo->query($products_insert)===TRUE){
		
		$msg="Company Info Updated Successfully!";
		header ("Location: ../dealer/company_edit.php?mes=$msg");
		exit();
		
	}else{
		$err= "Failed to Update tyre <br/>" . $pdo->error;
		header ("Location: ../dealer/tyre_edit.php?error=$err");
		exit();
	}
	
    }

	
	
?>