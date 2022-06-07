<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home1.css" rel="stylesheet">
    <title>employee login</title>
</head>
<body>
    <div class="navbar">
        <img src="logo.jpg" alt="" class="logo">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="abtus.html">About us</a></li>

        </ul>
    </div>
    <div class="banner">
        <div class="content">
            <centre></centre>
            <h1>Please Enter Your Employee ID</h1>
           <div>
               <form action="" method="post">
                   <input type="integer" name="employee id" placeholder="enter your employee id">
                   <input type="submit" name="search" class="1234" value="search by employee id">
                   d-partner=random(10,15)
               </form>
           </div> 
           <div class="1234">
               <table class="1234">
                   <?php
                   $db=mysqli_connect("localhost","root","","tours");
                   if(isset($_POST['search']))
                   $employee_id=$_POST['employee_id'];
                   $query="SELECT * from order_reg where employee_id='$employee_id'";
                   $query_run=mysqli_query($db,$query);
                   ?>
                   <table class="">
                   <thead>
                       <tr>
                           <th>Tracking ID </th>
                           <th>Name</th>
                           <th>Phone Number</th>
                           <th>Estimated Price</th>
                           <th>Address</th>
                       </tr>
                   <tbody>
                       <?php
                       if(mysql_num-rows($query_run)>0)
                    {
                           while($row=mysql_fetch_array($query_run))
                       {      
                     ?>
                     <tr>
                         <td><?php echo $row[tracking_id];?></td><?php echo $row[tracking_id];?></td>
                         <td><?php echo $row[n1];?></td>
                         <td><?php echo $row[p1];?></td>
                         <td><?php echo $row[price];?></td>
                         <td><?php echo $row[a1];?></td>
                    </tr>
                    <?php
                       }

                    }
                    ?>
                    </tbody>
                </table>
                
        </div>
    </div>
</body>
</html>
                