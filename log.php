<?php
// echo "D";
if(isset($_SESSION['email']))
  $flag=1;
if(!isset($_SESSION['email']))
  {
    $flag=0;
    header("Location: login.php");
    exit();
  }

?>
