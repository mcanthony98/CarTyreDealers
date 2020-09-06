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

<main role="main">
<div style="padding-left:20px">
 <h1 class="jumbotron-heading">My Tyres</h1>
      
        <a href="tyre_add.php" class="btn btn-primary my-2">+ Add New</a>
</div>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
	  <?php
	  $id=$_SESSION['id'];
	  $qry = "SELECT * FROM tyres WHERE dealer= '$id'";
	  $res = $pdo->query($qry);
	  if($res->num_rows > 0){
		  while($row=$res->fetch_assoc()){
	  ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src ="../products/<?php print $row["image"];?>" width="200px" height="200px" alt="Card image cap">
            <div class="card-body">
              <p class="card-text" style="text-transform:capitalize"><?php echo $row["manufacturer"] ." ". $row["type"];?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="tyre_view.php?tyre_id=<?php echo $row["tyre_id"];?>" class="btn btn-sm btn-outline-secondary">View</a>
                  <a  href="tyre_edit.php?tyre_id=<?php echo $row["tyre_id"];?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
                <small class="text-muted"><?php print "Ksh" . $row["price"];?></small>
              </div>
            </div>
          </div>
        </div>
		<?php
		  }
	  }else{
		  ?>
		  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Oops!</h1>
      <p class="lead text-muted">You have no tyres posted on TyreState. Click the button bellow to add new product.</p>
      <p>
        <a href="tyre_add.php" class="btn btn-primary my-2">Add your first Tyre Now</a>
        
      </p>
    </div>
  </section>
		  <?php
	  }
		?>
      </div>
    </div>
  </div>

</main>


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