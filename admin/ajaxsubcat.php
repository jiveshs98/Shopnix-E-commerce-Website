<?php
include("data_connect.php");
$qs= $_REQUEST['n'];
$sql=mysqli_query($con,"select * from `sub_category` where `category_id`='$qs'");
echo "<option value=''>select...</option>";

 while($cat=mysqli_fetch_array($sql))
 {
 	echo "<option value='$cat[sub_category_id]'>$cat[s_name]</option>";
 }
?>
