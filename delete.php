<?php
include("connections.php");
include("dashboard.php");

$delete = mysqli_query($con,"delete from feedpost where id = '$postid'"); // delete query
if($delete){
  mysqli_close($con);
  header('location:dashboard.php');
  exit;
}
else{
  echo "Error deleting post";
}
 ?>