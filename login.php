<?php
$dbname="users";
$username="root";
$password="";
$host="localhost";
$login=false;
$myconnection=mysqli_connect($host,$username,$password,$dbname);

$fnameErr = $emailErr = $lnameErr = $passwordErr = $noMatchErr = "";
$emailErr2="";
$emailErr1 = $pwordErr1 = $wrongPassErr = "";
$fname = $lname = $pword1 = $pword2 = $email = $address = $email1 = $pword3 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  }
  else {
    $fname = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Name is required";
  }
  else {
    $lname = test_input($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
  else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["pword1"])) {
    $passwordErr = "Password is required";
  } else {
    $pword1 = test_input($_POST["pword1"]);
  }

  if (empty($_POST["pword2"])) {
    $passwordErr = "Confirm password required";
  } else {
    $pword2 = test_input($_POST["pword2"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address required";

  } else {
    $address = test_input($_POST["address"]);
  }
}
if($pword1!=$pword2)
{
  $passwordErr = "Passwords dont match.";
}

$query10="SELECT * FROM `login_details` WHERE `email_address`='".$email."'";
$results10=mysqli_query($myconnection,$query10);
if(mysqli_num_rows($results10)>0 && !isset($_SESSION['email']))
  $emailErr="User ID already exists";


if (empty($_POST["email1"])) {
  $emailErr1 = "Email Required";
} else {
  $email1 = test_input($_POST["email1"]);
  if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
  $emailErr1 = "Invalid email format";
}}
if (empty($_POST["pword3"])) {
  $pwordErr1 = "Password Required";
} else {
  $pword3 = test_input($_POST["pword3"]);
  $query = "SELECT * FROM `login_details` WHERE email_address='".$email1."'AND password='".$pword3."'";
  $results=mysqli_query($myconnection,$query);

  if(mysqli_num_rows($results)!=1)
    {
      $noMatchErr="Email Id and Password dont match!";
      $login="login";
   }
  else
  {
    $details=mysqli_fetch_assoc($results);
    session_start();
    $_SESSION['c']=1;
    $_SESSION['email']=$details['email_address'];
    $_SESSION['password']=$details['password'];
    $_SESSION['fname']=$details['first_name'];
    $_SESSION['lname']=$details['last_name'];
    $_SESSION['clientid']=$details['ID'];
  }
}
if (isset($_SESSION['email'])){
  $username = $_SESSION['email'];
  $fnameErr = $emailErr = $lnameErr = $passwordErr = $noMatchErr = $addressErr = "";
  $emailErr1 = $pwordErr1 = $wrongPassErr = "";
  $login=true;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($pword1==$pword2 && $emailErr=="" && $fnameErr=="" && $lnameErr=="" && $passwordErr=="" && $emailErr=="" &&(!isset($_SESSION['email'])) && (!isset($_SESSION['fname'])) && (!isset($_SESSION['lname'])) && (!isset($_SESSION['password'])))
{
  // echo "h";
  if(!empty($_POST["address"])&&!empty($_POST["fname"])&&!empty($_POST["lname"])&&!empty($_POST["pword1"])&&!empty($_POST["pword2"])&&!empty($_POST["email"]))
  {
    $query1 = "INSERT INTO `login_details` (first_name,last_name,email_address,password,address) VALUES ('".$fname."','".$lname."','".$email."','".$pword1."','".$address."')";
    $results = mysqli_query($myconnection,$query1);
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />
  <style>
  #logo{
    max-width:100%;
    max-height:40%;
    margin: 0;
    width: 100%;
  }
  #cart{
    position:absolute;
    left: 93%;
    top: 11%;
    height: 7%;
    width: 5%;
  }
  #home{
    position: absolute;
    left: 93%;
    top:2.1%;
    height:7%;
    width:5%;
  }
  div.transbox {
    margin:auto;
    padding:inherit;
    background-color: #ffffff;
    opacity: 0.7;
    filter: alpha(opacity=60); /* For IE8 and earlier */
    margin-bottom: 30px;
    width:80%;
    position: relative;
    align-items: center;
  }

  p.text {
    margin: 0;
    padding: 5% 5% 0% 5%;
    font-weight: bold;
    color: #000000;
    line-height: 40px;
    font-family: Lato;
    font-style: normal;
    font-size: 18px;
    text-align: justify;
  }
  p.subpara,h2.subpara{
    margin: 0;
    font-weight: bold;
    color: #000000;
    line-height: 40px;
    font-family: Lato;
    font-style: normal;
    font-size: 18px;
    text-align: justify;
    padding: 0% 5%;
  }

  #navbar{
    margin: 0;
  }
  .navbar>ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
  }

  .navbar>ul>li {
      float: left;
      width: 20%;
      align-items: center;
      text-align: center;
  }

  .dropdown>a,.dropdown-content>a,.navbar>ul>li>a, .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-family: Lato;

  }

  li:hover, .dropdown:hover .dropbtn {
      background-color: #424242;
  }

  .dropdown {
      display: inline-block;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color:black;
      min-width: 160px;
      z-index: 1;
        width:20%;
  }

  .dropdown-content a {
      color:white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align:center;

  }
  .active {
      background-color: #616161;
      color: white;
  }

  .dropdown-content a:hover {background-color: #e0e0e0;
  color:black;}

  .dropdown:hover .dropdown-content {
      display: block;
  }
  *, *:before, *:after {
    box-sizing: border-box;
  }

  html {
    overflow-y: scroll;
  }

  body {
    background: #c1bdba;
    font-family: 'Titillium Web', sans-serif;
  }

  a {
    text-decoration: none;
    color: #1ab188;
    -webkit-transition: .5s ease;
    transition: .5s ease;
  }
  a:hover {
    color: #179b77;
  }

  .form {
    background: rgba(19, 35, 35, 0.5);
    padding: 40px;
    max-width: 600px;
    margin: 40px auto;
    border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  }

  .tab-group {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
  }
  .tab-group:after {
    content: "";
    display: table;
    clear: both;
  }
  .tab-group li a {
    display: block;
    text-decoration: none;
    padding: 15px;
    background: rgba(160, 179, 176, 0.25);
    color: #a0b3b0;
    font-size: 20px;
    float: left;
    width: 260px;
    text-align: center;
    cursor: pointer;
    -webkit-transition: .5s ease;
    transition: .5s ease;
  }
  .tab-group li a:hover {
    background: #179b77;
    color: #ffffff;
  }
  .tab-group .active a {
    /*background: #1ab188;*/
    color: #ffffff;
    width:260px;
  }
