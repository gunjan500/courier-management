<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>ADMIN LOGIN</title>
  <link rel="stylesheet" type="text/css" href="adminloginstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="adminlogin.php">
  	<?php include('adminerrors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="adminregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>