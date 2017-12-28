<?php
session_start();
include("log.php");
$dbname="CSV_DB(1)";
$username="root";
$password="";
$host="localhost";
$myconnection=mysqli_connect($host,$username,$password,$dbname);

$db=array();
$rows=array();

$globalquery="SELECT * FROM shop";
$globalresult=mysqli_query($myconnection,$globalquery);

if(!isset($_SESSION['array1']))
{
  $_SESSION['array1']=array();
}
if(isset($_GET['array1']))
  {
    array_push($_SESSION['array1'],$_GET['array1']);
    // print_r($_SESSION['array1']);
  }
if(mysqli_num_rows($globalresult)>0)
  while($row = mysqli_fetch_assoc($globalresult))
    array_push($db,$row);


function call($db,$id)
{
  global $rows;
  $rows=array();
  $i=($id-1)*8;
  $count=ceil(count($db)/(8.0));
  global $myconnection;
  $j=$i+8;$c=0;
  while($i<$j)
  {
    $rows[$c]=isset($db[$i])?$db[$i]:null;
    $i++;$c++;
  }
array_push($rows,$count);
}

function sortt($db,$categ)
{
  $newdb=array();
  foreach ($db as $item)
    if($item['Category']==$categ)
      array_push($newdb,$item);
  return $newdb;
}

// $db=sortt($db,"Food");
// call($db,$_GET['id']);

