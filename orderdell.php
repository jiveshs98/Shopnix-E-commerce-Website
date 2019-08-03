<?php
$qs=$_REQUEST['n'];
include("admin/data_connect.php");
mysqli_query($con,"delete from `order` where `o_id`='$qs'");
header("location:booking_order.php");
?>