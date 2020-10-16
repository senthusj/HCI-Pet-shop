<?php
session_start();
require 'require.php';

$fn="";
$ln="";
$fd="";
$fs="";
$fe="";
$fp="";
$frep="";
$fn_error="";
$ln_error="";
$fd_error="";
$fs_error="";
$fe_error="";
$fp_error="";
$frep_error="";
$error_found=false;
$signoutcheck=false;

				

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$fd=$_POST['fdate'];
$fs=$_POST['fselect'];
$fe=$_POST['femail'];
$fp=$_POST['fmypass'];
$frep=$_POST['frepass'];
	
		
		if(empty($fn))
		{
			$error_found=true;
			$fn_error="*First Name is Mandatory*";
		}
		
		if(empty($ln))
		{
			
			$error_found=true;
			$ln_error="*Last name is Mandatory*";
		}
		
		
		if(empty($fd))
		{
			$error_found=true;
			$fd_error="*Date Of Birth is Mandatory*";
		}
		
		if(empty($fe))
		{
			
			$error_found=true;
			$fe_error="*E-mail is Mandatory*";
			
		}
		
		else if(filter_var($fe,FILTER_VALIDATE_EMAIL))
		{
			
		}
		else
		{
			$error_found=true;
			$fe_error="*Invalid Email Address";
		}
		
		if(empty($fp))
		{
			
			$error_found=true;
			$fp_error="*Password is Mandatory*";
		}
		
		if(empty($frep))
		{
			
			$error_found=true;
			$frep_error="*Re_enter password is Mandatory*";
		}
		
		if($fp!=$frep)
		{
			$error_found=true;
			$fp_error="*Password is Not Match";
			$frep_error="*Password is Not Match*";
		}
	


	
}
	
	?>
	
	<?php
if(isset($_POST['regbtn']) )
{ 

	if(!$error_found)
	{

			
		$sqlcheck="SELECT * FROM customer";
		
		$result=$con->query($sqlcheck);
		if($result->num_rows > 0)
			
			{
				
				while($row=$result->fetch_array())
				{
					if($row['email_id']==$fe)
					{
						$check_error=true;
						
						$fe_error="*E-mail is Already in Use*";
					}
					
				}
				
			}
				
				
//Linking the configuration file


		if(!$check_error)
		{
			
				$sql="INSERT INTO customer(first_name,last_name,date,gender,email_id,password)
				 VALUES('$fn','$ln','$fd','$fs','$fe','$fp')";
				 
				if($con->query($sql))
				{
					$sqlff = "SELECT * FROM customer
								WHERE email_id='$fe' AND password='$fp'";
								$result = $con->query($sqlff);

									if($result->num_rows > 0)
									{
										while($row = $result->fetch_array())
										{
											$uniqueid=$row['customer_id'];
										}
										
										
									
									
										
										
										
									
										$sqlf7="INSERT INTO profile(customer_id) values('$uniqueid')";
										
										
										if($con->query($sqlf7) )
											
										
										
										
										{
											header("location:lopage.php");
										}
										else
										{
											echo "Error:".$con->error;
										}
				
											
									}
									
					
				}
				else
				{
						echo "Error:".$con->error;
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
	header("location:admin.php");
}


if(!isset($_SESSION['myid']))
{
	
	
}


	



?>	
	
<html>
<head>
	<style>
		
		.content
	{
		padding-left:30%;
		padding-top:10px;
		background-image:url("images/cc33.jpg");
	        text-align: center;
	        
		}
			
		.form{
			border:3px solid black;
			

                      background-color:#d9d9d9;
			
			width:30%;
			height:1090px;
			padding:20px 80px;
			text-align:left;
			}
				
	.footer {
   
   width:100%;
   background-color:#00004d;
   color: white;
   text-align: center;
}
   


		input[type=text],input[type=email],input[type=password],input[type=date],select
	{
	
		display:block;
		padding:9px 20px;
		width:100%;
		box-sizing:border-box;
		font:bold 15px Sansation;
		border-radius:3px;
		border:none;
		 margin: 8px 0;
		 transition:1s;
		 border-left:3px solid orange;
	
	}
	input[type=submit]
	{
	
	
		display:block;
		padding:9px 20px;
		width:100%;
		box-sizing:border-box;
		font:bold 15px Sansation;
		border-radius:3px;
		border:none;
		 margin: 5px 0;
		 transition:1s;
	
	
	}
		
		input[type=submit]
		{
			background-color:#009900;
			color:white;
			}
			
			select:focus,input[type=email]:focus,input[type=password]:focus, input[type=text]:focus input[type=date]:focus
			{
				outline:none;
				}
				
				input[type=submit]:hover
				{
					background-color:#006600;
					outline:none;
	 		}
table{
   
}
	
.petname
{
	
}

#P1,#p2,#p3,#p4,#p5,#p6
{
	background-color:red;
	color:white;

}	

hr
{
	width:100%;
	border:1px solid black;
	}
			
</style>
</head>
<body>
	<div class="content">
	
	<h1 align="left">Pets House</h1>
	
	<div class="form">
	<h3>Create Account</h3>
	<form method="POST" action="./registerpage.php">
	<label>First Name</label><br>
<br>
	<input type="text" name="fname" placeholder="your Name...." >
	<p id="p1">
	<?php
		
	echo $fn_error;
	?>
	</p>
		<label>Last Name</label><br>
<br>
	<input type="text" name="lname" placeholder="your Name...." >
	<p id="p2">
	<?php
		
	echo $ln_error;
	?>
	</p>
		<label>Date of birth</label><br>
<br>
	<input type="date" name="fdate" placeholder="your Name...." >
	<p id="p3">
	<?php
		
	echo $fd_error;
	?>
	</p>
		<label>Gender</label><br>
<br>
	<select name="fselect">
		<option  value="Male">Male</option>
		<option  value="Female">Female</option>
	</select>
	<br>
	<label>Email</label><br>
<br>
	<input type="text" name="femail" placeholder="your email....">
	<p id="p4">
	<?php
		
	echo $fe_error;
	?>
	</p>
	<label>Password</label><br>
<br>
	<input type="password"  name="fmypass" placeholder="at least 6 character" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain
							at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ></br>
	<p id="p5">
	<?php
		
	echo $fp_error;
	?>
	</p>
	
	<label>Re-enter Password</label><br>
<br>
	<input type="password" name="frepass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain
							at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></br>
							<p id="p6">
	<?php
		
	echo $frep_error;
	?>
	</p>
	<br>
	<br>
	<br>
	<input type="submit" name="regbtn" value="Create Your Account"></br>
<hr>
	<h6>By creating an account,you agree to <a href="condions.php">conditions </br> of use</a> and <a href="privacynotice.html">Privacy Notice.</a></h6>

<table>
<tr>
	<th>Already have an Account? <a href="lopage.php">Sign in</a> </th>
</tr>

</table>
</div>
</form>	 




</div>
<div class="footer">
  <p>Conditions of Use and <a href="Privacynotice.html"> Privacy Notice help</a>
<br>1996-2018,e-pets.com,lnc. or its affiliates</p>
</div>

</body>
</html>

