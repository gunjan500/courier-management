<?php include('server1.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="transfer1.css">
</head>
<body>
  <div class="banner">
    <div class="navbar">
        <img src="logo.jpg" alt="" class="logo">
        <ul>
            <!-- <li><a href="flex.html">Home</a></li>
            
            <li><a href="logout.php">Log out</a></li> -->
        </ul>
    </div>
</div>

<!-- dfdfj jdfk hdkfj hgk djh -->
<div class="wrapper">
    <div class="title">
     Pickup Address
    </div>
    <form method="post" action="transfer.php">
      <?php include('errors.php'); ?>
    <div class="form">
       <div class="inputfield">
          <label> Senders Name</label>
          <input type="text" name="n1" class="input">
       </div>  
          
       
         
        <div class="inputfield">
          <label> Senders Email Address</label>
          <input type="email" class="input">
       </div> 
      <div class="inputfield">
          <label> Senders Phone Number</label>
          <input type="number" name="p1" class="input">
       </div> 
      <div class="inputfield">
          <label> Senders Address</label>
          <textarea class="textarea" name="a1"></textarea>
       </div> 
      <div class="inputfield">
          <label> Sender Postal Code</label>
          <input type="number" name="c1" class="input">
       </div> 
          <br>
          <br>
          <br>
       <!-- reciever ends stats -->
       <div class="title">
     Recievers  Address
    </div>
      <div class="inputfield">
        <label>Recievers  Name</label>
        <input type="text"  name="n2" class="input">
     </div>  
       <div class="inputfield">
        <label>Recievers Email Address</label>
        <input type="email" class="input">
     </div> 
    <div class="inputfield">
        <label>Recievers Phone Number</label>
        <input type="number"  name="p2" class="input">
     </div> 
    <div class="inputfield">
        <label>Recievers Address</label>
        <textarea class="textarea" name="a2" ></textarea>
     </div> 
    <div class="inputfield">
        <label >Recievers Postal Code</label>
        <input type="number" name="c2"  class="input">
     </div> 
       
      <div class="inputfield">
        <button type="submit" class="btn" name="reg_user">Register</button>
      </div>
    </div>
   </form>
</div>	
	
</body>
</html>