<html>
<head>
<title></title>
<link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
<?php
include("header.php");
?>
<div class="text">
<h1>Welcome To Admin Pannel</h1>
</div>
<div class="container">
	<div class="heading">
    ADD CATEGORY
    </div>
    	<div class="list-form">
    <form method="post">
    <table width="100%" cellpadding="10px" >
		<?php
			if(isset($_POST["sub"])){
				$t= $_POST["title"];
				$c_name= $_POST["name"];
				$sql= mysqli_query($con,"insert into `category` values('','$t','$c_name')");

			}
		?>
    <tr><th colspan="2" >Add New Category</th></tr>
    <tr><th>Title</th><td><input type="text" name="title" class="frm"></td></tr>
    <tr><th>Category Name</th><td><input type="text" name="name" class="frm"></td></tr>
<tr><td colspan="2"><input type="submit" name="sub" value="submit" class="btn" ></td></tr>
    </table>
    </form>
    </div>
    <div class="record">
    <table width="100%" cellspacing="0">
    <!-- <tr><th>Category_id</th><th>Title</th><th>Name</th><th>Action</th></tr> -->
		<?php
			require("data_connect.php");
			$sql= mysqli_query($con,"select * from `category`");
			$col= mysqli_num_fields($sql);
			echo "<tr>";
			for($i=0;$i<$col;$i++)
			{
				$nm= mysqli_fetch_field($sql);
				echo "<th>$nm->name</th>";
			}
			echo "<th>Action</th></tr>";
			while($rec=mysqli_fetch_array($sql))
			{
				echo "<tr>";
				for($j=0;$j<$col;$j++)
				{
					echo "<td>$rec[$j]</td>";
				}
				echo "<td>
				<input type='button' class='btn' value='Edit' onclick='edit($rec[0])'/> <input type='button' class='btn' value='Delete' onclick='del($rec[0])' />
				</td></tr>";																										//href= 'del.php?n=$rec[0]'
			}
		?>
	</table>
    </div>
</div>
<script>

function edit(t){
	location="edit_category.php?n="+t;
}

function del(t)
{
	var a=confirm("Are you sure to delete?");
	if(a==true)
	{
		location="del_category.php?n="+t;
	}
}
</script>
</body>
</html>
