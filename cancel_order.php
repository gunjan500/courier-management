<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home1.css" rel="stylesheet">
    <title>Cancellation</title>
</head>

<body>
    <div class="navbar">
        <img src="logo.jpg" alt="" class="logo">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="abtus.html">About us</a></li>

        </ul>
    </div>
    <div class="input-group">
        <div class="1">
            <h1>Please Enter your phone number</h1>
        </div>
        <div class="2">
            <form action="" method="POST">
                <input type="integer" name="p1" placeholder="Enter your phone number">
                <input type="submit" name="search" class="3" value="search by phone number">
            </form>
        </div>
    </div>
    <table class="">
        <thead>
            <tr>
                <th>Sender's Name</th>
                <th>Sender's phone number</th>
                <th>Sender's address</th>
                <th>Reciever's Name</th>
                <th>Reciever's phone number</th>
                <th>reciever's address</th>
                <th>Tracking id</th>
                <th>Order Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $connection= mysqli_connect('localhost','root','','tours')
            $query= "SELECT * FROM order_reg WHERE p1='$p1";
            $query_run= mysqli_query($connection,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                foreach($query_run as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $row['n1'];?></td>
                        <td><?php echo $row['p1'];?></td>
                        <td><?php echo $row['a1'];?></td>
                        <td><?php echo $row['n2'];?></td>
                        <td><?php echo $row['p2'];?></td>
                        <td><?php echo $row['a3'];?></td>
                        <td><?php echo $row['tracking_id'];?></td>
                        <td><?php echo $row['order_status'];?></td>
                        <td><form action="cancel_table.php" method="POST">
                                <input type="hidden" name="cancel1" value="<?php echo $row['tracking_id'];?>">
                                <input type="hidden" name="os" value="<?php echo $row['order_status'];?>">
                                <button type="submit" name="cancel_btn" class="4">CANCEL</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
            }
            else{
                ?>
                    <tr>
                        <td>No records found</td>
                    </tr>
                    <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>