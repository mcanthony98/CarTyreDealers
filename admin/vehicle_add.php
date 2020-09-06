<?php
session_start();
include("../includes/connect.php");
if(!isset($_SESSION['admin'])){
header("location: ../login.php?error=You need to be logged in!");
}else{
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TryeState</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>TyreState</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="home.php">Dashboard</a>
    <a class="py-2 d-none d-md-inline-block" href="tyres.php">Tyres</a>
    <a class="py-2 d-none d-md-inline-block" href="vehicles.php">Vehicles</a>
    <a class="py-2 d-none d-md-inline-block" href="company.php">Dealers</a>
    <a class="py-2 d-none d-md-inline-block" href="customers.php">Customers</a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"><?php print $_SESSION['name'];?></a>
    <a class="py-2 d-none d-md-inline-block" href="../processes/logout.php">Logout</a>
  </div>
</nav>

<main role="main">
<div style="padding-left:20px">
 <h1 class="jumbotron-heading">Add New</h1>
</div>	

<div class="text-cente" style="margin-left:100px;margin-right:500px">
<form style="padding-top:50px" class="form-signin" action="../processes/vehicle_add.php" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
	
	  	
				 <?php if(isset($_GET['mes'])){
			?>
				<p style="background-color:#a6fa91; text-align:center"><?php echo $_GET['mes'];?></p>
				
				<?php 
			}elseif(isset($_GET['error'])){
				?>
				<p style="background-color:red; text-align:center"><?php echo $_GET['error'];?></p>
				
				<?php
			}elseif(isset($_GET['em_error'])){
				?>
				<p style="background-color:red; text-align:center"><?php echo $_GET['em_error'];?></p>
				
				<?php
			}
				?>
				<?php
				$qry = "SELECT * FROM purpose ";
				$res = $pdo->query($qry);
								
				?>
	  
      <input type="text"  class="form-control" name="manu" placeholder="Manufacturer" required autofocus>
	  <br />
      <input type="text"  class="form-control" name="model" placeholder="Model" required >
	  <br/>
	  <input type="number"  class="form-control" name="weight" placeholder="Weight in kg" required >
	  <br/>
	  <input type="number"  class="form-control" name="speed" placeholder="Speed in Km/h" required >
	  <br/>
	  <input type="number"  class="form-control" name="rim" placeholder="Rim in inches" required >
	  
	  <br/>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name = "vehicle_add" >Add New</button>
	  <br/>
    </form>
</div>




 <hr class="featurette-divider">
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Email: Dalton.omondi@strathmore.edu<br/>Phone: +254714802426</span>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>

<?php
}
?>