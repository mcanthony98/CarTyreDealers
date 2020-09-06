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
<h2>Tyres</h2>
<div align="center" style="padding-left:0px;padding-bottom:10px">

<form method="POST" action="#">
<select type="text" name="cat" required>
								<option>Search By?</option> 
								<option value="tyre_id">Tyre Id</option>
								<option value="manufacturer">Manufacturer</option>
								<option value="type">Model</option>
								<option value="price">Price</option>
								<option value="rim">Rim</option>
								<option value="width">Width</option>
								<option value="profile">Profile</option>
								<option value="load_index">Load Index</option>
								<option value="speed_symbol">Speed Symbol</option>
						
				  </select>
<input type="text" name="name" placeholder="search" required>
<button type="submit" class="btn btn-sm btn-success" name="search">Search</button>
</form>
</div>
 <?php if(isset($_GET['mes'])){
			?>
				<p style="background-color:#a6fa91; text-align:center"><?php echo $_GET['mes'];?></p>
				
				<?php 
			}elseif(isset($_GET['error'])){
				?>
				<p style="background-color:red; text-align:center"><?php echo $_GET['error'];?></p>
				
				<?php
			}
				?>
		  
      <div class="table-responsive" style="padding-top:10px">
        <table class="table table-striped table-sm">
          <thead>
            <tr> 

              <th>#</th>
              <th>Tyre Id</th>
              <th>Manufacturer</th>
              <th>Model</th>
              <th>Dealer</th>
              <th>Price</th>
              <th>Rim</th>
              <th>Width</th>
              <th>Profile</th>
              <th>Load<br/> Index</th>
              <th>Speed <br/>Symbol</th>
              <th>Purpose</th>
              <th>Date Uploaded</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
		  
		  <?php
		   if(isset($_POST["search"])){
			  $cat=$_POST["cat"];
			  $search=$_POST["name"];
			  $qry="SELECT * FROM tyres WHERE $cat like '%$search%' ORDER BY tyre_id DESC";
			  
		}else{
		  
		  $qry="SELECT * FROM tyres ORDER BY tyre_id DESC";
		}
          $res = $pdo->query($qry);
          $counter=1;
		  if($res->num_rows > 0){
		  while($row = $res->fetch_assoc()){
			  $dealer=$row["dealer"];
			  $d_qry = "SELECT * FROM users WHERE user_id = '$dealer'";
			  $d_res = $pdo->query($d_qry);
			  $d_row=$d_res->fetch_assoc();
			  
			  $purp=$row["purpose"];
			  $purpqry = "SELECT * FROM purpose WHERE purpose_id = '$purp'";
			  $purpres = $pdo->query($purpqry);
			  $purprow=$purpres->fetch_assoc();
			  
		  ?>
            <tr>
              <td><?php echo $counter;?></td>
              <td><?php echo $row["tyre_id"];?></td>
              <td><?php echo $row["manufacturer"];?></td>
              <td><?php echo $row["type"];?></td>
              <td><?php echo $d_row["name"];?></td>
              <td><?php echo $row["price"];?></td>
              <td><?php echo $row["rim"];?></td>
              <td><?php echo $row["width"];?></td>
              <td><?php echo $row["profile"];?></td>
              <td><?php echo $row["load_index"];?></td>
              <td><?php echo $row["speed_symbol"];?></td>
              <td><?php echo $purprow["purpose"];?></td>
              <td><?php echo $row["date_added"];?></td>
              <td><a class="btn btn-sm btn-success" href="tyre_view.php?tyre_id=<?php echo $row["tyre_id"];?>">View</a>
			  <a class="btn btn-sm btn-danger" href="../processes/tyre_delete.php?tyre_id=<?php echo $row["tyre_id"];?>" role="button" onClick="return confirm('Do you really want to delete?');">Delete</a></td>
            </tr>
			<?php
			$counter++;
		  }
		  }else{
		  print "No data";
		  }
			?>
			
         
          </tbody>
        </table>
		</div>

  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>

<?php
}
?>