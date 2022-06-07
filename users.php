<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="user1.css">
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
<div class="header">
            Track Your Order Using Tracking Id 
</div>

    
        <form action=""  method="get">
        <div class="row">
            <input type="text" name="tracking_id" value="<?php if(isset($_get['stud_id'])){echo $_get['stud_id'];}  ?>">
        </div>
        
            <button type="submit" class="btn">search</button>
        
        

        </form>
        <div class="content">
        
             <?php
                $db = mysqli_connect('localhost', 'root', '', 'tours');
                if(isset($_GET['tracking_id']))
                    {
                        $tracking_id = $_GET['tracking_id'];
                        $query = "SELECT * from visaid WHERE tracking_id='$tracking_id'";
                        $query_run = mysqli_query($db, $query);

                        if(mysqli_num_rows($query_run) >0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                
                                <div class="input-group">
                    <label for="">order statsus</label>
                    <input type="text" name="order_status" value="<?= $row['order_status']; ?>" >
                    </div>
                    <div class="input-group">
                    <label for="">senders name</label>
                    <input type="text" name="n1" value="<?= $row['n1']; ?>" >
                    </div>
                    <div class="input-group">
                    <label for="">sender phone no.</label>
                    <input type="text" name="p1" value="<?= $row['p1']; ?>" >
                    </div>
                    <div class="input-group">
                    <label for="">address</label>
                    <input type="text" name="a1" value="<?= $row['a1']; ?>" >
                    </div>
                    <div class="input-group">
                    <label for="">pincode</label>
                    <input type="text" name="c1" value="<?= $row['c1']; ?>" >
                    </div>
                    <div class="input-group">
                    <label for="">r name</label>
                    <input type="text" name="n2" value="<?= $row['n2']; ?>" >
                    </div>
                    <div class="input-group">
                    <label for="">r ph</label>
                    <input type="text" name="p2" value="<?= $row['p2']; ?>" >
                    </div>
                    <div class="input-group">
                    <label for="">r add</label>
                    <input type="text" name="a2" value="<?= $row['a2']; ?>" >
                    </div>
                    <div class="input-group">
                    <label for="">r pincode</label>
                    <input type="text" name="c2" value="<?= $row['c2']; ?>" >
                    </div>
                    
                                <?php
                                
                            }
                        }
                        else{
                            echo "nothing";
                        }
                    }
             ?>




                
                    
                  
            
    </div>
</body>
</html>