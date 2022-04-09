<?php
session_start();
//echo"$user_id";
if(isset($_SESSION['user_name'])){
$luser=$_SESSION['user_name'];
}else{
   echo "<script>window.location.href='index.php'</script>";
   // echo "Please login to continue";
}
?>