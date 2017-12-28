<script>
var flag="<?php echo $flag; ?>";
if(flag==1)
  {
    var login=document.getElementById("login");
    login.innerHTML="Logout";
    login.setAttribute("href","logout.php");
  }
</script>
