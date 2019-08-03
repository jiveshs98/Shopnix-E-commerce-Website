<?php
 	session_start();
	if($_SESSION['ses']!="jskhbddksdasu")
	{
		header("location: login.php");
	}
	require("data_connect.php");
?>
<div class="head">
	<div class="header">
		<div class="logo">
    		<img src="../images/logo.jpg">
        </div>
    </div>
</div>

<div class="menu">
	<ul>
    	<li><a href="index.php">Dashboard</a></li>
        <li><a href="category.php">Category</a></li>
        <li><a href="sub-category.php">Sub Category</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="user.php">User</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="setting.php">Setting</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
