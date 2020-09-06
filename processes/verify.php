<?php
session_start();
include("../includes/connect.php"); 
 
if(isset($_POST["signin"])){
	if(empty($_POST["email"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];
$password = md5($password);

$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
$result=mysqli_query($pdo,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1)
{
		$_SESSION["email"] = $email; // Initializing Session;
		$_SESSION["id"] = $row["user_id"]; // Initializing Session;
		$_SESSION["type"] = $row["type"];
		$_SESSION["name"] = $row["name"];
		
		if($row["type"] == 1){
			$_SESSION["customer"] = $row["type"];
		header("location: ../customer/home.php"); 
		exit();
		}elseif($row["type"] == 2){
			$_SESSION["dealer"] = $row["type"];
		header("location: ../dealer/home.php"); 
		exit();
		}elseif($row["type"] == 0){
			$_SESSION["admin"] = $row["type"];
		header("location: ../admin/home.php"); 
		exit();
		}
}else
      {
$error = "Incorrect email or password.";
header("location: ../login.php?error=$error");
exit();
}
}
}



?>