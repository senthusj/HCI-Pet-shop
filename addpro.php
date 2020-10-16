
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

<?php
	
	require 'require.php';
	$error_found=false;
	
if(isset($_POST['btnSubmit']))
{
				
				
				
				

		if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
		) && ($_FILES["file"]["size"] < 10000000)//Approx. 1000kb files can be uploaded.
		)

		 {
			  // Create database connection
				  

				  // Initialize message variable
				  $msg = "";

				 
				 
					// Get image name
					$image = $_FILES['file']['name'];
					// Get text
				  

					// image file directory
					$target = "upload/".basename($image);
					$error_found=true;
					if (move_uploaded_file($_FILES['file']['tmp_name'], $target))
					{
						$msg = "Image uploaded successfully";
					}
					else
					{
						$msg = "Failed to upload image";
					}
		 
					$result = mysqli_query($con, "SELECT * FROM items");
					
					
		 }		
					
				
	if($error_found)
	{
	   $name = $_POST["fname"];
	  $price = $_POST["price"]; 
	   $link=$_POST["link"];
	   $fcat=$_POST['fcategory'];
	  $sql=	"INSERT INTO items(price,item_name,item_link,category_id,image) VALUES ('$price','$name','$link','$fcat','$image')";

	  
		if($con->query($sql))
		{
		 echo "Sucessfully Added";
		}
		else{
		  echo "Error:". $con->error;
		}
	}
}
?>
	




<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
		input[type=text]
	{
	
		display:block;
		
		width:50%;
		box-sizing:border-box;
		font:bold 15px Sansation;
		border-radius:3px;
		border:none;
		 margin: 8px 0;
		 transition:1s;
		 border-left:3px solid orange;
	
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
			border: 5px solid red;

                      background-color:#d9d9d9;
			float:right;
			width:60%;
			height:450px;
			padding:20px 80px;
			text-align:left;
			}
			
	.centent{
		clear: both;
		width:100%;
		height:90%;
		background-color:#bfff80;
		
	}


	#img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
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
		
	<div class="sidebar">
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
		<form method="POST" action="addpro.php" enctype="multipart/form-data">
	<lable> Item Name:</lable><br>
<br>
	<input type="text" name="fname" placeholder="enter Name...." required>




	<lable>Price:</lable><br>
<br>
	<input type="text" name="price" placeholder="enter price...."required>


	<lable>Category_id:</lable><br>
<br>
	<input type="text" name="fcategory" placeholder="enter category...."required>

		<lable>Item_link</lable><br>
<br>
	<input type="text" name="link" placeholder="link...."required>
	
	<lable>Add Image</lable><br>

  	
  	  <input type='file' name='file' id="file">
		 <div id="preview">
<img id="previewimg" style="width:100px; height:100px;" src="">

</div>
	<input type="submit" name="btnSubmit" value="Add" ></br>
	
	</form>	
	</div>


	<script type="text/javascript">
	$(document).ready(function() {
// Function for Preview Image.
$(function() {
$(":file").change(function() {
if (this.files && this.files[0]) {
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$('#message').css("display", "none");

$('#previewimg').attr('src', e.target.result);
};
$("#file").click(function() {


});
});

</script>

	
	
</div>
<div class="footer"><div>
</body>
</html>