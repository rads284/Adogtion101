<?php
session_start();
include("log.php");
$dbname="users";
$username="root";
$password="";
$host="localhost";
$login=false;
$myconnection=mysqli_connect($host,$username,$password,$dbname);

$phone = $ctype= $month=$year=$pin="";
$fnameErr = $emailErr = $lnameErr = $passwordErr = $addressErr = $phoneErr=$pinErr=$monthErr=$yearErr=$ctypeErr="";
$emailErr1 = $pwordErr1 = $wrongPassErr = "";
$fname = $lname = $email = $address = $email1 = $pword3 = "";
$addressflag = $paymentflag = $finalflag=0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $addressflag=0;
  }
  else{
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $addressflag=0;
      $emailErr = "Invalid email format";
    }
    else {
      $addressflag=1;
    }
  }
  if(empty($_POST["phone"])){
    $phoneErr="Phone Number is required";
    $addressflag=0;
  }
  else{
    $phone = test_input($_POST["phone"]);
    if(!preg_match("/[0-9]{10}/",$phone))
    {
      $addressflag=0;
      $phoneErr="Invalid phone format";
    }
    else {
      $addressflag=1;
    }
  } //end of first submit
  if(isset($_POST["fname"]))
  {
    $addressflag=1;
    if (empty($_POST["fname"])) {
      $fnameErr = "Name is required";
      $paymentflag=0;
    }
    else {
      $fname = test_input($_POST["fname"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        $fnameErr = "Only letters and white space allowed";
        $paymentflag=0;
      }
      else {
        $paymentflag=1;
      }
    }
    if(empty($_POST["lname"])) {
      $lnameErr = "Name is required";
      $paymentflag=0;
    }
    else {
      $lname = test_input($_POST["lname"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
        $lnameErr = "Only letters and white space allowed";
        $paymentflag=0;
      }
      else {
        $paymentflag=1;
      }
    }
    if(empty($_POST["address"])){
      $paymentflag=0;
      $addressErr="Address is required";
    }
    else{
      $address= test_input($_POST["address"]);
      $paymentflag=1;
    }
  }
  if(isset($_POST['ctype']))
  {
      $addressflag=1;
      $paymentflag=1;
      $finalflag=1;
      if(empty($_POST['ctype'])){
        $ctypeErr="Card Type is required";
        $finalflag=0;
      }
      else{
        $ctype=test_input($_POST["ctype"]);
      }
      if(empty($_POST['month'])){
        $monthErr="Month is required";
        $finalflag=0;
      }
      else{
        $month=test_input($_POST["month"]);
      }
      if(empty($_POST['year'])){
        $yearErr="Year is Required";
        $finalflag=0;
      }
      else{
        $year=test_input($_POST["year"]);
      }
      if(empty($_POST['pin'])){
        $pinErr="Pin is required";
        $finalflag=0;
      }
      else {
        $pin=test_input($_POST["pin"]);
        if(!preg_match("/[0-9]{5}/",$pin))
        {
          $pinErr="Invalid pin format";
          $finalflag=0;
        }
      }

  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />
  <link rel="stylesheet" href="template.css">
  <title>Donate </title>
</head>
<style>
.t{
  color:red;
}
h2:hover{
    color:#333;
    opacity: 100%;
    font-weight: bold;
}

div.box{
    border: 3px solid #333;
    margin: auto;
    width: 90%;
    padding: 10px;
}

table{
    width:100%;
    column-span: 50%;
}
body{
    background-color: black;
    color:black;
    background: url(donate.jpg);
    background-size:100%;
    height:800px;
    width:100%;
    min-height:100%;
    position:sticky;
    margin: 0;
    padding: 0;
    background-repeat: no-repeat;
    background-attachment: fixed ;
    background-position: 0% 100%;

}

</style>
<body>
<!-- <div id="cover"> -->
    <img id="logo" src="adogtion11.png"></img>
    <a href="Home.html"><img id="home" src="home.png"></img></a>
    <a href="cart.php#carting"><img id="cart" src="cart.png"></img></a>
    <!-- <a href=login.php> Logout </a> -->
<!-- </div> -->
<div class="navbar" id="donate">
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
        <a href="tempstore.php?id=1category=default">Dog Store</a>
        <a href="tempshop.php?id=1category=nothing">Dog Shop</a>
      </div>
    </li>
    <li><a href="news.html#p8">News</a></li>
    <li class="active"><a   href="donate.php#donate">Donate</a></li>
    <li><a href="login.php#login" id="login">Login</a></li>
  </ul>

</div>
<div class="donatebackground">
  <div class="transbox">
      <p  class="heading" style="margin:30px;">Support Us</p>
      <p class="text" style="font-family:Helvetica; font-size:20px;" id="para">
         The work of International Animal Rescue is funded entirely by public donations.
         Your support is vital if we are to make a lasting difference to animals' lives.
         Your gift today - whatever sum you choose to give - will help us save animals from suffering
         and give them the expert treatment and care they need.
      </p>
      <div id="1" style="font-family:Helvetica; margin:10px;">
      <h2 id="emailfunc"> EMAIL ADDRESS AND PHONE NUMBER </h2>
      <hr/>
      <form action ="donate.php" method="POST" id="forma1">
        Email <span class="t"> * <?php echo $emailErr?></span><br/>
        <input type="text" name="email" value="" id="email">  </input><br/><br/>
        Phone <span class="t"> * <?php echo $phoneErr?></span><br/>
        <input type="text" name="phone" value="" id="phone">  </input><br/><br/>
        <input type="submit" value="Continue" name="submitemail"> </input>
      </form>
      </div>
      <div style="font-family:Helvetica; margin:10px;" id="2">
      <h2 id="addressfunc"> BILLING ADDRESS </h2>
      <hr/>
      <form action ="donate.php" method="POST" style="display:none;" id="form2" >
        First Name <span class="t"> * <?php echo $fnameErr; ?></span><br/>
        <input type="text" name="fname" value="" id="fname">  </input><br/><br/>
        Last Name <span class="t"> * <?php echo $lnameErr?></span><br/>
        <input type="text" name="lname" value="" id="lname">  </input><br/><br/>
        Address <span class="t"> * <?php echo $addressErr?></span><br/>
        <input type="text" name="address" value="" id="address">  </input><br/><br/>
        <input type="submit" value="Continue" name="submitaddress"> </input>
      </form>
      </div>
      <div style="font-family:Helvetica; margin:10px;" id="3">
      <h2 id="paymentfunc"> PAYMENT </h2>
      <hr/>
      <form action="donate.php" method="POST" style="display:none;" id="form3" >
        Card Type <span class="t"> * <?php echo $ctypeErr?></span><br/><br/>
        <input type="radio" name="ctype" value="master"> Master Card </input><br/>
        <input type="radio" name="ctype" value="visa"> Visa </input> <br/>
        <input type="radio" name="ctype" value="express"> American Express </input></br></br>
        Expiration <span class="t"> * <?php echo $monthErr?> <?php echo $yearErr?></span><br/><br/>
        Month: <select id="months" onclick="createmonthoptions()" name="month"></select> /
        Year: <select id="years" onclick="createyearoptions()" name="year"></select><br/><br/>
        Security Pin <span class="t"> * <?php echo $pinErr?></span><br/>
        <input type="password" name="pin" id="pin"></input><br/><br/>
        <input type="submit" value="DONATE" name="submitpayment"></input><br/><br/>
      </form>
      </div>
  </div>
</div>
</body>
<script>
var x=<?php echo $addressflag;?>;
if("<?php echo $addressflag;?>"==1)
{
  var form=document.getElementById("form2");
  form.style.display="block";
  var form1=document.getElementById("forma1");
  form1.style.display="none";
  var scrollto=document.getElementById("addressfunc");
  scrollto.scrollIntoView();
}
if("<?php echo $paymentflag;?>"==1)
{
  var form=document.getElementById("form3");
  form.style.display="inline";
  var form=document.getElementById("form2");
  form.style.display="none";
  var form=document.getElementById("forma1");
  form.style.display="none";
  var scrollto=document.getElementById("paymentfunc");
  scrollto.scrollIntoView();
}
var email="<?php echo $email ?>";
if(email!="")
  localStorage.setitem("email",email);
var fname="<?php echo $fname ?>";
if(fname!="")
  localStorage.setitem("fname",fname);
var lname="<?php echo $lname ?>";
if(lname!="")
  localStorage.setitem("lname",lname);
var phone="<?php echo $phone ?>";
if(phone!="")
  localStorage.setitem("phone",phone);
var address="<?php echo $address ?>";
if(address!="")
  localStorage.setitem("address",address);
// var ctype="<?php echo $ctype ?>";
// if(ctype!="")
//   localStorage.setitem("ctype",ctype);
// var month="<?php echo $month ?>";
// if(month!="")
//   localStorage.setitem("month",month);
// var year="<?php echo $year ?>";
// if(year!="")
//   localStorage.setitem("year",year);
// var pin="<?php echo $pin ?>";
// if(pin!="")
//   localStorage.setitem("pin",pin);

document.getElementById("email").value=localStorage.getItem("email");
document.getElementById("fname").value=localStorage.getItem("fname");
document.getElementById("lname").value=localStorage.getItem("lname");
document.getElementById("phone").value=localStorage.getItem("phone");
document.getElementById("address").value=localStorage.getItem("address");
// document.getElementById("ctype").value=localStorage.getItem("ctype");
// document.getElementById("months").value=localStorage.getItem("months");
// document.getElementById("years").value=localStorage.getItem("years");
// document.getElementById("pin").value=localStorage.getItem("pin");
if("<?php echo $finalflag ?>"==1){
  var p=document.getElementById("para");
  var div1=document.getElementById("1");
  var div2=document.getElementById("2");
  var div3=document.getElementById("3");
  div1.style.display="none";
  div2.style.display="none";
  div3.style.display="none";
  p.innerHTML="Thank You for donating!";
}
function createmonthoptions()
{
    var months=document.getElementById("months");
    var i=1;
    for(i=1;i<=12; i++)
    {
        var month=document.createElement("option");
        month.setAttribute("value",""+i);
        month.textContent=i;
        months.appendChild(month);
    }
}
function createyearoptions()
{
    var years=document.getElementById("years");
    i=17;
    for(i=17;i<=34; i++)
    {
        var year=document.createElement("option");
        year.setAttribute("value",""+i);
        year.textContent=i;
        years.appendChild(year);
    }
}


</script>
</html>
<script>
var flag="<?php echo $flag; ?>";
if(flag==1)
  {
    var login=document.getElementById("login");
    login.innerHTML="Logout";
    login.setAttribute("href","logout.php");
  }
</script>
