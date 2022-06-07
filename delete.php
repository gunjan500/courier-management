<?php
  
  $connection = mysqli_connect('localhost', 'root', '', 'tours');
   
    if(isset($_POST['delete_btn']))
    {
        $p1=$_POST['delete'];

        $query = " DELETE FROM order_reg WHERE  p1='$p1' ";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            $_SESSION['SUCCESS']="YOUR DATA IS DELETED";
            header('location:admin3.php');

        }
        else{
            $_SESSION['SUCCESS']="YOUR DATA IS  NOT DELETED";
            header('location:admin.php');

        }
    }






?>
