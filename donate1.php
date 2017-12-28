<?php
session_start();

$dbname="users";
$username="root";
$password="";
$host="localhost";
$login=false;
$myconnection=mysqli_connect($host,$username,$password,$dbname);

$fnameErr = $emailErr = $lnameErr = $passwordErr = $addressErr = $phoneErr=$pinErr=$monthErr=$yearErr=$ctypeErr="";
$emailErr1 = $pwordErr1 = $wrongPassErr = "";
$fname = $lname = $pword1 = $pword2 = $email = $address = $email1 = $pword3 = "";
$addressflag = $paymentflag = 0;
$phone = "";

if(!isset($_SESSION['email']))
  $_SESSION['email']="";
  if(!isset($_SESSION['phone']))
    $_SESSION['phone']="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $addressflag=0;
  }
  else
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $addressflag=0;
      $emailErr = "Invalid email format";
    }
    else {
      $_SESSION['email']=$_POST['email'];
      $addressflag=1;
    }
  }
  if(empty($_POST["phone"])){
    $phoneErr="Phone Number is required";
    $addressflag=0;
  }
  else{
    $phone=test_input($_POST["phone"]);
    if(!preg_match("/[0-9]{10}/",$phone))
    {
      $addressflag=0;
      $phoneErr="Invalid phone format";
    }
    else {
      $addressflag=1;
      $_SESSION['phone']=$_POST['phone'];
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
        $_SESSION['fname']=$_POST['fname'];
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
        $_SESSION['lname']=$_POST['lname'];
        $paymentflag=1;
      }
    }
    if(empty($_POST["address"])){
      $paymentflag=0;
      $addressErr="Address is required";
    }
    else{
      $_SESSION['address']=$_POST['address'];
      $paymentflag=1;
    }
  }
  if(isset($_POST['ctype']))
  {
      $addressflag=1;
      $paymentflag=1;
      if(empty($_POST['ctype'])){
        $ctypeErr="Card Type is required";
      }
      else {
        $_SESSION['ctype']=$_POST['ctype'];
      }
      if(empty($_POST['month'])){
        $monthErr="Month is required";
      }
      else{
        $_SESSION['month']=$_POST['month'];
      }
      if(empty($_POST['year'])){
        $yearErr="Year is Required";
      }
      else{
        $_SESSION['year']=$_POST['year'];
      }
      if(empty($_POST['pin'])){
        $pinErr="Pin is required";
      }
      if(!preg_match("/[0-9]{5}/",$phone))
      {
        $pinErr="Invalid pin format";
      }
      else{
        $_SESSION['pin']=$_POST['pin'];
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
    <a href="cart.html"><img id="cart" src="cart.png"></img></a>

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
        <a href="tempstore.php?id=1&category=default">Dog Store</a>
        <a href="tempshop.php?id=1&category=nothing">Dog Shop</a>
      </div>
    </li>
    <li><a href="news.html#p8">News</a></li>
    <li class="active"><a   href="donate.php#donate">Donate</a></li>
    <li><a href="login.php#login">Login</a></li>
  </ul>

</div>
<div class="donatebackground">
  <div class="transbox">
      <p  class="heading" style="margin:30px;">Support Us</p>
      <p class="text" style="font-family:Helvetica; font-size:20px;">
         The work of International Animal Rescue is funded entirely by public donations.
         Your support is vital if we are to make a lasting difference to animals' lives.
         Your gift today - whatever sum you choose to give - will help us save animals from suffering
         and give them the expert treatment and care they need.
      </p>
      <div id="form1" style="font-family:Helvetica; margin:10px;">
      <h2 id="emailfunc"> EMAIL ADDRESS AND PHONE NUMBER </h2>
      <hr/>
      <form action ="donate.php" method="POST">
        Email <span class="t"> * <?php echo $emailErr?></span><br/>
        <input type="text" name="email" value="<?php echo $email;?>">  </input><br/><br/>
        Phone <span class="t"> * <?php echo $phoneErr?></span><br/>
        <input type="text" name="phone" value="<?php echo $phone;?>">  </input><br/><br/>
        <input type="submit" value="Continue" name="submitemail"> </input>
      </form>
      </div>
      <div style="font-family:Helvetica; margin:10px;">
      <h2 id="addressfunc"> BILLING ADDRESS </h2>
      <hr/>
      <form action ="donate.php" method="POST" style="display:none;" id="form2" >
        First Name <span class="t"> * <?php echo $fnameErr; ?></span><br/>
        <input type="text" name="fname" value="<?php echo $_SESSION['fname'];?>">  </input><br/><br/>
        Last Name <span class="t"> * <?php echo $lnameErr?></span><br/>
        <input type="text" name="lname" value="<?php echo $_SESSION['lname'];?>">  </input><br/><br/>
        Address <span class="t"> * <?php echo $addressErr?></span><br/>
        <input type="text" name="address" value="<?php echo $_SESSION['address'];?>">  </input><br/><br/>
        <input type="submit" value="Continue" name="submitaddress"> </input>
      </form>
      </div>
      <div style="font-family:Helvetica; margin:10px;">
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
        <input type="password" name="pin"></input><br/><br/>
        <input type="submit" value="DONATE" name="submitpayment"></input><br/><br/>
      </form>
      </div>
  </div>
</div>
</body>
<script>
var x=<?php echo $addressflag;?>;console.log(x);
if("<?php echo $addressflag;?>"==1)
{
  var form=document.getElementById("form2");
  form.style.display="block";
  var scrollto=document.getElementById("addressfunc");
  scrollto.scrollIntoView();
}
if("<?php echo $paymentflag;?>"==1)
{
  var form=document.getElementById("form3");
  form.style.display="inline";
  var form=document.getElementById("form2");
  form.style.display="block";
  var scrollto=document.getElementById("paymentfunc");
  scrollto.scrollIntoView();
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
