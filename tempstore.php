<?php
session_start();
include("log.php");
if($_SESSION['c']== 1)
  { header("Location: tempstore.php?id=1&category=default");
    $_SESSION['c']=0;exit();
  }
$dbname="CSV_DB(1)";
$username="root";
$password="";
$host="localhost";
$myconnection=mysqli_connect($host,$username,$password,$dbname);
$rows=array();
$db=array();
$globalquery="SELECT * FROM dogs";
$globalresult=mysqli_query($myconnection,$globalquery);
if(!isset($_SESSION['array']))
{
  $_SESSION['array']=array();
}
if(isset($_GET['array']))
  {
    array_push($_SESSION['array'],$_GET['array']);
    // print_r($_SESSION['array']);
  }
if(mysqli_num_rows($globalresult)>0)
  while($row = mysqli_fetch_assoc($globalresult))
  {
    foreach ($row as $value)  {
    if($value!=null)
    array_push($db,$row);
    break;
    }
  }
if(isset($_SESSION['email']))
{
  // echo "Hello ".$$_SESSION['fname']."<br>";
  // echo "Logout";
}
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
// breedsort($myconnection);
function locationsort($db,$city)
{
  $newdb=array();
  // $query="SELECT Location FROM dogs";
  // $results=mysqli_query($mycon,$query);
  // $cities=array();
  // global $db;
  // if (mysqli_num_rows($results) > 0) {
  // while($row = mysqli_fetch_assoc($results))
  // {
  //     array_push($cities,$row["Location"]);
  // }
  // $cities=array_unique($cities);
  // }
    // echo $value;
    // $query1="SELECT * FROM dogs WHERE Location='".$value."'";
    // $results1=mysqli_query($mycon,$query1);
    // if(mysqli_num_rows($results1)>0)
    // {
    //   while($row = mysqli_fetch_assoc($results))
    //   {
    //       echo $row["Img Location"];
    //   }
    // }
 foreach ($db as $row)
  {
    foreach ($row as $item)
    {
      if($item==$city)
        array_push($newdb,$row);
    }
  }
  return $newdb;
}
// // locationsort($myconnection);
// // function sexsort($mycon)
// // {
// //   $queryM="SELECT * FROM dogs WHERE Sex=M";
// //   $queryF="SELECT * FROM dogs WHERE Sex=F";
// //
// //   $resultsM=mysqli_query($mycon,$queryM);
// //   $resultsF=mysqli_query($mycon,$queryF);
// //
// //   if(mysqli_num_rows($resultsM)>0)
// //   {
// //     while($row = mysqli_fetch_assoc($resultsM))
// //     {
// //         echo $row["Img Location"];
// //     }
// //   }
// //   if(mysqli_num_rows($resultsF)>0)
// //   {
// //     while($row = mysqli_fetch_assoc($resultsF))
// //     {
// //         echo $row["Img Location"];
// //     }
// //   }
// // }
// // sexsort($myconnection);
function agesort($db)
{
  $ages=array();
  foreach ($db as $key=>$row)
  {
    $ages[$key]=$row['aage'];
  }
  array_multisort($ages,SORT_ASC,$db);
  return $db;
}

function breedsort($db)
{
  global $myconnection;
  $query="SELECT `Dog Breed` FROM dogs";
  $results=mysqli_query($myconnection,$query);
  $breeds=array();
  if(mysqli_num_rows($results)>0)
  {
    while($row = mysqli_fetch_assoc($results))
    {
      array_push($breeds,$row['Dog Breed']);
    }
  }
  $newdb=array();
  $breeds=array_unique($breeds);
  foreach ($breeds as $value)
  {
    // echo $value;
    // $query1="SELECT * FROM dogs WHERE Location='".$value."'";
    // $results1=mysqli_query($mycon,$query1);
    // if(mysqli_num_rows($results1)>0)
    // {
    //   while($row = mysqli_fetch_assoc($results))
    //   {
    //       echo $row["Img Location"];
    //   }
    // }
    foreach ($db as $items)
    {
      if($items["Dog Breed"]==$value)
        array_push($newdb,$items);
    }
  }
  return $newdb;
}
// // breedsort($myconnection);
// // agesort($myconnection);

if(isset($_GET["id"]))
{
   $id=$_GET["id"];
   unset($_GET["id"]);
   $category=$_GET["category"];
   if($category=="default")
  {
    call($db,$id);

  }
  else if($category=="breed")
  {
      $db=breedsort($db);
      call($db,$id);
  }
  else if($category=="age")
  {
    $db=agesort($db);
    call($db,$id);
  }
  else
  {
    $db=locationsort($db,$category);
    call($db,$id);
  }

}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />
  <link rel="stylesheet" href="tempstore.css">
