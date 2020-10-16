<?php
session_start();
$errorlogin="";



		
		
		if(isset($_POST['mybtnlogin']))
		{
			if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					if($_POST['lathuselect']=='User')
					{
							$signoutchecks=true;
							//Linking the configuration file
							require 'require.php';

							$loginmail=$_POST['logemail'];
							$loginpassword=$_POST['logpassword'];
							
							if($loginmail!="" && $loginpassword!="")
							{
								$sql = "SELECT * FROM customer
								WHERE email_id='$loginmail' AND password='$loginpassword'";
								$result = $con->query($sql);

									if($result->num_rows > 0)
									{
										while($row = $result->fetch_array())
										{
										$_SESSION['myid']=$row['customer_id'];
										$_SESSION['mymail']=$row['mail_id'];
										}
										
										
											header("location:p3.php");
									}
									
									else
									{
										$errorlogin="*invalid login*";
										
									}
										
										
							}
							else
							{
								$errorlogin="*Please login*";
							}

							$con->close();
							
					}
					
					if($_POST['lathuselect']=='Admin')
					{
							$signoutchecks=true;
							//Linking the configuration file
							require 'require.php';

							$loginmail=$_POST['logemail'];
							$loginpassword=$_POST['logpassword'];
							
							if($loginmail!="" && $loginpassword!="")
							{
								$sqls = "SELECT * FROM admin
								WHERE email_id='$loginmail' AND password='$loginpassword'";
								$result = $con->query($sqls);

									if($result->num_rows > 0)
									{
										while($row = $result->fetch_array())
										{
										$_SESSION['myids']=$row['admin_id'];
										$_SESSION['mymails']=$row['mail_id'];
										}
										
										
											header("location:admin.php");
									}
									
									else
									{
										$errorlogin="*invalid login*";
										
									}
										
										
							}
							else
							{
								$errorlogin="*Please login*";
							}

							$con->close();
							
					}
				}	
		}

?>

<?php





if(isset($_SESSION['myid']))
{
	$myid=$_SESSION['myid'];
	header("location:p3.php");
}
if(isset($_SESSION['myids']))
{
	$myid=$_SESSION['myids'];
	$_SESSION['myid']=$myid;
	header("location:admin.php");
}


if(!isset($_SESSION['myid']))
{
	
	
}


	



?>	
	
	
	
	

<html>
<head>

<link href="css/admin.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<script src="javascript/admin.js"></script>
</head>
<body>
<p>
<?php
if(isset($_GET['msg']))
{
	echo $_GET['msg'];
}

?></p>


	<div class="lo">
	<div class="content">
	<div class="form">
		<form method="post" action="./lopage.php" >
		<div class="row">
				<h2 style="text-align:center; color:blue;">Pet House</h2>
				
		</div>

		<div class="row">
			<div class="rowcol1">
				<label id="lb1">Email or number</label><br>
			</div>
			<div class="rowcol2">
				<select id="lathuselect" name="lathuselect">
					<option value="User">User</option>
					<option value="Admin">Admin</option>
				</select>
			
			</div>
		</div>	
		<div class="row">
				<input type="text" name="logemail" required>
		</div>
		<div class="row">
				<label>Password</lable><br>
			<br>
				<input type="password" name="logpassword"  autocomplete="off" required></br>
				
				<br>
		</div>
		<div class="row">
				<input type="submit" value="Login" name="mybtnlogin"></br>
			<br>
		</div>	
		<div class="row">
			<hr><p style="text-align:center;">what new?</p>
			<a  href="registerpage.php"><input type="button" value="Create an Account"></a>
			
			<br>
			<a  href="p3.php"><input type="button" value="Cancel"></a>
		</div>
	<div class="row">
	<p id="p4" style="background-color:red; color:white;">
			<?php
			if(isset($_POST['mybtnlogin']))
			{
				echo $errorlogin;
			}
			
			
			?>
	</p>
	</div>
		
		</div>
	</form>	
	
					
		
	
	
	
</div>
</div>
</body>
</html>

