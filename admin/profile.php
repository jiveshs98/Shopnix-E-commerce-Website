<html>
<head>
<title>Admin Pannel</title>
<link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
<?php
include("header.php");
$em=$_SESSION['emses'];
?>
<div class="text">
<h1>Welcome To Admin Pannel</h1>
</div>
<div class="container">
	<div class="heading">
    PROFILE
    </div>
    <div class="record">
    <table width="100%" cellpadding="3px">
    <tr><th>Admin Name</th><th>Address</th><th>Contact</th><th>Username</th><th>Email</th><th>Action</th></tr>
    <?php
	$sql=mysqli_query($con,"select * from `admin` where `email`='$em' or `nickname`='$em'");
	$user=mysqli_fetch_array($sql);
	echo "<tr>
		  <td>$user[name]</td>
		  <td>$user[address]</td>
		  <td>$user[contact]</td>
		  <td>$user[nickname]</td>
		  <td>$user[email]</td>
		  <td><input type='button' class='btn' value='Change Username or Password' onclick='edit()'/></td></tr>";
	?>
	</table>
    </div>
</div>
<script>

function edit(t){
	location="edit_profile.php";
}

</script>
</body>
</html>
