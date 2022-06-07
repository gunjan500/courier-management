<?php include('aserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="banner">
    <div class="navbar">
        <img src="logo.jpg" alt="" class="logo">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="abtus.html">About us</a></li>
            <li><a href="contact.html">Contact us</a></li>
        </ul>
    </div>
</div>
  <div class="header">
  	<h2> Admin Login</h2>
  </div>
	 
  <form method="post" action="alogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="admin_login">Login</button>
  	</div>
  	
  </form>
</body>
</html>