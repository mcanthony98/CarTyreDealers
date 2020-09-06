<?php 
?>



<!doctype html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="css/mystyle.css" rel="stylesheet">
   
  </head>

  <body class="text-center"> 
    <form style="padding-top:50px" class="form-signin" action="processes/register.php" method="POST">
	<img src="images/tyre3.jpg" width="80" height="80">
      <h1 class="h3 mb-3 font-weight-normal"style="font-family:algerian">Please Sign Up</h1>
	  	
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
				
	  <label for="fname" class="sr-only">Full Name or Company Name</label>
      <input type="text" id="fname" class="form-control" name="fname" placeholder="Full Name/Company Name" required autofocus>
	  <br />
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required >
	  <br />
	   <label for="address">Who are you?</label>&nbsp&nbsp&nbsp&nbsp
		<select name="type" required>
		<option value="1">Customer</option>
		<option value="2">Dealer</option>
			 </select>
	  <br/>
	  <br/>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
	  <br />
      <label for="inputcPassword" class="sr-only">Confirm Password</label>
      <input type="password" id="inputcPassword" class="form-control" name="cpass" placeholder="Confirm Password" required>
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name = "signup" >Sign Up</button>
	  <br/>
	  <p>Already a member?&nbsp<a href="login.php">Login</a>&nbsp here. <br/>or<br/>
	  Go <a style="text-align:left" href="index.php">Home</a><p/>
	  <br/>
      
    </form>
  </body>
</html>


