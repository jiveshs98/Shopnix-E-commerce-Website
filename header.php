<?php
	include("admin/data_connect.php");
	$sql= mysqli_query($con,"select * from `category`");
	$sub= mysqli_query($con,"select * from `sub_category`");
?>
<div class="login-pop" id="login-pop">
	<div class="login">
    	<div onclick="loginclose()" style="float:right;background:#555;padding:0px 8px;color:#fff;cursor:pointer;margin:-10px;">&times;</div>
		<div class="login-header">
				<center>
					<br /><h1>LOGIN</h1>
				</center>
		</div>
		<table cellspacing="0" cellpadding="5">
			<form method="post" action="action.php">
				<tr><td><input type="text" name="email" placeholder="Enter E-mail" /></td></tr>
				<tr><td><input type="password" name="pass" placeholder="Enter Password" /></td></tr>
				<tr><td><input type="submit" value="Submit" name="login" /></td></tr>
			</form>
		</table>
		<div style="padding:20px;text-align:right;">New User <a href="signup.php">Join Us</a></div>
	</div>
</div>

<header id="header">
<div class="header-top">
		<div class="container">
			<div class="header_logo" style="width:200px;margin-top: 27px;">
				<a href="index.php">
				<img class="logo img-responsive" src="front/img/shopnix-large-logo.png" alt="Bag Shop - Demo Store">
				</a>
			</div>
<div id="desktop_cart">
  <div class="blockcart cart-preview inactive" style="margin-top:49px;">
  	<?php
	if(@$_SESSION['ses']!="asdf6778ysdf")
	{
       echo '<div class="header blockcart-header dropdown js-dropdown">
		<a style="color:#fff;" onclick="loginopen()">
			Login
		</a>
	 </div>';
	}
	 else
	 {
		$em=$_SESSION['em'];
		$fetch=mysqli_query($con,"select * from `user` where `email`='$em'");
		$user=mysqli_fetch_array($fetch);
	?>
    <div class="user-info dropdown js-dropdown open">
  	<span class="user-info-title expand-more _gray-darker" data-toggle="dropdown" aria-expanded="true"><span class="account_text">MY ACCOUNT</span></span>
    <ul class="dropdown-menu" style="display:none;">
	  <li><a><span><?= $user['name'];?></span></a></li>
      <li><a href="booking_order.php"><span>Booking Order</span></a></li>
      <li><a href="profile.php"><span>Profile</span></a></li>
      <li><a href="logout.php"><span>Logout</span></a></li>
    </ul>
  </div>
    <?php
	}
	?>
</div>
</div>

<div class="menu-wrapper">
	<div class="text-xs-left mobile hidden-lg-up mobile-menu">
		<div class="menu-icon">
			<div class="cat-title">Menu</div>
		</div>

		<div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
			<div class="mobile-menu-inner">
				<div class="menu-icon">
					<div class="cat-title">Menu</div>
				</div>
				<div class="js-top-menu mobile" id="_mobile_main_menu"></div>
				<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
			</div>
		</div>
	</div>

	<div class="menu col-lg-12 js-top-menu position-static hidden-md-down" id="_desktop_main_menu">
		<ul class="top-menu  container" data-depth="0">
			<li class="link"><a class="dropdown-item" href="index.php" data-depth="0">Home</a>
			</li>
		<?php
			while($rec= mysqli_fetch_array($sql))
			{
				// echo "<li class='category more_menu' id='more_menu'>
				// 	<a href='' class='dropdown-item' data-depth='0'>
				// 		<span class='pull-xs-right hidden-md-up'>
				// 			<span data-target='#top_moremenu' data-toggle='collapse' class='navbar-toggler collapse-icons'>
				// 				<i class='material-icons add'></i>
				// 				<i class='material-icons remove'></i>
				// 			</span>
				// 		</span>
				// 		$rec[c_name]
				// 		</a>
				// 		<div id='top_moremenu' class='popover sub-menu js-sub-menu collapse' style='display: none;'>
				// 		<ul class='top-menu more_sub_menu'>";
				// 		while($s= mysqli_fetch_array($sub)){
				// 			echo "<li class='cms-page'>
				// 				<a class='dropdown-item' href='' data-depth='0'>";
				// 				if($s['category_id']==$rec['category_id'])
				// 					echo "$s[s_name]";
				// 				echo"</a>
				// 			</li>";
				// 		}
				//
				//
				// 			echo "</ul>
				// 		</div>
				// 	</li>";
				echo "<li class='category more_menu'><a class='dropdown-item' href='' data-depth='0'>$rec[c_name]</a><div id='top_moremenu' class='popover sub-menu js-sub-menu collapse' style='display: none;'><ul class='top-menu more_sub_menu'>";
				$sub=mysqli_query($con,"select * from `sub_category` where `category_id`='$rec[0]'");
				while($rsub=mysqli_fetch_array($sub))
				{
					echo "<li class='category'><a href='part.php?n=$rsub[0]'>$rsub[s_name]</a></li>";
				}
				echo "</ul></div></li>";
			}
		?>
</ul>
	</div>
</div>
		</div>

	</div>
</header>
