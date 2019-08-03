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
		$scid=$_POST['scid'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$detail=$_POST['detail'];
		$store=$_POST['store'];
		$offer=$_POST['offer'];
		$mdetail=$_POST['mdetail'];
		$file=$_FILES['image']['name'];
		$img=rand(111111111,999999999)."_".time()."_".$file;
		move_uploaded_file($_FILES['image']['tmp_name'],'../product/'.$img);
		date_default_timezone_set("asia/kolkata");
		$dt=date("Y-m-d");
		$sql=mysqli_query($con,"insert into `product` values ('', '$cid', '$scid', '$name', '$img', '$price', '$detail', '$store', '$offer', '$mdetail', '$dt', '1')");
		if($sql==true){
			
			header("location:product.php");
		}
		else
		{
			echo "Error";
		}
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
          <td><select name="cid" class="frm" required onChange="fun(this.value)">
              <option value="">Category</option>
              <?php
				$sql=mysqli_query($con,"select * from `category`");
				while($cat=mysqli_fetch_array($sql))
				{
					echo "<option value='$cat[category_id]'>$cat[c_name]</option>";
				}
				?>
            </select></td>
        </tr>
        <tr>
          <th>Sub Category</th>
          <td><select name="scid" class="frm" id="demo">
              <option value="">Sub Category</option>

            </select></td>
        </tr>
        <tr>
          <th>Name</th>
          <td><input type="text" name="name" class="frm"></td>
        </tr>
        <tr>
          <th>Image</th>
          <td><input type="file" name="image" class="frm"></td>
        </tr>
        <tr>
          <th>Price</th>
          <td><input type="text" name="price" class="frm"></td>
        </tr>
        <tr>
          <th>Detail</th>
          <td><textarea name="detail" class="frm"></textarea></td>
        </tr>
        <tr>
          <th>Store</th>
          <td><input type="text" name="store" class="frm"></td>
        </tr>
        <tr>
          <th>Offer</th>
          <td><input type="text" name="offer" class="frm"></td>
        </tr>
        <tr>
          <th>More Detail</th>
          <td><textarea name="mdetail" class="frm"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="sub" value="submit" class="btn" ></td>
        </tr>
      </table>
    </form>
  </div>
</div>

  <script>
    function fun(t){
      var obj= new XMLHttpRequest();
      obj.open("GET","ajaxsubcat.php?n="+t,true);
      obj.send();
      obj.onreadystatechange=function()
      {
        if(obj.readyState==4)
        {
          document.getElementById("demo").innerHTML= obj.responseText;
        }
      }
    }
  </script>
</body>
</html>
