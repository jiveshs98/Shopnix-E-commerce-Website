<?php
session_start();
require("admin/data_connect.php");
$rec=$_REQUEST['n'];
if(isset($_POST['sub']))
{
	$company=$_POST['company'];
	$address=$_POST['address1'];
	$caddress=$_POST['adddress2'];
	$city=$_POST['city'];
	$postcode=$_POST['postcode'];
	$state=$_POST['id_state'];
	$country=$_POST['id_country'];
	$phone=$_POST['phone'];
	$sql=mysqli_query($con,"UPDATE `user` SET `address`='$address',`country`='$country',`state`='$state',`City`='$city',`zip/postal_code`='$postcode',`Phone`='$phone',`address_complement`='$caddress',`Company`='$company' WHERE `uid`='$rec'");
	header("location:profile.php");
}
 ?>