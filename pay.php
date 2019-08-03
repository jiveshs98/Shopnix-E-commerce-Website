<?php
session_start();
require("admin/data_connect.php");
if(isset($_POST['sub']))
{
	$_SESSION['pay']='payment';
	$em=$_SESSION['em'];
	$name=$_POST['firstname']." ".$_POST['lastname'];
	$product_id=$_POST['pid']; 
	$pr_quantity=$_POST['qunt'];
	$sql=mysqli_query($con,"select * from `product` where `p_id`='$product_id'");
    $prd=mysqli_fetch_array($sql);
	$pro_totalprize=$prd['p_price']*$pr_quantity;
	$user_id=mysqli_query($con,"select * from `user` where `email`='$em'");
	$user_ui=mysqli_fetch_array($user_id);
	$uid=$user_ui['uid'];//echo $uid;
	$mobile=$_POST['phone'];
	$address=$_POST['address1'];
	$date=date("Y-m-d");
	$sql=mysqli_query($con,"INSERT INTO `order`(`o_id`, `p_id`, `quantity`, `total_prize`, `uid`, `address`, `email`, `contact`, `booking_date`, `status`) VALUES ('', '$product_id', '$pr_quantity', '$pro_totalprize', '$uid', '$address', '$em', '$mobile', '$date', '1')");
	echo ("<script>location='paymentdetail.php'</script>");
	
}