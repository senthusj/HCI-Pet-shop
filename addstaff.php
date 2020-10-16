<?php
session_start();
$showdetail=false;
require'require.php';

if(isset($_SESSION['myids']))
{
	$myid=$_SESSION['myids'];
}

if(!isset($_SESSION['myids']))
{
	$showdetail=true;
	$myid="";
	header("location:lopage.php");
}



?>
<!DOCTYPE html>
<html>
<head>
	<?php //Linking the configuration file
$server="localhost";
$user_name="root";
$password="";
$database="pets";

$conn=new mysqli($server,$user_name,$password,$database);

if($conn->connect_error){

die("Connection Failed : " . $conn->connect_error);
}
?>
	<style>
		.form3{
			width:10%;
			padding:20px 80px;
			float:right;
		}
		.header{
			background-color: #1d1339;
			padding: 70px;
		}
		.sidebar{
			width:20%;
			height:800px;
			background-color: #ffff99;
			border: 2px solid black;
			float:left;
		}
		
		.butt
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
	
	
	}
	
		.butt
		{
			background-color:#404040;
			color:white;
		}
			
			input[type=text]:focus
			{
				outline:none;
				}
				
	.butt:hover
				{
					background-color:#e60000;
					outline:none;
	
	}
	
	.form1{
			
			background-color:#bfff80;
			float:right;
			width:30%;
			height:50%;
			padding:20px 200px;
			text-align:left;
			}
			
	.centent{
		clear: both;
		width:100%;
		height:80%;
		background-color: #bfff80;
		
	}
		input[type=text]
	{
	
		display:block;
		padding:9px 20px;
		width:50%;
		box-sizing:border-box;
		font:bold 15px Sansation;
		border-radius:3px;
		border:none;
		 margin: 8px 0;
		 transition:1s;
		 border-left:3px solid orange;
	
	}
	.footer{
	background-color: #000066;
    padding: 80px;
    position:fixed;
	bottom:0px;
	width:100%
}
	
	</style>
</head>
<body>
<div class="header">
		<a href="p3.php">Home</a>
	<img src="log.jpg" width="60px" height="60px" align="right" alt="admin" />	
	<div class="form3">
		<form method="post" action="logout.php">
				
			<button onclick="window.location.href='logout.php'">Logout</button> 	
		</form>
	</div>
</div>
<div class="centent">
	<div class=sidebar>
	<div class="form">
	<button class="butt" onclick="window.location.href='addpro.php'">Add Product/Animal</button>
	<button class="butt" onclick="window.location.href='removeani.php'">Remove Product/Animal</button>
	<button class="butt" onclick="window.location.href='removemem.php'">Remove Member</button>
	<button class="butt" onclick="window.location.href='removestf.php'">Remove staff</button>
	<button class="butt" onclick="window.location.href='com.php'">complains</button>
	<button class="butt" onclick="window.location.href='addstaff.php'">Add Staff</button> 
	</div>
	</div>
	<div class="form1">
	<form method="post" action="addstaff.php">
	<lable>Staff Name</lable><br>
<br>
	<input type="text" name="fname" placeholder="enter Name...." required>
	<lable>Address</lable><br>
<br>

	<input type="text" name="address" placeholder="enter address...." required>
	
	<lable>Email</lable><br>
<br>
	<input type="text" name="email" placeholder="enter email...." required>
	<lable>Phone no</lable><br>
<br>
	<input type="text" name="pno" placeholder="enter phone no...." required>
	<lable>Position</lable><br>
<br>
	<input type="text" name="position" placeholder="enter position...."required>
	<input type="submit" name="btnSubmit" value="add" ></br>
	</form>	
	</div>
	<?php
if(isset($_POST["btnSubmit"])){
   $name = $_POST["fname"];
  $address = $_POST["address"]; 
  $mail = $_POST["email"];
   $phoneno = $_POST["pno"];
  $position = $_POST["position"]; 
  
 $sql="INSERT INTO `staff`(`Name`, `Address`, `mail`, `phoneno`, `Position`) VALUES('$name','$address','$mail','$phoneno','$position')";
 
    if(mysqli_query($conn,$sql))
	{
      echo "Inserted successfully";
    }
    else{
      echo "Error:". $conn->error;
    }
}
?>
</div>
<div class="footer">	
</div>
</body>
</html>