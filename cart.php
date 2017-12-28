<?php
session_start();
include("log.php");
$arr=array();
$arr1=array();

if(isset($_SESSION['array']) || isset($_SESSION['array1']))
{
  if(isset($_SESSION['array']))
  foreach ($_SESSION['array'] as $str)
    array_push($arr,explode(",",$str));
  if(isset($_SESSION['array1']))
  foreach ($_SESSION['array1'] as $str)
    array_push($arr1,explode(",",$str));
}
function array_2d_to_1d ($input_array) {
    $output_array = array();

    for ($i = 0; $i < count($input_array); $i++) {
      for ($j = 0; $j < count($input_array[$i]); $j++) {
        $output_array[] = $input_array[$i][$j];
      }
    }
    return $output_array;
}

$arr=array_2d_to_1d($arr);
$arr=array_unique($arr);
$arr1=array_2d_to_1d($arr1);
$arr1=array_unique($arr1);
// print_r($arr);
$requiredrows=array();
$clientid=$_SESSION['clientid'];
// echo $clientid;

$db1="CSV_DB(1)";
$username="root";
$password="";
$host="localhost";
$mycon1=mysqli_connect($host,$username,$password,$db1);
// echo $clientid;
$createquery1="CREATE TABLE user".$clientid."dog(`Dog Breed` VARCHAR(20),Sex VARCHAR(1),`Vaccination Status` VARCHAR(1),Location VARCHAR(20),`Img Location` VARCHAR(20),aage INT,ID INT,PRIMARY KEY(ID));";
$createquery2="CREATE TABLE user".$clientid."shop(ID INT,Category VARCHAR(20),Price INT,Name VARCHAR(20),Source VARCHAR(20), PRIMARY KEY(ID));";
$r1=mysqli_query($mycon1,$createquery1);
$r2=mysqli_query($mycon1,$createquery2);
// print_r($arr1);
foreach ($arr as $value)
{
  $query1="INSERT INTO user".$clientid."dog SELECT * FROM dogs WHERE ID='".$value."'";
  $results=mysqli_query($mycon1,$query1);
}

foreach ($arr1 as $value1)
{
  $query2="INSERT INTO user".$clientid."shop SELECT * FROM shop WHERE ID='".$value1."'";
  $results=mysqli_query($mycon1,$query2);
}

$dogs=array();
$shop=array();
$query="SELECT * FROM user".$clientid."dog";
$results=mysqli_query($mycon1,$query);
while($row = mysqli_fetch_assoc($results))
  {array_push($dogs,$row);}

$query4="SELECT * FROM user".$clientid."shop";
$results2=mysqli_query($mycon1,$query4);
while($row1 = mysqli_fetch_assoc($results2))
  {array_push($shop,$row1);}
  //
  // print_r($dogs);
  // print_r($shop);
// unset($_SESSION["array"]);
// unset($_SESSION["array1"]);
?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Spectral+SC" />
  <link rel="stylesheet" href="cart.css">
</head>
<body>
  <script src="storescript.js"></script>

<div id="cover">
<img id="logo" src="adogtion11.png"></img>
<!-- <a href="Home.html"><img id="home" src="home.png"></img></a>
<a href="cart.php#carting"><img id="cart" src="cart.png"></img></a> -->
</div>
<div class="navbar" id="carting">
<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="aboutus.html#p2">About Us</a>
      <a href="contactus.html#p4">Contact Us</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Dog World</a>
    <div class="dropdown-content">
      <a href="aboutdogs.html#p1">About Dogs</a>
      <a href="doghealth.html#p7">Dog Health</a>
      <a href="tempstore.php?id=1&category=default">Dog Store</a>
      <a href="tempshop.php?id=1&category=nothing">Dog Shop</a>
    </div>
  </li>
  <li><a href="news.html#p8">News</a></li>
  <li><a  href="donate.php#donate">Donate</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="background" id="opt1">

</div>
<div class="footer">
  <input type="submit" class="button" value="Proceed To Checkout" onclick="window.location.href='happyshopping.php'">

</div>
</body>
</html>

<script>
var numofdogs="<?php echo sizeof($arr);?>";
var numofshops="<?php echo sizeof($arr1);?>";
var dogs=<?php echo json_encode($dogs); ?>;console.log(numofdogs);
var shop=<?php echo json_encode($shop); ?>;
for(var i=0;i<numofdogs;i++)
{

  var bgd=document.getElementById("opt1");
  var div=document.createElement("div");
  div.setAttribute("class","main");
  // div.style.float="left";

  var img=document.createElement("img");
  img.src="dogpics/"+dogs[i]["Img Location"];
  img.setAttribute("id","img");

  var p1=document.createElement("p");
  p1.innerHTML="Breed : "+dogs[i]["Dog Breed"];

  var p2=document.createElement("p");
  p2.innerHTML="Age : "+dogs[i]["aage"];

  var p3=document.createElement("p");
  p3.innerHTML="Location : "+dogs[i]["Location"];

  var p4=document.createElement("p");
  p4.innerHTML="Vaccination Status : "+dogs[i]["Vaccination Status"];

  var label=document.createElement("label");
  var ip=document.createElement("input");
  var spn=document.createElement("span");
  label.setAttribute("class","container");
  ip.setAttribute("type","checkbox");
  ip.setAttribute("checked","checked");
  spn.setAttribute("class","checkmark");
  bgd.appendChild(div);
  div.appendChild(img);
  div.appendChild(p1);
  div.appendChild(p2);
  div.appendChild(p3);
  div.appendChild(p4);
  div.appendChild(label);
  label.appendChild(ip);
  label.appendChild(spn);
}

for(var i=0;i<numofshops;i++)
{
  console.log(shop);
  var bgd=document.getElementById("opt1");
  var div=document.createElement("div");
  div.setAttribute("class","main");
  // div.style.float="left";

  var img=document.createElement("img");
  img.src=""+shop[i]["Source"];
  img.setAttribute("id","img");

  var p1=document.createElement("p");
  p1.innerHTML="Breed : "+shop[i]["Category"];

  var p2=document.createElement("p");
  p2.innerHTML="Age : "+shop[i]["Price"];

  // var p3=document.createElement("p");
  // p3.innerHTML="Location : "+dogs[i]["Location"];
  //
  // var p4=document.createElement("p");
  // p4.innerHTML="Vaccination Status : "+dogs[i]["Vaccination Status"];

  var label=document.createElement("label");
  var ip=document.createElement("input");
  var spn=document.createElement("span");
  label.setAttribute("class","container");
  ip.setAttribute("type","checkbox");
  ip.setAttribute("checked","checked");
  spn.setAttribute("class","checkmark");
  bgd.appendChild(div);
  div.appendChild(img);
  div.appendChild(p1);
  div.appendChild(p2);
  // div.appendChild(p3);
  // div.appendChild(p4);
  div.appendChild(label);
  label.appendChild(ip);
  label.appendChild(spn);
}
</script>
