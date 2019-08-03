<html>
<head>
<title>Admin Pannel</title>
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
    SETTING   	
    </div>
    <div class="record" style="width:80%;margin:auto;border:none;">
    	<div class="accordian" onClick="logo()">Logo</div>
        <div class="msg" id="logoimg">
        	<div class="logoimg" >
            <?php
			$sql=mysqli_query($con,"select * from `setting` where `sid`='1'");
			$logo=mysqli_fetch_array($sql);
			?>
            	<img src="../images/<?= $logo['image'];?>" height="80px">
            </div>
            <div class="changelogo">
            	<input type="button" class="btn" onClick="logoopen()" value="change logo" >
            </div>
        </div>
        <div class="accordian" onClick="banner()">Banner</div>
        <div class="msg" id="msg" style="display:none">
            <?php
			$sql=mysqli_query($con,"select * from `setting` where `name`='banner'");
			while($bn=mysqli_fetch_array($sql))
			{
			?>
            <div id="addbanner">
            <img src="../images/<?= $bn['image'];?>" height="80px" style="width:100%">
            </div>	
            <?php
			}
			?>
        	<div id="addbanner">
            	<h1 align="center" onClick="openbanner()">+</h1>
            </div>
        </div>
    </div>
</div>
<div class="popupbox" id="logbox">
	<div class="modal">
    	<div class="close" onClick="logoclose()">&times;</div>
        <h1 align="center">Change Logo</h1>
        <form method="post" action="action.php" enctype="multipart/form-data">
        <input type="file" name="img"><br><br>
        <input type="submit" value="submit" name="logo" class="btn" style="width:50%">
        </form>
    </div>
</div>
<div class="popupbox" id="bannerbox">
	<div class="modal">
    	<div class="close" onClick="closebanner()">&times;</div>
        <h1 align="center">Change banner</h1>
        <form method="post" action="action.php" enctype="multipart/form-data">
        <input type="file" name="img"><br><br>
        <input type="submit" value="submit" name="banner" class="btn" style="width:50%">
        </form>
    </div>
</div>
<script>
function logo()
{
	document.getElementById("logoimg").style.display="block";
	document.getElementById("msg").style.display="none";
}
function banner()
{
	document.getElementById("logoimg").style.display="none";
	document.getElementById("msg").style.display="block";
}
function openbanner()
{
	document.getElementById("bannerbox").style.display="block";
}
function closebanner()
{
	document.getElementById("bannerbox").style.display="none";
}
function logoopen()
{
	document.getElementById("logbox").style.display="block";
}
function logoclose()
{
	document.getElementById("logbox").style.display="none";
}
</script>
</body>
</html>