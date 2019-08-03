<html>
<head>
<title></title>
<link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
<?php
include("header.php");
$qs= $_REQUEST['n'];
$sql= mysqli_query($con,"select * from `category` where `category_id`='$qs'");
$rec= mysqli_fetch_array($sql);

if(isset($_POST["sub"])){
	$t= addslashes($_POST["title"]);
	$c_name= $_POST["name"];
$sql= mysqli_query($con,"update `category` set `title`='$t', `c_name`='$c_name' where `category_id`='$qs'");
	header("location:category.php");
}
else{
	echo "Error";
}
?>
<div class="text">
<h1>Welcome To Admin Pannel</h1>
</div>
<div class="container">
	<div class="heading">
    EDIT CATEGORY
    </div>
		<div class="list-form">
			<form method="post">
				<table width="100%" cellpadding="10px" >

					<tr><th colspan="2" >Edit Category</th></tr>
					<tr><th>Title</th><td><input type="text" name="title" class="frm" value="<?= stripslashes($rec[1]);?>"></td></tr>
					<tr><th>Category Name</th><td><input type="text" name="name" class="frm" value="<?= $rec[2]?>"></td></tr>
					<tr><td colspan="2"><input type="submit" name="sub" value="submit" class="btn" ></td></tr>
				</table>
			</form>
		</div>

</div>

</body>
</html>
