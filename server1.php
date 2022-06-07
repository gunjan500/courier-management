<?php
// function generatekey()
// {
  $randstr= uniqid("pmc");
  $or="Pending";
// return $randstr;
// }
//  echo generatekey();
session_start();


$n1 = "";
$p1 = "";
$a1 = "";
$c1 = "";
$n2 = "";
$p2 = "";
$a2 = "";
$c2 = "";

$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'tours');


if (isset($_POST['reg_user'])) {
  
  $n1 = mysqli_real_escape_string($db, $_POST['n1']);
  $p1 = mysqli_real_escape_string($db, $_POST['p1']);
  $a1 = mysqli_real_escape_string($db, $_POST['a1']);
  $c1 = mysqli_real_escape_string($db, $_POST['c1']);
  $n2 = mysqli_real_escape_string($db, $_POST['n2']);
  $p2 = mysqli_real_escape_string($db, $_POST['p2']);
  $a2 = mysqli_real_escape_string($db, $_POST['a2']);
  $c2 = mysqli_real_escape_string($db, $_POST['c2']);

 
  if (empty($n1)) { array_push($errors, "senders name is required"); }
  if (empty($p1)) { array_push($errors, "phone number  is required"); }
  if (empty($a1)) { array_push($errors, "address is required"); }
  if (empty($c1)) { array_push($errors, "postal code  is required"); }

  if (empty($n2)) { array_push($errors, "senders name is required"); }
  if (empty($p2)) { array_push($errors, "phone number  is required"); }
  if (empty($a2)) { array_push($errors, "address is required"); }
  if (empty($c2)) { array_push($errors, "postal code  is required"); }
 

$var = md5($p1);
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO order_reg (order_status,n1,p1,a1,c1,n2,p2,a2,c2,tracking_id) 
  			  VALUES('$or','$n1', '$p1', '$a1','$c1' ,'$n2', '$p2', '$a2','$c2','$randstr')";
  	mysqli_query($db, $query);
  	$_SESSION['sendersname'] = $a1;
    $_SESSION['success'] = "succesfull";
    // $query_run= mysqli_query($db,$query);

    if($query_run)
    {
        echo'<script type="text/javascript"> alert("data updated") </script>';
    }
    else{
        echo'<script type="text/javascript"> alert("data not updated") </script>';
    }
    
  	header('location: price.php');
  }
}



?>