<?php
session_start();
$showdetail=false;
require 'require.php';
if(!isset($_SESSION['myid']))
{
	$showdetail=true;
	header("location:lopage.php");
	
}

	$myid=$_SESSION['myid'];
require 'profileinclude.php';


$sqlinsert="SELECT count(no_id) from addnotification WHERE customer_id='$myid'";
	$resultin=$con->query($sqlinsert);
	if($resultin->num_rows>0)
	{
		while($row=$resultin->fetch_array())
		{
			$get_not=$row['count(no_id)'];
		}
		
	}
	else
	{
		echo $con->error;
	}

?>


<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utp-8">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="css/home1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Homepage</title>
		
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<script type="text/javascript" src="javascript/homevideo.js"></script>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	

	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<link href="css/profile.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<script src="javascript/profile.js"></script>
		
		
		
		
		
		
	


   
		
		

	</head>
	
	
	<body onResize="refresh()">
	
		<div class="header">
		
		<h2 id="hed1">
		
		<div class="row">
				<div class="headercolumn ">
				<img src="images\as.png" style="width:190px; height:140px; float:left;">
				</div>
				<div class="headercolumn" style="height:10px;">
				  
				<p id="petname"></p>
				</div>
				
				<div class="headercolumn" style="width:23%">
				 <form METHOD="POST" action="newprofile1.php">
				 <input type="text" name="search" placeholder="SEARCH....">
					<button type="submit" id="mybutton" name="btnsearch"><i class="fa fa-search"></i></button>
					<?php
					if(isset($_POST['search']))
					{
						$_SESSION['iname']=$_POST['search'];
						header("location:search_item.php");
					}
					
					?>
				</form>	
					
				</div>
				
				<div class="headercolumn" style="width:15%; margin-top:6px;">
					<div class="addtocart1">
											<?php
				if(!$showdetail){
					
				
					
					?>	
						<a href="order.php" style=" width:50px; height:45px; margin-top:13px;float:right; margin-right:-240px;"><i style="font-size:40px" class="fa">&#xf07a;</i>
						</a><span class="card" style="font-size:12px;"><?php  require'insertcart.php'; echo $add_cart;?></span>
			
							
  
								<a href="notification.php" style=" width:50px; height:45px; margin-top:13px;float:right; margin-right:10px;">
								<i onclick="openNav()" style="font-size:40px; color:orange"class="material-icons">
								
								&#xe7f4;</i></a><span class="cards" style="font-size:14px;"><?php echo $get_not; ?></span>
							
						
						
						<?php 
				
				
				
					echo $imageshow;
				 
				?>
				<?php }?>
			
					</div>
				
				</div>
												<?php
				if($showdetail){
					
				
					
					?>	
				
					
				<?php }?>
	

				
				<div class="headercolumn" style="width:9%; margin-left:64px;">
					
						<?php
				if(!$showdetail){
					
				
					
					?>	
					
					
					<div class="profiledropdown">
					  <button class="profiledropbtn"><i class="fa fa-address-card" style="font-size:44px;"></i></button>
					  <div class="profiledropdown-content">
						<a href="newprofile1.php">My profile</a>
						<a href="newprofile.php">Edit profile</a>
						<a href="logout.php">Logout</a>
					  </div>
					</div>

				<?php }?>
				
				
					
				</div>
				
			</div>	
		</div>
		
		<div class="linknav">
				<div id="aji3d">
					<a href="p3.php" style="background-color:red;">Home</a>
					<a href="newclinic.php">Clinic</a>
					<a href="newseller.php">Seller</a>
					
					<a href="newaboutus.php" style="float:right;">About us</a>
				</div>
				<div class="dropdown">
				
					<button class="dropbtn" onclick="myFunction()" style="float:right;"><i class="fa fa-bars"></i></button>
					
						<div id="myDropdown" class="dropdown-content">
							<div class="mycolumn1">
								<span><a href="p3videos.php">Videos</a></span>
								<span><a href="#abot">History<span></a>
								<a href="#">Contact</a>
								<a href="#">Credit details</a>
								
								
							</div>
							<div class="mycolumn2">
							
								<div class="ajidivtot">
									<div class="ajidiv1">
													
									</div>
								
									<div class="ajidiv2">
								
									
													
									</div>
								
								</div>
							</div>
								
						</div>
					
				</div>
				
		
		</div>
		
		
		
		<div class="row" id="rows"><!--main page start---->
			<div class="leftside" onMouseOver="funhide_aji_content()"><!---div class leftside start-->
			
				
	<?php if($showdetail) { ?>
				
				<div class="styles1" style="background-color:transparent;">
				
					
					<button class="abutblue"> <a href="lopage.php">Login</a></button>
					<button class="abutgreen"><a href="registerpage.php">Register</a></button>
				</div>
				<?php  } ?>
				
				<div class="styles2">
				
					
					<div class="custom-select"  style="width:auto; " onMouseOver="funhide()" onMouseOut="funshow()" >
						  
						  
						  
						  <!-----drop down event-->
											  
											  <div class="dropdowns">
					<button onclick="myFunctions()" class="dropbtns">Select Category</button>
					  <div id="myDropdowns" class="dropdowns-content" onMouseOut="funshowajihide()">
						<a href="CAT.php">Cats</a>
						<a href="doghtml.php">Dogs</a>
						<a href="FISH.html.php">Fish</a>
						<a href="Fish food.php">Fish Food</a>
					  </div>
					</div>
											  
						  
						  
						  
						  
						  
						  
					</div>			
									
					
				
				</div>
				
				
				
			<!-------banner---->
				
				<div class="styles" id="ajileftsidehide">
				
					
					<div class="contentimage">
					<img src="images\Copy of Printable colorful wall art quote template - Made with PosterMyWall.jpg" style="width:100%;
					height:430px; border:2px solid blue;">
					</div>

				</div>
				
				<div class="styles" id="ajileftsidehide1">
				
					
					<div class="contentimage">
					<img src="images\Copy of Healthcare Centre Flyer - Made with PosterMyWall.jpg" style="width:100%;
					height:400px; border:2px solid blue;">
					
				
					</div>

				</div>
				
				
			
			
			
			</div><!--div class leftside finish---->
			
			<div class="middleside" id="funhidemiddle_aji_content"  onMouseOver="funhideoption()" ><!---div class middle side start---->
				<!------ image slide show------>
				<div class="styles">
					
					
						
					
					<script>
					var ajishow=0;
					var slideIndex = 0;
					var divindex=0;
					showSlides();
					</script>
					
					
					
		<div class="aji">			
		<div class="profilecontent">
		

		
			<form method="POST">
				<div class="profilerowbutton">
					<div class="profilerowbutton">
					<a href="newprofile1.php"><button type="button" id="profilebtn1" onclick="profilechangefun2()"><p>Your Profile<p></button></a>
					<a href="newprofile.php"><button type="button" id="profilebtn2" onclick="profilechangefun()"><p> Edit Profile<p></button></a>
					<a href="newprofile3.php"><button type="button" id="profilebtn3"  onclick="profilechangefun1()"><p>Edit Password<p></button></a>
					<a href="logout.php"><button type="button" id="profilebtn4"><p>Sign Off<p></button></a>
				</div>
				</div>
				<!----Edit my profile picture---------->
				
				<!----Edit my password---------->
			
				<div id="Ajprofilechange">
					<div class="profilerow">
						<?php echo $viewname; ?>
						<?php echo $imageupload; ?>
						
						
					</div>
				
					<div class="profilerow">
						<div class="profilerowcolumn5">
						
							<label> Your Name</label>
						</div>
					
						<div class="profilerowcolumn3">
						
							<input type="text" placeholder="First" value="<?= $fn?>" id="fname" disabled>
						
							<input type="text" placeholder="Last" value="<?= $ln?>" id="lname" disabled>
						</div>
						
									
						
					</div>


					<div class="profilerow">
						<div class="profilerowcolumn1">
							<label>Email Address</label>
						</div>
						
						<div class="profilerowcolumn2">
						<input type="email" placeholder="@gmail.com" value="<?= $em?>" id="fmail" disabled>
						
						</div>
					
						
					</div>
					
					
					<div class="profilerow">
						<div class="profilerowcolumn1">
							<label>Date Of Birth</label>
						</div>
						<div class="profilerowcolumn2">
							<input type="date"  value="<?= $dat?>" disabled id="fdate">
						</div>
					
					</div>
				
					<div class="profilerow">
						<div class="profilerowcolumn1">
							<label>Gender</label>
						</div>
						<div class="profilerowcolumn2">
							<input type="text" disabled id="fselect" value="<?= $gen?>">
							
						</div>
					
					</div>
					
				</div>

				
				
			</form>	
								
		
		</div><!-------form end--->
	</div>
			<!-------java script start------>
					


		
				
					
				
				
			</div>	
			</div><!----div class middle side finish---->
			
			<div class="rightside"><!---div class right side start--->
			
				<div class="styles">
				
				
					<div class="contentimage">
					<img src="images\Copy of Hiring Poster - Made with PosterMyWall.jpg" style="width:100%;
					height:430px;  border:2px solid blue;">
					
					</div>
				</div>
				<div class="styles">
				
					
					<div class="contentimage">
						<img src="images\Copy of Big Sale Flyer - Made with PosterMyWall.jpg" style="width:100%;
					height:430px; height:430px; border:2px solid blue;">
					
					</div>
				</div>
				<div class="styles">
						<object width="100%" height="20%"  data="https://www.youtube.com/embed/tgbNymZ7vqY">
						</object>
					
				</div>
					
					
			</div><!--div class right side finish-->
			
		</div>
		
		
		
		<div class="footer1">
		<button onclick="topFunction()" id="myfooter1Btn" title="Go to top">TOP OF PAGE</button>
		</div>
		
		<div class="footer2">
		
			<img src="images\Capture3.PNG">
			<img src="images\Capture5.PNG">
			<button type="button" ><a href="feedback.php"> Feedback</a></button>
	
			
									
				
		
		</div>
		
		<div class="footer3">
		
			<div class="responsemedia1">
			
			
				<a href="#" class="fa fa-facebook"  ></a>
				<a href="#" class="fa fa-twitter"  ></a>
				
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-google" ></a>
				<a href="#" class="fa fa-youtube" ></a>
				
			</div>
			
			<div class="icon-bar">
			
			
			  <a href="#" class="fa fa-facebook"  ></a>
				<a href="#" class="fa fa-twitter"  ></a>
				
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-google" ></a>
				<a href="#" class="fa fa-youtube" ></a>
				
			
			
			
			
			</div>
			
			<h2 id="contact">Contact us</h2>
			<div class="ajrow">
				<div class="ajcolumn1">
					<p>Email id-</p>
					<p>Mypet@gmail.com</p>
					
				</div>
				<div class="ajcolumn2">
				<p>Hot-line-Number:</p>
					<p>+94776898745</p>
					
				</div>
			</div>
			
		</div>	
	
	</body>
	
	</html>