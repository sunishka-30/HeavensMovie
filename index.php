<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="temp.css">
</head>
<body>

<div class="header">
	<h2>Thanks For Visiting</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
     <?php  if (isset($_SESSION['username'])) : ?> 
    	<p><h2>Welcome</h2> <h3><?php echo $_SESSION['username']; ?></h3></p>
		<br>
		<p> <a href="projecty.html"style="color:black; text-decoration:none; border: 2px solid coral; background:#5f8eba;">Go to Home Page</a> </p>
		<br>
		
    	<p> <a href="index.php?logout='1'"  style="color:black; text-decoration:none; border: 2px solid coral; background:#5f8eba;">Log Out</a> </p>
		
		<!-- home page -->
    <?php endif ?>
</div>
		
</body>
</html>