</head>
<body onload="onload();" unload="unload();">
  <script src="storescript.js"></script>

<!-- <div id="cover"> -->
<img id="logo" src="adogtion11.jpg"></img>
<a href="Home.html"><img id="home" src="home.png"></img></a>
<a href="cart.php#carting"><img id="cart" src="cart.png"></img></a>
<div class="navbar" id="store">
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
      <a class="active" href="tempstore.php?id=1&category=default">Dog Store</a>
      <a href="tempshop.php?id=1&category=Nothing">Dog Shop</a>
    </div>
  </li>
  <li><a href="news.html#p8">News</a></li>
  <li><a  href="donate.php#donate">Donate</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>

<div style="max-width:100%;">
<div class="bar">
  <div class="foldout" style="float:right;">
    <button class="foldbtn"><img src="hmb.png" height="50" width="50" id="menubutton"></button>
    <div class="fold-content">
      <p style="color:white font-size:20px; font-weight:bold;">SORT BY:</p>
      <input type="radio" href="#" onclick="breed(this.id)" id="breed" class="menuoption" name="sortoption" value="breed">Breed</a><br/><br/>
      <input type="radio" href="#" onclick="age(this.id)" id="age" class="menuoption" name="sortoption" value="age">Age</a><br/><br/>
      <div class="locout">
        <!-- <button class="loc">Location</button> -->
        <input type="radio" class="menuoption" name="sortoption" value="loc">Location</button><br/><br/>
      <div class="locmenu">
        <a href="#" value="Bangalore" onclick="locate(this.id)" id="l1">Bangalore</a>
        <a href="#" value="Mangalore" onclick="locate(this.id)" id="l2">Mangalore</a>
        <a href="#" value="Delhi" onclick="locate(this.id)" id="l3">Delhi</a>
        <a href="#" value="Kolkata" onclick="locate(this.id)" id="l4">Kolkata</a>
        <a href="#" value="Chennai" onclick="locate(this.id)" id="l5">Chennai</a>
        <a href="#" value="Mumbai" onclick="locate(this.id)" id="l6">Mumbai</a>
        <a href="#" value="Mysore" onclick="locate(this.id)" id="l7">Mysore</a>
        <a href="#" value="Pune" onclick="locate(this.id)" id="l7">Pune</a>
        <a href="#" value="Hyderabad" onclick="locate(this.id)" id="l7">Hyderabad</a>
      </div>
    </div>

    </div>
  </div>
    <p  class="heading">Dog Store</p><br/><br/>
</div>
        <table>
        <tr>
        <td>
        <div class="gallery" id="g1">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
            <p class=desc1>Breed</p>
            <p class=desc1>Age</p>
            <p class=desc1>Location</p>
            <p class=desc1>Vaccination Status : </p>
            <br/>
            <button class="desc1" onclick="addtocart(this.id)" id="but1">Add to cart</button>
        </div>
      </td>
      <td>
        <div class="gallery" id="g2">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Breed</p>
          <p class=desc1>Age</p>
          <p class=desc1>Location</p>
          <p class=desc1>Vaccination Status : </p>
          <br/>
          <button class="desc1" onclick="addtocart(this.id)" id="but2">Add to cart</button>

        </div>
      </td>
      <td>
        <div class="gallery" id="g3">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Breed</p>
          <p class=desc1>Age</p>
          <p class=desc1>Location</p>
          <p class=desc1>Vaccination Status : </p>
          <br/>
          <button class="desc1" onclick="addtocart(this.id)" id="but3">Add to cart</button>

      </td>
      <td>
        <div class="gallery" id="g4">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Breed</p>
          <p class=desc1>Age</p>
          <p class=desc1>Location</p>
          <p class=desc1>Vaccination Status : </p>
          <br/>
          <button class="desc1" onclick="addtocart(this.id)" id="but4">Add to cart</button>

      </td>
      </tr>
      <tr>
      <td>
        <div class="gallery" id="g5">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Breed</p>
          <p class=desc1>Age</p>
          <p class=desc1>Location</p>
          <p class=desc1>Vaccination Status : </p>
          <br/>
          <button class="desc1" onclick="addtocart(this.id)" id="but5">Add to cart</button>

      </td>
      <td>
        <div class="gallery" id="g6">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Breed</p>
          <p class=desc1>Age</p>
          <p class=desc1>Location</p>
          <p class=desc1>Vaccination Status : </p>
          <br/>
          <button class="desc1" onclick="addtocart(this.id)" id="but6">Add to cart</button>

      </td>
      <td>
        <div class="gallery" id="g7">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Breed</p>
          <p class=desc1>Age</p>
          <p class=desc1>Location</p>
          <p class=desc1>Vaccination Status : </p>
          <br/>
          <button class="desc1" onclick="addtocart(this.id)" id="but7">Add to cart</button>

        </div>
      </td>
      <td>
        <div class="gallery" id="g8">
          <img id="img" src="images.jpg" alt="something" onclick=modal(this)>
          <p class=desc1>Breed</p>
          <p class=desc1>Age</p>
          <p class=desc1>Location</p>
          <p class=desc1>Vaccination Status : </p>
          <br/>
          <button class="desc1" onclick="addtocart(this.id)" id="but8">Add to cart</button>

        </div>
      </td>
      </tr>
      </table>
      <div id="myModal" class="modal">
        <span class="close">x</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>
      <br/>
      <div class="pagination" id="pagination">
        <!-- <a href="#">&laquo;</a>
        <a href="#" onclick="change(this.id,'default')" id="1">1</a>
        <a href="#" onclick="change(this.id,'default')" id="2">2</a>
        <a href="#" onclick="change(this.id,'default')" id="3">3</a>
        <a href="#" onclick="change(this.id,'default')" id="4">4</a>
        <a href="#" onclick="change(this.id,'default')" id="5">5</a>
        <a href="#" onclick="change(this.id,'default')" id="6">6</a>
        <a href="#" onclick="change(this.id,'default')" id="7">7</a>
        <a href="#" onclick="change(this.id,'default')" id="8">8</a>
        <a href="#" onclick="change(this.id,'default')" id="9">9</a>
        <a href="#">&raquo;</a> -->
      </div>
  </div>

