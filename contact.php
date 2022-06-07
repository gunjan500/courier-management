<?php include('acontact.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="contact1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="logo.jpg" alt="" class="logo">
            <ul>
                <li><a href="home.html">Home</a></li>
                
                <li><a href="abtus.html">About us</a></li>
            </ul>
        </div>
    </div>

    <!-- jgfdsjkgjsk -->

    <div class="contact-title">
          <h1> Connect with us</h1>
          <h2> Feel free to get in touch with us</h2>
    </div>
    <div class="contact-form">
        <form  method="post" action="contact.php" id="contact-form">
       
            <input type="text" name="n" placeholder="Your name"  class="form-control" required>
            <br>
            <input type="email" name="e" placeholder="Your Email"  class="form-control" required> 
            <br>
            <textarea name="m" class="form-control" placeholder="Message" rows="4" required></textarea>
            <br>
            
                <button type="submit" class="btn" name="reg_user">SUBMIT</button>
             
          


        </form>
    </div>
        
</body>
</html>