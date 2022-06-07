<?php
  
  $connection = mysqli_connect('localhost', 'root', '', 'tours');
   
    if(isset($_POST['delete_btn']))
    {
        $tracking_id=$_POST['delete'];
        $order_status=$_POST['delete1'];


        $query = " UPDATE order_reg SET order_status='$order_status' WHERE   tracking_id='$tracking_id' ";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            $_SESSION['SUCCESS']="YOUR DATA IS DELETED";
            header('location:admin33.php');

        }
        else{
            $_SESSION['SUCCESS']="YOUR DATA IS  NOT DELETED";
            header('location:admin.php');

        }
    }






?>