if(isset($_GET["id"]))
{
   $id=$_GET["id"];
   $category=$_GET["category"];

   if($category=="Nothing" || $category=="nothing")
    call($db,$_GET["id"]);
  else{
   $db=sortt($db,$category);
   call($db,$_GET["id"]);
 }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />
  <link rel="stylesheet" href="tempstore.css">
</head>
<body onload="onload()">
  <script src="storescript.js"></script>

  <img id="logo" src="adogtion11.jpg"></img>
  <a href="Home.html"><img id="home" src="home.png"></img></a>
  <a href="cart.php#carting"><img id="cart" src="cart.png"></img></a>
  <div class="navbar" id="shop">
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
          <a  href="tempstore.php?id=1&category=default">Dog Store</a>
          <a class="active" href="tempshop.php?id=1&category=nothing">Dog Shop</a>
        </div>
      </li>
      <li><a href="news.html#p8">News</a></li>
      <li><a  href="donate.php#donate">Donate</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
<div class="background" id="opt1">
<div class="bar">
  <div class="foldout" style="float:right;">
    <button class="foldbtn"><img src="hmb.png" height="40" width="40"></button>
    <div class="fold-content">
      <p>SORT BY:</p><form id="form">
      <input type="radio" name="foo" id="Food" onclick="oncheck(this.id)">Food</input></br>
      <input type="radio" name="foo" id="Apparels" onclick="oncheck(this.id)">Apparels</input></br>
      <input type="radio" name="foo" id="Accessory" onclick="oncheck(this.id)">Accessories</input></br>
      <input type="radio" name="foo" id="Collars" onclick="oncheck(this.id)">Collars</input></br>
      <input type="radio" name="foo" id="Toy" onclick="oncheck(this.id)">Toys</input></br>
      <input type="radio" name="foo" id="Medicines" onclick="oncheck(this.id)">Medicines</input></br></form>
      <input type="radio" name="foo" id="Nothing" onclick="oncheck(this.id)">Nothing</input></form>
      <!-- <div class="locout" >
      <button class="loc">Location</button><img src="loc1.png" height="20" width="20">
      <div class="locmenu">
        <a href="#">Bangalore</a>
        <a href="#">Mangalore</a>
        <a href="#">Delhi</a>
        <a href="#">Kolkata</a>
        <a href="#">Chennai</a>
        <a href="#">Mumbai</a>
        <a href="#">Mysore  </a>
      </div>
    </div> -->
    </div>
  </div>
    <p  class="heading">SHOP</p>
</div>
        <table>
        <tr>
        <td>
        <div class="gallery" id="g1">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
            <p class=desc1>Name</p>
            <p class=desc1>Price</p>
        </div>
      </td>
      <td>
        <div class="gallery" id="g2">
          <img src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Name</p>
          <p class=desc1>Price</p>
        </div>
      </td>
      <td>
        <div class="gallery" id="g3">
          <img src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Name</p>
          <p class=desc1>Price</p>
      </td>
      <td>
        <div class="gallery" id="g4">
          <img src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Name</p>
          <p class=desc1>Price</p>
      </td>
      </tr>
      <tr>
      <td>
        <div class="gallery" id="g5">
          <img src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Name</p>
          <p class=desc1>Price</p>
      </td>
      <td>
        <div class="gallery" id="g6">
          <img src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Name</p>
          <p class=desc1>Price</p>
      </td>
      <td>
        <div class="gallery" id="g7">
          <img src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Name</p>
          <p class=desc1>Price</p>
        </div>
      </td>
      <td>
        <div class="gallery" id="g8">
          <img src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Name</p>
          <p class=desc1>Price</p>
        </div>
      </td>
        <!-- The Modal -->
      </tr>
      <tr>
        <td colspan="8">
        <div class="pagination" id="pagination">
        <!-- <a id="l" href="#">&laquo;</a>-->
        <a href="#" onclick="change(this.id,'Nothing')" style="display:none;" id="1">1</a>
        <!--<a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>-->
      <!--  <a href="#">&raquo;</a> -->
      </div>

      </td>
      </tr>
      </table>
  </div>

</body>
</html>

<script>
for(var i=0;i<8;i++)
{
  var div=document.getElementById("g"+(i+1));
  var img=div.firstChild.nextSibling;console.log(img);
  img.setAttribute("id","img");

  var but=document.createElement("button");
  but.setAttribute("id","but"+(i+1));
  but.setAttribute("class","desc1");
  but.textContent="Add To Cart";
  but.setAttribute("onclick","addtocart(this.id)");
  div.appendChild(but);
}

function oncheck(a)
{
    if(document.getElementById(a).checked)
      {
        localStorage.setItem("check",a);
      }
      change(1,localStorage.getItem("check"));
}

function change(x,y)
{
  var button=document.getElementById(x);
  button.setAttribute("href","tempshop.php?id="+(x)+"&category="+(y)+"&array1="+(arrayofchosenobjects));
  window.location.href="tempshop.php?id="+(x)+"&category="+(y)+"&array1="+(arrayofchosenobjects);
}
var ar;
function onload()
{
  ar = <?php echo json_encode($rows); ?>;
  console.log(ar);
  console.log(ar.length);
  for(var i=1;i<=8;i++)
  {
    var a=document.getElementById("g"+i);
    var img=document.querySelector("#g"+i+">img");
    var p1=img.nextSibling.nextSibling;
    img.src=""+ar[i-1]['Source'];
    p1.innerHTML="Item : "+ar[i-1]['Name'];
    p1.nextSibling.nextSibling.innerHTML="Price : Rs."+ar[i-1]['Price'];
    // p1.nextSibling.nextSibling.nextSibling.nextSibling.innerHTML="Location : "+ar[i-1]['Location'];
    // p1.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.innerHTML="Vaccination Status : "+ar[i-1]['Vaccination Status'];
  }
  var i=1;
  var pag=document.getElementById("pagination");
  for(i=1; i<=ar[8]; i++)
  {
    var ai=document.createElement("a");
    ai.setAttribute("href","#");
    ai.setAttribute("onclick","change(this.id,'Nothing')");
    ai.setAttribute("id",""+i);
    ai.textContent=i;
    pag.appendChild(ai);
  }
}

var arrayofchosenobjects=[];

function addtocart(z)
{
  var ele=document.getElementById(z);
  ele.setAttribute("onclick","");
  var parent = ele.parentNode;
  var pid = parent.id[1];
  var eid = ar[pid-1]['Id'];
  arrayofchosenobjects.push(eid);
  // var form=document.createElement("form");
  // var url=window.location.href;console.log(url);
  // form.action=url;
  // form.method="post";
  // var ip=document.createElement("input");
  // ip.type="hidden";
  // ip.value=arrayofchosenobjects;
  // form.appendChild(ip);
  // document.body.appendChild(form);

  // document.body.unload=function(){window.location.href+="&array="+arrayofchosenobjects;}
  // form.submit();
  var x=window.location.href;
  window.location.href=x+"&array1="+(arrayofchosenobjects);
}

</script>
