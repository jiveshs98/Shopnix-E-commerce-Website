<?php
session_start();
require("admin/data_connect.php");
$rec=$_REQUEST['n'];
if(isset($_POST['save']))
{
	$name=$_POST['firstname'];
	$last=$_POST['lastname'];
	$birthday=$_POST['birthday'];
	$password=$_POST['password'];
	$sql=mysqli_query($con,"UPDATE `user` SET `name`='$name',`birthday`='$birthday',`last_name`='$last' ,`password`='$password' WHERE `uid`='$rec'");
	header("location:profile.php");
}
 ?>