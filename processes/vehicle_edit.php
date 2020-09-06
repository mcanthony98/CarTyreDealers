<?php
  session_start();
include("../includes/connect.php");
	
	if (isset($_POST["vehicle_edit"])){
		
	
		$manu = mysqli_real_escape_string($pdo, $_POST["manu"]);
		$model = mysqli_real_escape_string($pdo, $_POST["model"]);
		$rim = mysqli_real_escape_string($pdo, $_POST["rim"]);
		$weight = mysqli_real_escape_string($pdo, $_POST["weight"]);
		$speed = mysqli_real_escape_string($pdo, $_POST["speed"]);
		$vehicle_id = mysqli_real_escape_string($pdo, $_POST["vehicle_id"]);
		
			
		$products_insert = "UPDATE vehicles SET manufacturer = '$manu', model = '$model', rim = '$rim', weight = '$weight', speed = '$speed' WHERE vehicle_id = $vehicle_id" ;
		
		
		if ($pdo->query($products_insert)===TRUE){
		
		$msg="Vehicle Updated Successfully!";
		header ("Location: ../admin/vehicle_edit.php?mes=$msg&vehicle_id=$vehicle_id");
		exit();
		
	}else{
		$err= "Failed to Update tyre <br/>" . $pdo->error;
		header ("Location: ../admin/vehicle_edit.php?error=$err&tyre_id=$tyre_id");
		exit();
	}
	
    }

	
	
?>