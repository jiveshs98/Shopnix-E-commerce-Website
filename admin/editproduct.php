<html>
<head>
<title></title>
<link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
<?php
include("header.php");
$qs=$_REQUEST['n'];
$sql=mysqli_query($con,"select * from `product` where `p_id`='$qs'");
$prd=mysqli_fetch_array($sql);
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
		$scid=$_POST['scid'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$detail=$_POST['detail'];
		$store=$_POST['store'];
		$offer=$_POST['offer'];
		$mdetail=$_POST['mdetail'];
		$file=$_FILES['image']['name'];
		if($file=='')
		{
			$img=$prd['p_image'];
		}
		else
		{
			unlink("../product/$prd[p_image]");
		$img=rand(111111,999999)."_".time()."_".$file;
		move_uploaded_file($_FILES['image']['tmp_name'],'../product/'.$img);
		}
		date_default_timezone_set("asia/kolkata");
		$dt=date("Y-m-d");
		$sql=mysqli_query($con,"update `product` set `cid`='$cid', `scid`='$scid', `p_name`='$name', `p_image`='$img', `p_price`='$price', `p_detail`='$detail', `p_store`='$store', `p_offer`='$offer', `p_more_detail`='$mdetail', `p_date`='$dt' where `p_id`='$prd[p_id]'");
		header("location:product.php");
	}
	?>
  <div class="list-form">
    <form method="post" enctype="multipart/form-data">
      <table width="100%" cellpadding="10px" >
        <tr>
          <th colspan="2" >Add New Sub Category</th>
        </tr>
        <tr>
          <th>Category</th>
          <td><select name="cid" class="frm">
              <?php
				$sql=mysqli_query($con,"select * from `category`");
				while($cat=mysqli_fetch_array($sql))
				{
					if($cat['category_id']==$prd['cid'])
					echo "<option value='$cat[category_id]' selected>$cat[c_name]</option>";
					else
					echo "<option value='$cat[category_id]'>$cat[c_name]</option>";
				}
				?>
            </select></td>
        </tr>
        <tr>
          <th>Sub Category</th>
          <td><select name="scid" class="frm" id="demo" >
             <!-- <script>
				setInterval("fun()",1000);
				function fun()
				{
					if(navigator.appearance=="Microsoft Internet Explorer")
          	var obj= new ActiveXObject();
          else{
            var obj=new XMLHttpRequest();
          }
          obj.open("GET","ajaxsubcat.php",true);
          obj.send();
          obj.onreadystatechange= function()
          {
            if(obj.readyState==4)
            {
              document.getElementById("demo").innerHTML=obj.responseText;
            }
          }
				}
            </script> -->
         <?php
				$sql=mysqli_query($con,"select * from `sub_category`");
				while($cat=mysqli_fetch_array($sql))
				{
					if($cat['sub_category_id']==$prd['scid'])
					echo "<option value='$cat[sub_category_id]' select>$cat[s_name]</option>";
					 else
					 echo "<option value='$cat[sub_category_id]'>$cat[s_name]</option>";
				}
				?>
            </select></td>
        </tr>
        <tr>
          <th>Name</th>
          <td><input type="text" value="<?= $prd['p_name']?>" name="name" class="frm"></td>
        </tr>
        <tr>
          <th>Image</th>
          <td><img src='../product/<?= $prd['p_image']?>' height="100px" align="right"><input type="file" name="image" class="frm"></td>
        </tr>
        <tr>
          <th>Price</th>
          <td><input type="text" name="price" class="frm" value="<?= $prd['p_price']?>"></td>
        </tr>
        <tr>
          <th>Detail</th>
          <td><textarea name="detail" class="frm"><?= $prd['p_detail']?></textarea></td>
        </tr>
        <tr>
          <th>Store</th>
          <td><input type="text" name="store" class="frm" value="<?= $prd['p_store']?>"></td>
        </tr>
        <tr>
          <th>Offer</th>
          <td><input type="text" name="offer" class="frm" value="<?= $prd['p_offer']?>"></td>
        </tr>
        <tr>
          <th>More Detail</th>
          <td><textarea name="mdetail" class="frm"><?= $prd['p_more_detail']?></textarea></td>
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
