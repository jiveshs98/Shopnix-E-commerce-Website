<?php
session_start();
require("admin/data_connect.php");
if(isset($_POST['sub']))
{
	$name=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$birthday=$_POST['birthday'];
	$sql=mysqli_query($con,"insert into `user`(`uid`, `name`, `email`, `password`, `contact`, `birthday`,`last_name`) values ('', '$name', '$email', '$password','$mobile', '$birthday','$lastname')");
	header("location:index.php");
}
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql=mysqli_query($con,"select * from `user` where `email`='$email' and `password`='$pass'");
	$no=mysqli_num_rows($sql);
	if($no==1)
	{
		$_SESSION['ses']="asdf6778ysdf";
		$_SESSION['em']=$email;
		header("location:index.php");
	}
	else
	{
		echo "<script>alert('wrong emailid and password');location='index.php';</script>";
	}
}
if(isset($_POST['book']))
{
	$pid=$_POST['pid'];
	$qty=$_POST['qty'];
	$_SESSION['product']=$pid."*".$qty;
	if($_SESSION['ses']=="asdf6778ysdf")
	{
		echo "<script>location='booking.php'</script>";
	}
	else
	{
		echo "<script>location='login.php'</script>";
	}
}
if(isset($_POST['signin']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$sql=mysqli_query($con,"select * from `user` where `email`='$email' and `password`='$pass'");
	$no=mysqli_num_rows($sql);
	if($no==1)
	{
		$_SESSION['ses']="asdf6778ysdf";
		$_SESSION['em']=$email;
		header("location:booking.php");
	}
	else
	{
		echo "<script>alert('wrong emailid and password');location='login.php';</script>";
	}
}
?>