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
<?php
if(isset($_GET['user_id'])){
	$id = $_GET['user_id'];
	 $qry = "SELECT * FROM users WHERE user_id= '$id'";
	  $res = $pdo->query($qry);
	$row=$res->fetch_assoc();
	
	 $dealer=$row["user_id"];
			  $dqry = "SELECT * FROM tyres WHERE user_id = '$dealer'";
			  $dres = $pdo->query($dqry);
			  
?>
<main role="main">	
			<div>
			<table  cellpadding="10" cellspacing="1" align="left" width="50%">
		
		<tr>
		   <th  style="text-align:right;" width="10%"></th>
		   <th  style="text-align:left;" width="40%"><h4>Profile:</h4></th>
		   
		</tr>
		
		<tr>
		   <td>Dealer ID: </td>
		   <td><?php print $row["user_id"]; ?></td>
		   
		</tr>
		<tr>
		   <td>Company Name: </td>
		   <td Style="text-transform:capitalize"><?php print $row["name"]; ?></td>
		   
		</tr>
		<tr>
		   <td>City: </td>
		   <td><?php print $row["city"]; ?></td>
		</tr>
		<tr>
		   <td>Location: </td>
		   <td><?php print $row["location"]; ?></td>
		   
		</tr>
		<tr>
		   <td>Email: </td>
		   <td><?php print $row["email"]; ?></td>
		   
		</tr>
		<tr>
		   <td>Phone: </td>
		   <td><?php print $row["phone"]; ?></td>
		   
		</tr>
		
		</table>
		
		
		<table  cellpadding="10" cellspacing="1" align="left" width="50%">
		
		<tr>
		   <th  style="text-align:right;" width="10%"></th>
		   <th  style="text-align:left;" width="40%"><h4>Dealer Tyres:</h4></th>
		   
		</tr>
		<?php
		
		//$drow = $dres->fetch_assoc();
		?>
		<tr>
		   <td><?php //print $drow["manufacturer"] ." ".$drow["type"];?> </td>
		   <td Style="text-transform:capitalize"><a class="btn btn-sm btn-success" href="tyre_view.php?tyre_id=<?php //echo $drow["tyre_id"];?>">View</a></td>
		   
		</tr>
		
		<?php
		}
		
		?>
		
		</table>
			</div>
			</main>
			<br/>
		
		
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>

<?php
}
?>	
		