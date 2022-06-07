<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <centre>
        <h3>Please enter your booking id to know your booking details</h3>
    <div class="container">?
        <form action="" method="POST">
            <input type="text" name="tracking_id" placeholder="Enter your Booking_id">
            <input type="Submit" name="search"  class = "btn" value="Search by id">
</form>
<table class="table">
  
  <?php
 
  $db=mysqli_connect("localhost","root","",'tours');

  if(isset($_POST['search']))
  {
      $booking_id=$_POST['tracking_id'];

      $query="SELECT*FROM luck where tracking_id='$tracking_id' ";
      $query_run=mysqli_query($db,$query);
       
     
          ?>
          <thead>
    <tr>
      <th scope="col">Order status</th>
      <th scope="col">Senders name</th>
      <th scope="col">Recievers name</th>
      <th scope="col">Recievers phone no.</th>
      <th scope="col">Recievers address</th>
      <th scope="col">Recievers postal code</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
         if(mysqli_num_rows($query_run)>0)
     
         {
           while($row=mysqli_fetch_array($query_run))
         
           {
    ?>
          <tr>
              <td> <?php echo $row['order_status'];?></td>
              <td> <?php echo $row['n1'];?></td>
              <td> <?php echo $row['n2'];?></td>
              <td> <?php echo $row['p2'];?></td>
              <td> <?php echo $row['a2'];?></td>
              <td> <?php echo $row['c2'];?></td>
              
      </tr>
      <?php
      }
    }

  }
  ?>
</table>
               
</body>
</html>