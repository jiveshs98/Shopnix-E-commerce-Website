<!DOCTYPE html>
<html>
	<head>
		<title>Admin Account Creation</title>
		<style>
			table{
				width: 800px;
				height: 300px;
				margin: auto;
				margin-top: 100px;
			}

			input,textarea{
				border: 1px solid black;
				height: 40px;
				font-size: 17px;
				padding-left: 10px;
			}

			input[type="submit"]:hover{
				cursor: pointer;
			}

			td{
				font-size: 20px;
			}
		</style>
	</head>
	<body>
		<?php
			$con= mysqli_connect("localhost","root","","ecom");
			// $a= base64_decode("YWRtaW4=");
			// echo $a;
			if(isset($_POST["sub"]))
			{
				$nm= $_POST["name"];
				$add= $_POST["add"];
				$cont= $_POST["cont"];
				$user= $_POST["user"];
				$em= $_POST["email"];
				$p1= $_POST["pass1"];
				$p2= $_POST["pass2"];
				if($p1!=$p2)
				{
					echo "Error!Password does not match. Try again.";
				}
				else{
					$pass=md5($p1);
					$sql=mysqli_query($con,"insert into `admin` values('$nm','$add','$cont','$user','$em','$pass')");
					if($sql==true){
						echo "Inserted successfully";
					}
					else{
						echo "Try again";
					}
				}
			}
		?>
		<center><h1>Create Admin Account</h1></center>
		<table border="1" cellspacing="0" cellpadding="5">
		<form method="post">

			<tr><td>Name:</td> <td><input type= "text" name="name" required /></td></tr>
			<tr><td>Address:</td> <td><textarea name="add" rows="5" cols="30" required></textarea></td></tr>
			<tr><td>Contact:</td> <td><input type="text" name="cont" required/></td></tr>
			<tr><td>Username:</td> <td><input type="text" name="user" required/></td></tr>
			<tr><td>Email:</td> <td><input type="text" name="email" required/></td></tr>
			<tr><td>Password:</td> <td><input type="password" name="pass1" required /></td></tr>
			<tr><td>Confirm Password:</td> <td><input type="password" name="pass2" required/></td></tr>
			<tr><td></td><td><input type="submit" name="sub" value="Submit"/></td></tr>
		</form>
	</table>
	</body>
</html>
