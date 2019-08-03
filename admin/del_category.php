<?php
$qs=$_REQUEST['n'];
include("data_connect.php");
$sql= mysqli_query($con,"delete from `category` where `category_id`='$qs'");
header("location:category.php");
?>
