<?php
  session_start();
include("../includes/connect.php");
	
	if (isset($_POST["tyre_add"])){
		$error="";
		
        $image = $_FILES['photos']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
		
		$manu = mysqli_real_escape_string($pdo, $_POST["manu"]);
		$type = mysqli_real_escape_string($pdo, $_POST["type"]);
		$rim = mysqli_real_escape_string($pdo, $_POST["rim"]);
		$width = mysqli_real_escape_string($pdo, $_POST["width"]);
		$profile = mysqli_real_escape_string($pdo, $_POST["profile"]);
		$load_index = mysqli_real_escape_string($pdo, $_POST["load_index"]);
		$speed_symbol = mysqli_real_escape_string($pdo, $_POST["speed_symbol"]);
		$purpose = mysqli_real_escape_string($pdo, $_POST["purpose"]);
		$price = mysqli_real_escape_string($pdo, $_POST["price"]);
		$id = $_SESSION['id'];
		
		
	// print_r($_FILES["photos"]);
	
	$file_name = $_FILES["photos"]["name"];
	$_FILES["photos"]["type"];
	$tmp_file = $_FILES["photos"]["tmp_name"];
		
		$destination = "../products/" . $file_name;
			
		
		move_uploaded_file($tmp_file, $destination);
			
		
		$products_insert = "INSERT INTO tyres(manufacturer, type, rim, width, profile, load_index, speed_symbol, image, purpose, price, dealer) VALUES ('$manu', '$type', '$rim','$width','$profile','$load_index', '$speed_symbol', '$file_name', '$purpose', '$price', '$id' )";
		
		
		if ($pdo->query($products_insert)===TRUE){
		
		$msg="Tyre Posted Successfully!";
		header ("Location: ../dealer/tyre_add.php?mes=$msg");
		exit();
		
	}else{
		$err= "Failed to post tyre <br/>" . $pdo->error;
		header ("Location: ../dealer/tyre_add.php?error=$err");
		exit();
	}
	
    }

	
	
?>