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
    PRODUCTS
   <div style="float:right"><a href="addproduct.php"><input value="Add New Product" type="button"></a></div>
        <div class="clear"></div>
    </div>
        <div class="trecord">
    <table width="100%" cellpadding="3px" cellspacing="0"><tr><th>S.No</th><th>Category</th><th>Sub Category</th><th>Name</th><th>Price</th><th>Image</th><th>Quantity</th><th>Action</th></tr>
		<?php
		$i=0;
		$sql=mysqli_query($con,"select * from `product`");
		
		 while($rec=mysqli_fetch_array($sql))
		 {
			 $i++;
			 $csql= mysqli_query($con,"select * from `category` where `category_id`='$rec[cid]'");
			 $crec= mysqli_fetch_array($csql);
			 $name= $crec['c_name'];
			 $ssql= mysqli_query($con,"select * from `sub_category` where `sub_category_id`='$rec[scid]'");
			 $srec= mysqli_fetch_array($ssql);
			 $sname= $srec['s_name'];


			 echo "<tr>
			 	   <td>$i</td>
				   <td>$name</td>
				   <td>$sname</td>
				   <td>$rec[p_name]</td>
				   <td>$rec[p_price]</td>
				   <td><img src='../product/$rec[p_image]' height='80px'></td>
				   <td>$rec[p_store]</td>
				   <td><a href='editproduct.php?n=$rec[p_id]'><input type='button' value='Edit'  class='btn'></a> | <a href='delproduct.php?n=$rec[p_id]'><input type='button' value='Delete'  class='btn'></a></td>
				   </tr>";
		  }
	 ?>
      </table>
       </div>
    </div>

</body>
</html>
