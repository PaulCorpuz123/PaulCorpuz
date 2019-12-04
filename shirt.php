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
 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
  
<div class="container">
 



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
  
    
</div>
		
    <div class="container">
    <html>
<head>
	<title>Add Data</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
<style type="text/css">
body{
  background-image:url(wall1.jpg);
}
	

</style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a href="index.php">Home</a></li>
    <li><a href="short.php">Mens Short</a></li>
     <li><a href="shirt.php">Mens T-shirt</a></li>
       <li><a href="#"> View Order</a></li>
     

  </ul>
  <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
</nav><div class="row">
  <div class="col-sm-4"> <img src="pic1.jpg"  height="200" width="200">
  <a href="#">Buy Now</a></div>
  <div class="col-sm-4"><img src="pic2.jpg"  height="200" width="200">
  <a href="#">Buy Now</a></div>
  <div class="col-sm-4"><img src="pic3.jpg"  height="200" width="200">
  <a href="#">Buy Now</a></div>
</div>


</body>
</html>



<?php 
   

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
