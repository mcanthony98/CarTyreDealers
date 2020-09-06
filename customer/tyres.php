<?php
session_start();
include("../includes/connect.php");
if(!isset($_SESSION['customer'])){
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
    <a class="py-2 d-none d-md-inline-block" href="tyres.php">Find Tryes</a>
    <a class="py-2 d-none d-md-inline-block" href="dealers.php">Dealers</a>
    <a class="py-2 d-none d-md-inline-block" href="info.php">Tyre Info</a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"><?php print $_SESSION['name'];?></a>
    <a class="py-2 d-none d-md-inline-block" href="../processes/logout.php">Logout</a>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
		<li class="nav-item">
              <span data-feather="layers"></span>
              <u>Search Criteria</u>
          </li>
		  <br/>
		  <li class="nav-item">
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
			<br/>
			<input class="form-control  custom-select" name="name" required >
			<button class="btn btn-sm btn-success" name="car" type="submit" >Search</button>
			</form>
          </li>
		  <br/>
          <li class="nav-item">
              <span data-feather="home"></span>
              <u>Car Type</u> <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tyres.php?car=1">
              <span data-feather="file"></span>
              > Car
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tyres.php?car=2">
              <span data-feather="shopping-cart"></span>
              > Light Van
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tyres.php?car=3">
              <span data-feather="users"></span>
              > SUV & 4x4
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tyres.php?car=4">
              <span data-feather="bar-chart-2"></span>
              > Buses & Trucks
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
            </a>
          </li>
          
        </ul>

       </div>
    </nav>
 <div class="container" >
        <h2 class="red">Find Tyres</h2>
        <div style="background-color:#DEDCDB;padding-left:100px;padding-right:100px"class="grey-box">
            <h5>Select your size below to get prices</h5>
            <div id="tsl-size-dropdownlists" data-url="/Api/TyreSelector/TyreSearchLandingSizeDropDownLists" data-tyre-search-landing-url="/tyre-size-finder">
<form class="needs-validation" method="POST" action="#" novalidate>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group float-label-control">
                <input class="form-control custom-select" name="width" id="tslTyreWidth" data-select="tyre-diagram-width" required >
                <label for="tslTyreWidth">Width</label>
                <div class="invalid-feedback">
                    Please choose width
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group float-label-control">
                <input class="form-control custom-select" name="profile" id="tslTyreWidth" data-select="tyre-diagram-width" required >
                <label for="tslTyreAspectRatio">Profile</label>
                <div class="invalid-feedback">
                    Please choose aspect
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group float-label-control">
                <input class="form-control custom-select" name="rim" id="tslTyreWidth" data-select="tyre-diagram-width" required >
                <label for="tslRimDiameter">Rim</label>
                <div class="invalid-feedback">
                    Please choose rim
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group float-label-control">
                <select class="form-control custom-select opional" name="load_index" id="tslLoadIndex" data-select="tyre-diagram-load" >
                    <option value="81">81</option>
                    <option value="82">82</option>
                    <option value="85">85</option>
                    <option value="86">86</option>
                    <option value="87">87</option>
                    <option value="88">88</option>
                    <option value="90">90</option>
                    <option value="92">92</option>
                    <option value="95">95</option>
                    <option value="96">96</option>
                </select>
                <label for="tslLoadIndex">Load Index</label>
                <div class="invalid-feedback">
                    Please choose load
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group float-label-control">
                <select class="form-control custom-select opional" name="speed" id="tslSpeedIndexId" data-select="tyre-diagram-speed" >
                    <option value="N">N</option>
                    <option value="P">P</option>
                    <option value="Q">Q</option>
                    <option value="R">R</option>
                    <option value="S">S</option>
                    <option value="T">T</option>
                    <option value="H">H</option>
                    <option value="V">V</option>
                    <option value="W">W</option>
                    <option value="Y">Y</option>
                </select>
                <label for="tslSpeedIndexId">Speed</label>
                <div class="invalid-feedback">
                    Please choose speed
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <button class="btn btn-lg btn-primary" name="search" type="submit" >Get Prices</button>
        </div>
    </div>
</form>
        
            </div>
        </div>
		
	 <?php
		   if(isset($_GET["car"])){
			  $search=$_GET["car"];
			  if($_GET["car"] == 1){
				  $qry="SELECT * FROM tyres WHERE load_index<87 AND purpose<>1 ORDER BY tyre_id ASC";
			  }elseif($_GET["car"] == 2){
				  $qry="SELECT * FROM tyres WHERE load_index<91 AND load_index>81 AND purpose<>1 ORDER BY tyre_id ASC";
			  }elseif($_GET["car"] == 3){
				  $qry="SELECT * FROM tyres WHERE load_index<91 AND load_index>81 AND purpose<>2 ORDER BY tyre_id ASC";
			  }elseif($_GET["car"] == 4){
				  $qry="SELECT * FROM tyres WHERE load_index>90 AND purpose<>2 ORDER BY tyre_id ASC";
			  }
		   }elseif (isset($_POST["car"])){
			  $cat=$_POST["cat"];
			  $search=$_POST["name"];
			  $qry="SELECT * FROM tyres WHERE $cat like '%$search%' ORDER BY tyre_id DESC";
			  
		   } elseif(isset($_POST['search'])){
			   $width=$_POST['width'];
			   $profile=$_POST['profile'];
			   $rim=$_POST['rim'];
			   $load_index=$_POST['load_index'];
			   $speed=$_POST['speed'];
			   
			    $qry="SELECT * FROM tyres WHERE width like '%$width%' AND profile like '%$profile%' AND rim like '%$rim%' AND load_index like '%$load_index%' AND speed_symbol like '%$speed%' ORDER BY tyre_id ASC";
			  
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
		
   <hr/>
    <div class="row mb-3">
    <div class="col-12 col-sm-6 col-lg-8 themed-grid-col">
	<h4 style="text-transform:capitalize"><?php echo $row["manufacturer"]." ". $row["type"];?></h4>
	<b>Tyre:</b> <?php echo $row["width"]."/". $row["profile"]."R".$row["rim"]." ".$row["load_index"].$row["speed_symbol"] ;?>  <br/><br/>
	<b>Good for:</b> <?php echo $purprow["purpose"];?><br/><br/>
	<b>Dealer:</b> <?php echo $d_row["name"];?> <br/><br/>
	<a class="btn btn-primary btn-sm"href="tyre_view.php?tyre_id=<?php print $row["tyre_id"] ;?>">View Full Trye Details</a>
	<a class="btn btn-primary btn-sm"href="company_view.php?user_id=<?php print $dealer;?>">View Dealer Details</a>
	
	</div>
    <div class="col-6 col-lg-4 themed-grid-col"><img src="../products/<?php echo $row["image"];?>" width="200" height="200"></div>
  </div>
		<hr/>
		
		
		<?php
			$counter++;
		  }
		  }else{
		  print "No data";
		  }
			?>
			
		




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>

<?php
}
?>