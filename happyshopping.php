<?php
session_start();
$db1="CSV_DB(1)";
$username="root";
$password="";
$host="localhost";
$mycon1=mysqli_connect($host,$username,$password,$db1);
$query1="DELETE FROM `user".$_SESSION['clientid']."dog`";
$query2="DELETE FROM `user".$_SESSION['clientid']."shop`";

$results=mysqli_query($mycon1,$query1);
$results=mysqli_query($mycon1,$query2);
unset($_SESSION["array"]);
unset($_SESSION["array1"]);

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico" />
  <link rel="stylesheet" href="template.css">
  <style>
    body {
      background: url(hpp.jpg) no-repeat center fixed;
      background-size: cover;
    }
  </style>
</head>
<body>
<div class="background">
  <div class="transbox">
  <p style="font-family:Pacifico; font-size:50px; font-weight:bold; padding:10%; margin:10%; padding-left:20%;padding-bottom:0;">Happy Shopping!</p>
  <p style="font-family:Pacifico; font-size:30px; font-weight:bold; padding-left:20%; ">Your Order will be delivered in 7 business days :)</p>
  <a href="tempstore.php?id=1&category=default"><p style="font-family:Pacifico; font-size:30px; font-weight:bold; padding-left:28%;">Click here to Continue Shopping</p></a>
  </div>
  <center><a style="font-family:Lato; font-size:13px;color:black; font-weight:bold">www.adogtion.com</a></center>

</div>

</body>
</html>
