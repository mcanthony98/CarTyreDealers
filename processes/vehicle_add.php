<?php
  session_start();
include("../includes/connect.php");
	
	if (isset($_POST["vehicle_add"])){
		$error="";
		
		
		$manu = mysqli_real_escape_string($pdo, $_POST["manu"]);
		$model = mysqli_real_escape_string($pdo, $_POST["model"]);
		$rim = mysqli_real_escape_string($pdo, $_POST["rim"]);
		$weight = mysqli_real_escape_string($pdo, $_POST["weight"]);
		$speed = mysqli_real_escape_string($pdo, $_POST["speed"]);		
				
		
		$products_insert = "INSERT INTO vehicles(manufacturer, model, rim, weight, speed) VALUES ('$manu', '$model', '$rim','$weight', '$speed')";
		
		
		if ($pdo->query($products_insert)===TRUE){
		
		$msg="Vehicle Added Successfully!";
		header ("Location: ../admin/vehicle_add.php?mes=$msg");
		exit();
		
	}else{
		$err= "Failed to post tyre <br/>" . $pdo->error;
		header ("Location: ../admin/vehicle_add.php?error=$err");
		exit();
	}
	
    }

	
	
?>