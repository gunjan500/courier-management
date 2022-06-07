<?php
    $connection= mysqlui_connect('localhost','root','','tours');
    if(isset($POST['cancel_btn']))
        {
            $tracking_id= $_POST['cancel1'];
            $order_status= $_POST['os'];
            if($order_status=="ACCEPTED"){
                $_SESSION= "Sorry your order has already been processed and cannot be cancelled now";
            }
            else{
                $query= "DELETE * FROM order_reg WHERE tracking_id='$tracking_id";
                $query_run= mysqli_query($connection,$query);
                if($query_run){
                    $_SESSION['SUCCESS'] = "Your order has been cancelled";
                    header('location: cancel.php');
                }
                else{
                    $_SESSION['SUCCESS']="Your data could not be deleted";
                    header('location: cancel.php');
                }
            }
        }