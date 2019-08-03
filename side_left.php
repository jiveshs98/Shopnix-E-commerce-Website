<div id="left-column" class="col-xs-12" style="width:19.30%">
<div class="menu vertical-menu js-top-menu position-static hidden-md-down">
    <div id="czverticalmenublock" class="block verticalmenu-block">
		<h4 class="block_title">Shop By Category</h4>
    <div class="block_content verticalmenu_block" id="_desktop_top_menu">
               <ul class="top-menu  container" id="top-menu" data-depth="0">
                 <?php
                   $sql= mysqli_query($con,"select * from `category`");
                   while($rec= mysqli_fetch_array($sql))
                   {
                     echo "<li class='category' >
               <a class='dropdown-item' href='product.php?n=$rec[category_id]' data-depth='0'>
                               $rec[c_name]
               </a>
                   </li>";
                   }
                 ?>
               </ul>
   		</div>
	</div>
</div>

</div>
