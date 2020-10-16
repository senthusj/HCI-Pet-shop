
<?php
session_start();
$showdetail=false;
require'require.php';
require 'mylogin.php';
$add_cart=0;
$get_not=0;
if(isset($_SESSION['myid']))
{
	require'insertcart.php';
	$myid=$_SESSION['myid'];
}

if(!isset($_SESSION['myid']))
{
	require'addcart.php';
	$showdetail=true;
	$myid="";
}

require 'profileinclude.php';
	



if(isset($_POST['btncancel']))
{
		unset($_SESSION['shopping_cart']);
		$sqldel="DELETE FROM addcart";
			if($con->query($sqldel))
				
				{
					
				}
				else
				{
					echo $con->error;
				}
}
	
	
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
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>Homepage</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="javascript/home.js"></script>
		
		 
		  <script  src="javascript/ajiindex.js"></script>

		
		
		
		
		
	
	<!-- Required CSS -->
	<link href="css1/movingboxes.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<link href="css/movingboxes-ie.css" rel="stylesheet" media="screen">
	<![endif]-->

	<!-- Required script -->
	<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script src="js/jquery.movingboxes.js"></script>

	<!-- Demo only -->
	<link href="demo/demo.css" rel="stylesheet">
	<script src="demo/demo.js"></script>
	<style>
		/* Overall & panel width defined using css in MovingBoxes version 2.2.2+ */
		

		#slider-two { width:100%; }
		#slider-two > div { width:260px; }
		
		@media  screen and (max-width:800px)
		{
			body{
				
				}
				#slider-two
				{
				width:100%;
				}
		
		}
		
		#table1 tr
		{
			
			padding:8px;
			}
		
	</style>



		
		

	</head>
	
	
	<body onResize="refresh()">
	
		<div class="header">
		
		<h2 id="hed1">
		
		<div class="row">
				<div class="headercolumn ">
				<img src="as.png" style="width:190px; height:150px; float:left;">
				</div>
				<h3 style="color:#d9e6fa; margin-right:950px;">Lucky Kennel</h3>
				<div class="headercolumn" style="height:10px;">
				  
				<span id="petname"></span>
				</div>
				
				<div class="headercolumn" style="width:20%">
				<form METHOD="POST" action="p3.php">
				 <input style="width:50%;height:25%;" type="text" id ="search" name="search" placeholder="SEARCH....">
				 
					<button style="width:25%;height:25%" type="submit" id="mybutton" name="btnsearch"><i class="fa fa-search"></i></button>
					
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
					<div class="addtocarts1">
												<?php
				if(!$showdetail)
				{
					if(isset($_SESSION['myids']))
					{?>
					<a href="admin.php" style=" width:50px; height:45px; margin-top:13px;float:right; margin-right:-340px;"><i style="font-size:40px" class="fa fa-gears"></i>
						</a>
						<?php
					}
				}
				?>
											<?php
				if(!$showdetail){
					
				
					
					?>	
					
						
				
						<a href="order.php" style=" width:50px; height:45px; margin-top:13px;float:right; margin-right:-270px;"><i style="font-size:40px" class="fa">&#xf07a;</i>
						</a><span class="card" style="font-size:12px;"><?php  require'insertcart.php'; echo $add_cart;?></span>
						
						
								
								<a href="notification.php" style=" width:50px; height:45px; margin-top:13px;float:right; margin-right:-100px;">
								<i onclick="openNav()" style="font-size:40px ; color:orange"class="material-icons">
								
								&#xe7f4;</i></a><span class="cards" style="font-size:14px;margin-right:-100px;"><?php echo $get_not; ?></span>
							
						
						
						<?php 
				
				
				
					echo $imageshow;
				 
				?>
				<?php }?>
			
					</div>
				
				</div>
												<?php
				if($showdetail){
					
				
					
					?>	
					<div id="headercolumns">
				<form action="p3.php" method="POST">
				<table id="table1">
					<tr><td><input type="email"  placeholder="Email" name="logemail"></td>
					<td><input type="password" placeholder="Password" name="logpassword"></td>
				<td><input type="submit" name="mybtnlogin" value="login"></td></tr>
				</table>
					</form>
					</div>
					
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
								<a href="newcontactus.php">Contact</a>
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
					
					<div class="slideshow-container">

						<div class="mySlides fade">
						
						  <img src="images\aj1.jpg" style="width:100%">
						  <div class="text">Select Your Pet</div>
						</div>

						<div class="mySlides fade">
						 
						  <img src="images\aj3.jpg"style="width:100%">
						  <div class="text">Live With Pet</div>
						</div>

						<div class="mySlides fade">
						
						  <img src="images\aj2.jpg" style="width:100%">
						  <div class="text">Make your life Happier</div>
						</div>
						<div class="mySlides fade">
						 
						  <img src="images\aj4.jpg" style="width:100%">
						  <div class="text">Just visit Our Page</div>
						</div>
						

					</div>
					<br>

					<div style="text-align:center">
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					</div>
	
					

				</div>	
					
					
					
					
					
					
					
					
					
					
					
					
					<script>
					var ajishow=0;
					var slideIndex = 0;
					var divindex=0;
					showSlides();
					</script>
					
					
					
					
					
					
		
				
					
				
				
				<div class="styles">
				<h2 style="color:green; text-align:center;"> NEW ARRIVAL PETS AND PRODUCTS</h2>
				</div>
					<div class="styles">
					
					<div class="contentimage2" id="contentimages2">
						
						<div class="row">	
						
							<div class="wrapper">

								<div id="slider-two">	
								
								<?php
						
						$sql1="SELECT * FROM items ORDER BY item_id  DESC LIMIT 10";
						
						
						$result = $con->query($sql1);

							if($result->num_rows > 0)
							{
								 while($row = $result->fetch_assoc()) 
									 { 
								 ?>
										<div class="out" >
											<div class="div3">
											<a href="<?=$row['item_link']?>"><?php echo "<img  class='img1' src='images/".$row['image']."' >" ?></a>
												
												<div class="des">
													<p  id="ajinew3">New Arrival </p>
												</div>
												
												
											</div>
										</div>
										 <?php 
									 
									 }
									 }?>
							
										
										
										
									
								</div>
							</div>	
						</div>
					</div>
						
				</div>
				<div class="styles">
				<h2 style="color:green; text-align:center;"> DISCOUNTS FOR SOME PRODUCTS</h2>
				</div>
				<div class="styles">
					
						
						<div class="contentimage1" >
						
						
						<?php
						
						$sql1="SELECT * FROM items WHERE item_id < 37 AND item_id >21";
						
						
						$result = $con->query($sql1);

							if($result->num_rows > 0)
							{
								 while($row = $result->fetch_assoc()) 
									 { 
								 ?>
						
							<div class="outs" onMouseOver="typeWriter()" onMouseOut="typeOut()" >
								<div class="div4" >
									
									<?php echo "<img  class='img2' src='images/".$row['image']."' >" ?>
									<div class="div4desc1"   >
										
									
										
										
												<?php
									if(!$showdetail) { ?>
					
										<button type="button"> <a href="<?=$row['item_link']?>">To Shop</a></button>
										<?php }?>
										
										<?php
									if( $showdetail ) { ?>
					
										<button type="button"> <a href="lopage.php">To Shop</a></button>
										<?php }?>


										
									</div>
									<div class="desc">
										<p id="ajinew">5% Discount</p>
										
										
									</div>
								</div>
							</div>
							
									 <?php 
									 
									 }
									 }?>
							
							
							
							
							
							
							
						
							
							
				</div>
				
			</div>
				<div class="styles">
					<p id="timeend"> Discount Ends In</p>
					<p id="demo"></p>
				</div>
				<div class="contentimage1" id="ajiviewimages" >
				
				
				
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