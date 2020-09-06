
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
<div style="background-image:url('../images/bg4.jpg');background-size:100%">
<div style="color:black;text-align:left;padding-top:50px;padding-left:10px;font-family:bodoni mt black">
<h1><h1 >TyreState</h1></h1>
<h4>Solution to all your tyre needs.</h4>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<div style="padding-left:90px;padding-top:20px">
<img  src="../images/tyre1.jpg"width="250" height="250">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img  src="../images/tyre6.jpg"width="250" height="250">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img  src="../images/tyre3.jpg"width="250" height="250">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img  src="../images/tyre2.jpeg"width="230" height="230">
</div><br/>
<hr class="featurette-divider">
  <div class="row featurette" style="padding-top:0px">
          <div class="col-md-6" style="padding-left:50px">
            <h2 class="featurette-heading">Variety of Tyres. <span class="text-muted"></span></h2>
            <p class="lead">We offer a wide variety of Tyres as per manufacturers.</p>
            <div><a class="btn btn-lg btn-primary" href="tyres.php">See what we have now</a>
			</p>
			
		  </div>
		  </div>
		  
		  
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="../images/tyre7.jpg" alt="Generic placeholder image" width="400px" height="400px">
          </div>
       </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-6 order-md-2" style="padding-right:50px">
            <h2 class="featurette-heading">Best Decision. <span class="text-muted"></span></h2>
            <p class="lead">We help decide on the best tyres for your car.All you need to do is type your car model!</p>
           <div><a class="btn btn-lg btn-primary" href="tyres.php">Search tyres for your vehicle</a>
			</p>
			
		  </div>		
			</div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="../images/bg5.jpg" alt="Generic placeholder image" width="500px" height="500px" style="padding-left:50px">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-6" style="padding-left:50px">
            <h2 class="featurette-heading">Tyre Prices. <span class="text-muted">Do you know the prices of tryes in different dealers? </span></h2>
            <p class="lead">You can compare prices of tyres among multiple dealers.</p>
           <div><a class="btn btn-lg btn-primary" href="dealers.php">See Dealers</a>
			</p>
			
		  </div>
		  </p>
		  </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="../images/tyre8.jpg" alt="Generic placeholder image" width="500px" height="500px">
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
?>