/*.active{
  background-color: #1ab188;
}*/
  .tab-content > div:last-child {
    display: none;
  }

  h1 {
    text-align: center;
    color: #ffffff;
    font-weight: 300;
    margin: 0 0 40px;
  }

  label {
    position: absolute;
    -webkit-transform: translateY(6px);
            transform: translateY(6px);
    left: 13px;
    color: rgba(255, 255, 255, 0.5);
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    -webkit-backface-visibility: hidden;
    pointer-events: none;
    font-size: 22px;
  }
  label .req {
    margin: 2px;
    color: #1ab188;
  }

  label.active {
    -webkit-transform: translateY(50px);
            transform: translateY(50px);
    left: 2px;
    font-size: 14px;
  }
  label.active .req {
    opacity: 0;
  }

  label.highlight {
    color: #ffffff;
  }

  input, textarea {
    font-size: 22px;
    display: block;
    width: 100%;
    height: auto;
    padding: 5px 10px;
    background: none;
    background-image: none;
    border: 1px solid #a0b3b0;
    color: #ffffff;
    border-radius: 0;
    -webkit-transition: border-color .25s ease, box-shadow .25s ease;
    transition: border-color .25s ease, box-shadow .25s ease;
  }
  input:focus, textarea:focus {
    outline: 0;
    border-color: #1ab188;
  }

  textarea {
    border: 2px solid #a0b3b0;
    resize: vertical;
  }

  .field-wrap {
    position: relative;
    margin-bottom: 40px;
  }

  .top-row:after {
    content: "";
    display: table;
    clear: both;
  }
  .top-row > div {
    float: left;
    width: 48%;
    margin-right: 4%;
  }
  .top-row > div:last-child {
    margin: 0;
  }

  .button {
    border: 0;
    outline: none;
    border-radius: 0;
    padding: 15px 0;
    font-size: 2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .1em;
    background: #1ab188;
    color: #ffffff;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-appearance: none;
  }
  .button:hover, .button:focus {
    background: #179b77;
  }

  .button-block {
    display: block;
    width: 100%;
  }

  .forgot {
    margin-top: -20px;
    text-align: right;
  }
  body{
  background: url(login1.jpg) no-repeat center fixed;
  background-size: cover;
}
  div.background {
    /*background: url(login1.jpg);
    background-size:100%;*/
    background-blend-mode: lighten;
    height:1000px;
    width:100%;
    position: absolute  ;
    margin: 0;
    padding: 0;
    align-items: stretch;
  }


  </style>
  <meta charset="UTF-8">

