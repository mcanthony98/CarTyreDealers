<?php 
?>



<!doctype html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="css/mystyle.css" rel="stylesheet">
   
  </head>

  <body class="text-center"> 
    <form style="padding-top:50px" class="form-signin" action="processes/verify.php" method="POST">
	<img src="images/tyre3.jpg" width="80" height="80">
      <h1 class="h3 mb-3 font-weight-normal"style="font-family:algerian">Sign in</h1>
	  	
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
				
	  
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
	  <br />
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
	 
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name = "signin" >Sign Up</button>
	  <br/>
	  <p>Not a member yet?&nbsp<a href="signup.php">Register</a>&nbsp here. <br/>or<br/>
	  Go <a style="text-align:left" href="index.php">Home</a><p/>
	  <br/>
      
    </form>
  </body>
</html>





</body>
</html>
