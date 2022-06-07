<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="su.css">
    <title>Success</title>
</head>
<body> 
<div class="banner">
    <div class="navbar">
        <img src="logo.jpg" alt="" class="logo">
        <ul>
            <li><a href="flex.html">Home</a></li>
            
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </div>
</div>

 <div class="contentee">
    <div class="fl1">
    
 <img class="abc" src="patrick.gif"></div><br><br><br><br>

<!-- djbgfdkjsgkjdfnkjg kj nkj f -hgf -hg-- -->
    <div class="fl1">
    <div class="header">
           <p> Please enter reciever's phone number to get your tracking id</p>
    </div>
   <form action=""  method="get">
        <div class="input-group">
            <input type="text" name="p2" value="<?php if(isset($_get['stud_id'])){echo $_get['stud_id'];}  ?>">
        </div>
        
            <button type="submit" class="btn">search</button>
        
        

        </form>
        
        <div class="content">
        
             <?php
                $db = mysqli_connect('localhost', 'root', '', 'tours');
                if(isset($_GET['p2']))
                    {
                        $p2 = $_GET['p2'];
                        $query = "SELECT * from order_reg WHERE p2='$p2'";
                        $query_run = mysqli_query($db, $query);

                        if(mysqli_num_rows($query_run) >0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                
                                <div class="input-group">
                    <label for="">Tracking-ID</label>
                    <input type="text" name="tracking_id" value="<?= $row['tracking_id']; ?>" >
                    </div>
                    </div>
                    
                                <?php
                                
                            }
                        }
                        else{
                            echo "phone number is wrong";
                        }
                    }
             ?>

 </div>
</body>
</html>