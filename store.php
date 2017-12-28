<?php
$dbname="CSV_DB";
$username="root";
$password="";
$host="localhost";
$myconnection=mysqli_connect($host,$username,$password,$dbname);
$rows=array();
$db=array();
$globalquery="SELECT * FROM dogs";
$globalresult=mysqli_query($myconnection,$globalquery);
if(mysqli_num_rows($globalresult)>0)
  while($row = mysqli_fetch_assoc($globalresult))
    array_push($db,$row);

function call($db,$id)
{
  global $rows;
  $rows=array();
  $i=($id-1)*8 + 1;
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
      call($db,$id);return;
  }
  else if($category=="age")
  {
    $db=agesort($db);
    call($db,$id);return;
  }
  else
  {
    $db=locationsort($db,$category);
    call($db,$id);
  }

}
?>

<html>
<a href="#" onclick="change(this.id)" id="1">1</a>
<a href="#" onclick="change(this.id)" id="2">2</a>
<a href="#" onclick="change(this.id)" id="3">3</a>
<a href="#" onclick="change(this.id)" id="4">4</a>
<a href="#" onclick="change(this.id)" id="5">5</a>
</html>

<script>

function change(x,y)
{
  var button=document.getElementById(x);
  button.setAttribute("href","store.php?id="+(x)+"&category="+(y));
}

function onload()
{
  var ar = <?php echo json_encode($rows); ?>;
  console.log(ar);
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
}

function locate(z)
{
  var b=document.getElementById(z);
  var loc=b.innerHTML;
  y=loc;
  change(1,y);
}
</script>
