<?php
require("data_connect.php");
if(isset($_POST['logo']))
{
	$file=$_FILES['img']['name'];
	$img=rand(11111,99999)."_".$file;
	move_uploaded_file($_FILES['img']['tmp_name'],'../images/'.$img);
	mysqli_query($con,"update `setting` set `image`='$img' where `sid`='1'");
	header("location:setting.php");
}
if(isset($_POST['banner']))
{
	$file=$_FILES['img']['name'];
	$img=rand(11111,99999)."_".$file;
	move_uploaded_file($_FILES['img']['tmp_name'],'../images/'.$img);
	mysqli_query($con,"insert into `setting` values('', 'banner', '$img', '1')");
	header("location:setting.php");
}