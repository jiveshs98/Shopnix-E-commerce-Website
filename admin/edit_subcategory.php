<html>
<head>
<title></title>
<link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
<?php
include("header.php");
$qs= $_REQUEST["n"];
$sql= mysqli_query($con,"select * from `sub_category` where `sub_category_id`='$qs'");
$sub= mysqli_fetch_array($sql);

if(isset($_POST["sub"]))
{
	$cid= $_POST["cid"];
	$s_name= $_POST["name"];
	$sql= mysqli_query($con,"update `sub_category` set `category_id`='$cid', `s_name`='$s_name' where `sub_category_id`='$qs'");
	header("location:sub-category.php");
}
?>
<div class="text">
  <h1>Welcome To Admin Pannel</h1>
</div>
<div class="container">
  <div class="heading"> EDIT SUB-CATEGORY </div>

  <div class="list-form">
    <form method="post">
      <table width="100%" cellpadding="10px" >
        <tr>
          <th colspan="2" >Edit Sub Category</th>
        </tr>
        <tr>
          <th>Category</th>
          <td><select name="cid" class="frm">
              <!-- <option>Category</option> -->
              <?php
								$sql=mysqli_query($con,"select * from `category`");
								while($cat= mysqli_fetch_array($sql))
								{
									if($cat['category_id']==$sub['category_id']){
										echo "<option value='$cat[category_id]' selected>$cat[c_name]</option>";
									}
									else{
										echo "<option value='$cat[category_id]'>$cat[c_name]</option>";
									}
								}
							?>
            </select></td>
        </tr>
        <!--tr><th>Sub-category Name</th><td><input type="text" name="name" class="frm"></td></tr-->
        <tr>
          <th>Sub-category Name</th>
          <td><input type="text" name="name" class="frm" value="<?= stripslashes($sub['s_name']);?>"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="sub" value="submit" class="btn" ></td>
        </tr>
      </table>
    </form>
  </div>

</div>
</body>
</html>
