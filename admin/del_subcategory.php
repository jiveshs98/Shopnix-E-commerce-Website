<?php
$qs=$_REQUEST['n'];
include("data_connect.php");
$sql= mysqli_query($con,"delete from `sub_category` where `sub_category_id`='$qs'");
header("location:sub-category.php");
?>
