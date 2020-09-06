<?php
session_start();
include("../includes/connect.php"); 

if(isset($_GET['user_id'])){
	
	$id = $_GET['user_id'];
	
	$qry = "delete from users where user_id=$id";
    $res = $pdo->query($qry);

if($res === TRUE){
	$mes = "Deletion successfull!";
	header("location: ../admin/company.php?mes=$mes");
	exit();
}else
      {
$error = "Operation failed" . $pdo->error;
header("location: ../admin/company.php?error=$error");
exit();
}	
	
}
if(isset($_GET['customer_id'])){
	
	$id = $_GET['customer_id'];
	
	$qry = "delete from users where user_id=$id";
    $res = $pdo->query($qry);

if($res === TRUE){
	$mes = "Deletion successfull!";
	header("location: ../admin/customers.php?mes=$mes");
	exit();
}else
      {
$error = "Operation failed" . $pdo->error;
header("location: ../admin/customers.php?error=$error");
exit();
}	
	
}


?>