</body>
</html>

<script>

function change(x,y)
{ y="default";
  var button=document.getElementById(x);
  if(document.getElementById("breed").checked)
    {
      y="breed";
      localStorage.setItem("checked","breed");
    }
  if(document.getElementById("age").checked)
    {
      y="age"
      localStorage.setItem("checked","age");
    }

    if(localStorage.getItem("checked")=="breed")
      y="breed";
    if(localStorage.getItem("checked")=="age")
      {y="age";console.log("a");}
  button.setAttribute("href","tempstore.php?id="+(x)+"&category="+(y)+"&array="+(arrayofchosenobjects));
  window.location.href="tempstore.php?id="+(x)+"&category="+(y)+"&array="+(arrayofchosenobjects);
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
    img.src="dogpics/"+ar[i-1]['Img Location'];
    p1.innerHTML="Breed : "+ar[i-1]['Dog Breed'];
    p1.nextSibling.nextSibling.innerHTML="Age : "+ar[i-1]['aage'];
    p1.nextSibling.nextSibling.nextSibling.nextSibling.innerHTML="Location : "+ar[i-1]['Location'];
    p1.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.innerHTML="Vaccination Status : "+ar[i-1]['Vaccination Status'];
  }
  var i=1;
  var pag=document.getElementById("pagination");
  for(i=1; i<=ar[8]; i++)
  {
    var ai=document.createElement("a");
    ai.setAttribute("href","#");
    ai.setAttribute("onclick","change(this.id,'default')");
    ai.setAttribute("id",""+i);
    ai.textContent=i;
    pag.appendChild(ai);
  }
}

function locate(z)
{
  var b=document.getElementById(z);
  var loc=b.innerHTML;
  y=loc;
  b.setAttribute("href","tempstore.php?id="+(1)+"&category="+(loc)+"&array="+(arrayofchosenobjects));
  change(1,y);
}

function breed(q)
{
  var b=document.getElementById(q);
  b.setAttribute("href","tempstore.php?id="+(1)+"&category=breed"+"&array="+(arrayofchosenobjects));
  change(1,"breed");
}

function age(w)
{
  var b=document.getElementById(w);
  b.setAttribute("href","tempstore.php?id="+(1)+"&category=age"+"&array="+(arrayofchosenobjects));
  change(1,"age");

}
var arrayofchosenobjects=[];

function addtocart(z)
{
  var ele=document.getElementById(z);
  ele.setAttribute("onclick","");
  var parent = ele.parentNode;
  var pid = parent.id[1];
  var eid = ar[pid-1]['ID'];
  arrayofchosenobjects.push(eid);
  var form=document.createElement("form");
  // var url=window.location.href;console.log(url);
  // form.action=url;
  // form.method="post";
  var ip=document.createElement("input");
  ip.type="hidden";
  ip.value=arrayofchosenobjects;
  form.appendChild(ip);
  document.body.appendChild(form);
  var x=window.location.href;
  window.location.href=x+"&array="+(arrayofchosenobjects);
  // document.body.unload=function(){window.location.href+="&array="+arrayofchosenobjects;}
  // form.submit();
}

</script>
