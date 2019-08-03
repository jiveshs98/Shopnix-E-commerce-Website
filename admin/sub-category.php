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
  <div class="heading"> ADD SUB-CATEGORY </div>
  <?php
	if(isset($_POST['sub']))
	{
		$cid=$_POST['cid'];
		$name=$_POST['name'];
		$sql=mysqli_query($con,"insert into `sub_category` values ('', '$cid', '$name')");
		header("location:sub-category.php");
		echo"insertes value";
	}
	?>
  <div class="list-form">
    <form method="post">
      <table width="100%" cellpadding="10px" >
        <tr>
          <th colspan="2" >Add New Sub Category</th>
        </tr>
        <tr>
          <th>Category</th>
          <td><select name="cid" class="frm" onChange="get_subcat(this.value);">
              <option>Category</option>
              <?php
				$sql=mysqli_query($con,"select * from `category`");
				while($cat=mysqli_fetch_array($sql))
				{
					echo "<option value='$cat[category_id]'>$cat[c_name]</option>";
				}
				?>
            </select></td>
        </tr>
        <!--tr><th>Sub-category Name</th><td><input type="text" name="name" class="frm"></td></tr-->
        <tr>
          <th>Sub-category Name</th>
          <td><input type="text" name="name" class="frm"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="sub" value="submit" class="btn" ></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="record">
    <table width="100%" cellpadding="3px">
      <tr>
        <th>S.No</th>
        <th>Category Name</th>
        <th>Sub-category Name</th>
        <th>Action</th>
      </tr>
     <?php
	$sql=mysqli_query($con,"select * from `sub_category`");
	$i=0;
	while($rec=mysqli_fetch_array($sql))
	{
		$i++;
		$data=mysqli_query($con,"select * from `category` where `category_id`='$rec[category_id]'");
		$sub=mysqli_fetch_array($data);
		echo "<tr>
			  <td>$i</td>
			  <td>$sub[c_name]</td>
			  <td>$rec[s_name]</td>
			  <td><input type='button' class='btn' value='Edit' onclick='edit($rec[0])'/> <input type='button' class='btn' value='Delete' onclick='del($rec[0])' /></td>
			  </tr>";
	}
	?>
    </table>
  </div>
</div>
<script>

function edit(t){
	location="edit_subcategory.php?n="+t;
}

function del(t)
{
	var a=confirm("Are you sure to delete?");
	if(a==true)
	{
		location="del_subcategory.php?n="+t;
	}
}
</script>
</body>
</html>
