<?php
session_start();
include("../includes/connect.php");
if(!isset($_SESSION['dealer'])){
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
    <a class="py-2 d-none d-md-inline-block" href="home.php">Home</a>
    <a class="py-2 d-none d-md-inline-block" href="products.php">My Tyres</a>
    <a class="py-2 d-none d-md-inline-block" href="vehicles.php">Vehicles</a>
    <a class="py-2 d-none d-md-inline-block" href="company.php">My Company</a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"><?php print $_SESSION['name'];?></a>
    <a class="py-2 d-none d-md-inline-block" href="../processes/logout.php">Logout</a>
  </div>
</nav>
<?php
if(isset($_GET['tyre_id'])){
	$id = $_GET['tyre_id'];
	 $qry = "SELECT * FROM tyres WHERE tyre_id= '$id'";
	  $res = $pdo->query($qry);
	$row=$res->fetch_assoc();
?>
<main role="main">

	  <table  cellpadding="10" cellspacing="1" align="right" width="65%">
		
		<tr>
		   <th  style="text-align:right;" width="10%"></th>
		   <th  style="text-align:right;" width="71%"></th>
		</tr>
		
		<tr>
		   <td>Manufacturer: </td>
		   <td><?php print $row["manufacturer"]; ?></td>
		</tr>
		<tr>
		   <td>Tyre Type: </td>
		   <td><?php print $row["type"]; ?></td>
		</tr>
		<tr>
		   <td>Rim Size: </td>
		   <td><?php print $row["rim"]; ?></td>
		</tr>
		<tr>
		   <td>Width: </td>
		   <td><?php print $row["width"]; ?></td>
		</tr>
		<tr>
		   <td>Profile: </td>
		   <td><?php print $row["profile"]; ?></td>
		</tr>
		<tr>
		   <td>Load Index: </td>
		   <td><?php print $row["load_index"]; ?></td>
		</tr>
		<tr>
		   <td>Speed Symbol: </td>
		   <td><?php print $row["speed_symbol"]; ?></td>
		</tr><tr>
		   <td>Purpose: </td>
		   <td><?php print $row["purpose"]; ?></td>
		</tr><tr>
		   <td>Price: </td>
		   <td><?php print $row["price"]; ?></td>
		</tr>
		<tr>
		   <td>Upload Date: </td>
		   <td><?php print $row["date_added"]; ?></td>
		</tr>
		<tr>
		   <td></td>
		   <td></td>
		</tr>
		<tr>
		   <td></td>
		   <td></td>
		   
		</tr>
		</table>
		
		  
			<div style="margin-bottom:250px">
			<h2 style="text-transform:capitalize"><?php print $row['manufacturer'] ." ". $row['type']?></h2>
			<img  src ="../products/<?php print $row["image"];?>" width="250px" height="200px" alt="Card image cap" ></div>
			<div  align="center" style="padding-top:10px; padding-bottom:10px; background-color:rgba(0,0,0,.05)">
			<a class="btn btn-success btn-lg" href="tyre_edit.php?tyre_id=<?php print $id;?>" role="button">Edit Product</a> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a class="btn btn-lg btn-success" href="products.php" role="button">Back to My Tyres</a><br/><br/>
			
			</div>
       
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
}
?>