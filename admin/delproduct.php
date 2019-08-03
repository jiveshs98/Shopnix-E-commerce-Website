<?php
$qs=$_REQUEST['n'];
include("data_connect.php");
$sql= mysqli_query($con,"delete from `product` where `p_id`='$qs'");
header("location:product.php");
?>