</head>

<body>
  <img id="logo" src="adogtion11.jpg"></img>
  <a href="Home.html"><img id="home" src="home.png"></img></a>
  <a href="cart.php#carting"><img id="cart" src="cart.png"></img></a>
  <div class="navbar" id="login">
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
    <li class="active" ><a href="login.php#login">Login</a></li>
  </ul>
  </div>
  <div class="background">
  <div class="form">

      <ul class="tab-group">
        <li class="tab active" class="makeactive"><a href="#signup" onclick="loadsignup()">Sign Up</a></li>
        <li class="tab" class="makeactive"><a href="#login" onclick="loadlogin()">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Sign Up for Free</h1>

          <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*<?php echo $fnameErr;?></span>
              </label><br/><br/>
              <input type="text" required autocomplete="off" name="fname" value="<?php echo $fname;?>"/>
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">* <?php echo $lnameErr;?></span>
              </label><br/><br/>
              <input type="text"required autocomplete="off" name="lname" value="<?php echo $lname;?>"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">* <?php echo $emailErr;?></span>
            </label><br/><br/>
            <input type="email"required autocomplete="off" name="email" value="<?php echo $email;?>"/>
          </div>

          <div class="field-wrap">
            <label>
              Enter Password<span class="req">* <?php echo $passwordErr;?></span>
            </label><br/><br/>
            <input type="password"required autocomplete="off" name="pword1"/>
          </div>

          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">* <?php echo $passwordErr;?></span>
            </label><br/><br/>
            <input type="password"required autocomplete="off" name="pword2"/>
          </div>

          <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label><br/><br/>
            <input type="address"required autocomplete="off" name="address" value="<?php echo $address;?>"/>
          </div>


          <button type="submit" class="button button-block"/>SIGN UP!</button>

          </form>

        </div>

        <div id="login11">
          <h1>Welcome Back!</h1>

          <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*<?php echo $emailErr1;?></span>
            </label><br/><br/>
            <input type="email"required autocomplete="off" value="<?php echo $email1;?>" name="email1"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">* <?php echo $noMatchErr;?></span>
            </label><br/><br/>
            <input type="password"required autocomplete="off" name="pword3"/>
          </div>

          <button type="submit" class="button button-block"/>Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
</div>


</body>
</html>


<script>
var login=document.querySelector(".tab-content > div:last-child ");
var signup=document.getElementById("signup");

var s="<?php echo $login;?>";
if(s==true)
{
  window.location.href="tempstore.php?id=1&category=default";
}
else if(s=="login")
{
  loadlogin();
}
function loadlogin()
{
    signup.style.display="none";
    login.style.display="block";
}

function loadsignup()
{
    login.style.display="none";
    signup.style.display="block";
}
</script>
