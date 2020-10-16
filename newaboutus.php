
<?php
session_start();
$showdetail=false;
require'require.php';

if(isset($_SESSION['myid']))
{
	$myid=$_SESSION['myid'];
}

if(!isset($_SESSION['myid']))
{
	$showdetail=true;
	$myid="";
	
}

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

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	

	
	
		<script type="text/javascript" src="javascript/home.js"></script>
		
		
		
		
		
		
		
	
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
		#slider-two > div { width:250px; }
		
		@media  screen and (max-width:800px)
		{
			body{
				
				}
				#slider-two
				{
				width:100%;
				}
		
		}
	</style>


   
		
		

	</head>
	
	
	<body onResize="refresh()">
	
	<div class="header">
		
		<h2 id="hed1">
		
		<div class="row">
				<div class="headercolumn ">
				<img src="images\as.png" style="width:190px; height:150px; float:left;">
				</div>
				<div class="headercolumn" style="height:10px;">
				  
				<p id="petname"></p>
				</div>
				
				<div class="headercolumn" style="width:23%">
				 <form METHOD="POST">
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
						<a href="bird.php">Birds</a>
						<a href="Bird food.php">Bird Food</a>
						<a href="bird House.php">Bird House</a>
						<a href="CAT.php">Cats</a>
						<a href="cat food.php">Cat Food</a>
						<a href="cat shop-accesoreis.php">Cat Things</a>
						<a href="cat House.php">Cat House</a>
						<a href="doghtml.php">Dogs</a>
						<a href="dog food.php">Dog Food</a>
						<a href="Dog House.php">Dog House</a>
						<a href="dog shop_accesoreis.php">Dog things</a>
						<a href="FISH.html.php">Fish</a>
						<a href="Fish food.php">Fish Food</a>
						<a href="Fish Tank.php">Fish Tank</a>
						<a href="Fish Décor Gravel Substrate.php">Fish Things</a>
						<a href="reptiles.php">Reptiles</a>
						<a href="small pet.php">Small Pet</a>
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
				
					
					
					<script>
					var ajishow=0;
					var slideIndex = 0;
					var divindex=0;
					showSlides();
					</script>
					
					
					
		
				<div style="text-align:center">
							<h1>INTRODUCTION OF PET WORLD</h1>
                                <br>
				<div style="background: #fff; font-size: 15px; line-height: 35px;">
<p><a><img style="float: left;" src="images/111.jpg" alt="left_img" width="439" height="550"  sizes="(max-width: 439px) 100vw, 439px"></a></p>
<div style="padding: 30px 25px; line-height: 35px !important;">
<p>&nbsp;</p>
<p style="font-weight:bold;">We might want to present ourself as the most presumed, recognized, prestigious, imaginative association in pets world. with an amazing reputation and ceaseless rundown of female horse than 50,000 fulfilled customers the whole way across Srilanka. </p>
<p style="font-weight:bold;">Pet World is the pioneer to present Pets boutique scope of garments array and jewelery .We has the most lovely scope of Dog Perfumes and Cosmetic prepping items. Particularly made to satisfy minutest individual care of visit cherishing Pets.Our Business line provides food all the Need of a prospected pet sweetheart with all after deal administrations for your Dogs and felines. Our separate customers incorporates a Common Layman to the President of srilanka. We have formally secured our canines Products to srilankan Army, Rajasthan Police, BSF, RPF and to different legislative and Private Institutions. IDB has turned into the most prestigious and acclaimed mark with adoration for unlimited individuals. Our Brand name conveys trust. We have been secured by driving head media all around different occasions such as Times of srilanka, Hindustan Times, Asian Age, The Wall Street General, srilankan Expose, Midday, Khaleej Times, Gulf Near, New York World, CNN, BBS, Aaj Tak, Star News, NDTV, Zee News, Danik Bhaskar, Punjab Kesari and Lot more. We at IDB feels glad for being the pioneers in pets part in srilanka.</p>
<p style="font-weight:bold;">IDB has presented the idea of keeping pooches in such an extraordinary way, to the point that reinforced the development of pet families in Jaipur from odd 300 to more than 80,000 .Jaipur the place where we grew up has turned out to be renowned for pet industry also. IDB is the principal pet association in srilanka to Acquire ISO-9001 Certification. IDB's distinctive ideas have moved toward becoming Landmarks for others to take after and yet making and Leading the path for a brighter pets culture in srilanka All with your help and Love.</p>
</div>
</div>
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