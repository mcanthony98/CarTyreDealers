<?php
session_start();
include("../includes/connect.php"); 

if(isset($_GET['tyre_id'])){
	
	$id = $_GET['tyre_id'];
	
	$qry = "delete from tyres where tyre_id=$id";
    $res = $pdo->query($qry);

if($res === TRUE){
	$mes = "Deletion successfull!";
	header("location: ../admin/tyres.php?mes=$mes");
	exit();
}else
      {
$error = "Operation failed" . $pdo->error;
header("location: ../admin/tyres.php?error=$error");
exit();
}	
	
}


?>