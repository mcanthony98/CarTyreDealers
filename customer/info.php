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


<!--NOINDEXPAGEOVERVIEW-->
<section class="page-overview">
    <div class="container">
        <div class="page-heading">
            <div class="row align-items-center">
                <div class="col-md-5">
                            <h1 class=" color-red"><span>How to read your tyre size</span></h1>
                </div>
                <div class="col-md-7">
                        <div class="page-menu">

        
   

                        </div>
                                    </div>
            </div>
        </div>
   
    </div>
</section>



<div id="box-relatedContent">
<div class="page-container-gray" style="background-color: #f1f2f2; padding-bottom: 30px;"><div class="container"><div class="row"><div class="col-md-12"><div class="pnl-wysiwyg"><img style="display: block; margin-left: auto; margin-right: auto; padding-bottom: 30px;" src="../images/understanding-tyre-size-diagram.png" alt="Understanding tyre size" width="860" height="231" /></div></div></div><div class="page-container-gray" style="background-color: #f1f2f2; padding-bottom: 30px;"><div class="container"><div class="row"><div class="pnl-wysiwyg"><div class="col-md-4" style="float: left;"><p class="large"><span class="red large">1. <b>Width</b><br /></span> <strong>205</strong> indicates the section width of a tyre in millimetres.</p><p class="large"><span class="red large">2.<b> Aspect ratio or profile</b><br /></span> <strong>60</strong> is a tyre&rsquo;s aspect ratio or profile which is its height from the base of the tread to the rim. This number represents a percentage of the tread width. For example, the height of this tyre is 60% of its width. Low&nbsp;profile tyres have smaller aspect ratio percentages.</p></div><div class="col-md-4" style="float: left;"><p class="large"><span class="red large">3. <b>Tyre construction</b><br /></span> <strong>R</strong> means that the tyre has radial ply construction, meaning the way in which it has been constructed. Most&nbsp;car tyres are constructed this way so you will rarely find a car tyre without an&nbsp;R.</p><p class="large"><span class="red large">4. <b>Rim</b><br /></span> <strong>15</strong> indicates the diameter of the wheel rim in inches. So&nbsp;if you are buying wheels for existing tyres, this is the size you will require.&nbsp;</p></div><div class="col-md-4" style="float: left;"><p class="large"><span class="red large">5. <b>Load index</b><br /></span> <strong>91</strong> is a code which indicates the maximum load capacity of the tyre. See load index table for car tyre load index ratings.</p><p class="large"><span class="red large">6. <b>Speed symbol</b><br /></span> <strong>V</strong> is a code which indicates the speed at which a tyre can be safely operated, subject to the tyre being in sound condition, correctly fitted and with the recommended inflation pressure. See speed symbol table for&nbsp;car tyre speed symbol&nbsp;ratings.</p></div></div></div></div></div><div class="row"><div class="container" style="margin-bottom: 30px;"><div class="pnl-wysiwyg"><div class="col-md-8" style="float: left;"><p class="red large"><h5>Car tyre load index ratings</h5></p><div class="table-responsive table-tyre-care"><table class="table table-bordered"><tbody><tr><td class="large" style="width: 180px;"><strong class="large">Load index</strong></td><td class="large text-center">81</td><td class="large text-center">82</td><td class="large text-center">85</td><td class="large text-center">86</td><td class="large text-center">87</td><td class="large text-center">88</td><td class="large text-center">90</td><td class="large text-center">92</td><td class="large text-center">95</td><td class="large text-center">96</td></tr><tr><td class="large" style="width: 180px;"><strong class="large">Max load/tyre (kg)</strong></td><td class="large text-center">462</td><td class="large text-center">475</td><td class="large text-center">515</td><td class="large text-center">530</td><td class="large text-center">545</td><td class="large text-center">560</td><td class="large text-center">600</td><td class="large text-center">630</td><td class="large text-center">690</td><td class="large text-center">710</td></tr></tbody></table></div><br/><p class="red large"><h5>Car tyre speed symbol ratings*</h5></p><div class="table-responsive table-tyre-care"><table class="table table-bordered"><tbody><tr><td class="large" style="width: 180px;"><strong class="large">Speed symbol</strong></td><td class="large text-center">N</td><td class="large text-center">P</td><td class="large text-center">Q</td><td class="large text-center">R</td><td class="large text-center">S</td><td class="large text-center">T</td><td class="large text-center">H</td><td class="large text-center">V</td><td class="large text-center">W</td><td class="large text-center">Y</td></tr><tr><td class="large" style="width: 180px;"><strong class="large">Max speed (km/h)</strong></td><td class="large text-center">140</td><td class="large text-center">150</td><td class="large text-center">160</td><td class="large text-center">170</td><td class="large text-center">180</td><td class="large text-center">190</td><td class="large text-center">210</td><td class="large text-center">240</td><td class="large text-center">270</td><td class="large text-center">300</td></tr></tbody></table></div><p class="small">*For a full list of speed symbol ratings, consult your local dealer.</p></div></div></div></div></div></div>        <div class="modal modal-video" id="modalVideo" tabindex="-1" role="dialog">
	<div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <button type="button" class="video-modal-close" data-dismiss="modal" aria-hidden="true">×</button>
                        <div class="col-md-12" id="modalVideoBody">
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
    </div>


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