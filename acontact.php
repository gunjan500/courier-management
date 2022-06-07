<?php
// function generatekey()
// {
 
//   $randstr= uniqid('pmc');
//   $or="Pending";
  // return $randstr;
// }
//  echo generatekey();
session_start();


$n = "";
$e   = "";
$m = "";


$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'tours');


if (isset($_POST['reg_user'])) {
  
  $n = mysqli_real_escape_string($db, $_POST['n']);
  $e = mysqli_real_escape_string($db, $_POST['e']);
  $m = mysqli_real_escape_string($db, $_POST['m']);


 
  if (empty($n)) { array_push($errors, "name name is required"); }
  if (empty($e)) { array_push($errors, "email  is required"); }
  if (empty($m)) { array_push($errors, "message is required"); }


 
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO contact (n,e,m) 
  			  VALUES('$n','$e', '$m')";
  	mysqli_query($db, $query);
  	$_SESSION['n'] = $n;
    $_SESSION['success'] = "succesfull";
    $query_run= mysqli_query($connection,$query);

    if($query_run)
    {
        echo'<script type="text/javascript"> alert("data updated") </script>';
    }
    else{
        echo'<script type="text/javascript"> alert("data not updated") </script>';
    }
    
  	header('location: contact.php');
  }
}



?>