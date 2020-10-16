
<?php
session_start();
$showdetail=false;
require'require.php';
require 'mylogin.php';

if(isset($_SESSION['myid']))
{
	$myid=$_SESSION['myid'];
}

if(!isset($_SESSION['myid']))
{
	$showdetail=true;
	$myid="";
	header("location:lopage.php");
}

require 'profileinclude.php';
	

$add_cart=0;
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
		
		<link href="css/home1.video.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>Homepage</title>
		
		<script type="text/javascript" src="javascript/homevideo.js"></script>
	</head>
	
	
	<body>
	
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
					<a href="#clinic">Clinic</a>
					<a href="#hom">Seller</a>
					<span id ="showandhide"><a href="#hom">Shop</a></span>
					<a href="#ho" style="float:right;">About us</a>
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
						  
						  
						  
						  
											  
											  <div class="dropdowns">
					<button onclick="myFunctions()" class="dropbtns">Select Video</button>
					  <div id="myDropdowns" class="dropdowns-content" onMouseOut="funshowajihide()">
					<span class="ajivideo" onclick="ajivideo()">	<a href="#home">Video1</a></span>
						<span class="ajivideo" onclick="ajivideo1()"><a href="#con">Video2</a></span>
						<span class="ajivideo" onclick="ajivideo2()"><a href="#cotact">video3</a></span>
						<span class="ajivideo" onclick="ajivideo3()"><a href="#hoe">Video4</a></span>
						<span class="ajivideo" onclick="ajivideo4()"><a href="#about">Video5</a></span>
						<span class="ajivideo" onclick="ajivideo5()"><a href="#cotact">Video6</a></span>
						<span class="ajivideo" onclick="ajivideo6()"><a href="#hme">Video7</a></span>
						<span class="ajivideo" onclick="ajivideo7()"><a href="#con">Video8</a></span>
						<span class="ajivideo" onclick="ajivideo8()"><a href="#coact">video9</a></span>
						<span class="ajivideo" onclick="ajivideo9()"><a href="#home">Video10</a></span>
						<span class="ajivideo" onclick="ajivideo10()"><a href="#aout">Video11</a></span>
						<span class="ajivideo" onclick="ajivideo11()"><a href="#conact">Video12</a></span>
						
					  </div>
					</div>
											  
						  
						  
						  
						  
						  
						  
					</div>			
									
					
				
				</div>
				
				
				
			
				
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
				
				<div class="styles">
							
					<div class="harheader">
					  <h1 style="text-align:center;">VIDEOS</h1>
					</div>

					<div class="harrow">

					<div class="col-3 col-s-3 menuhar">
					  <ul>
						<li>PET NAME</li>
						<li>PET ID</li>
						<li>PET CLINIC</li>
						<li>PET HOME</li>
					  </ul>
					</div>

					<div class="col-6 col-s-9">
						<div class="haranhide" id="haranhide">
							<video width="400" controls>
							<source src="videos\v9.mp4"" type="video/mp4">
							</video>
						</div>
						<div class="haranhide">
							<video width="400" controls>
							<source src="videos\v2.mp4" type="video/mp4">
							</video>
						</div>
						<div class="haranhide">
							<video width="400" controls>
							<source src="videos\v3.mp4" type="video/mp4">
							</video>
						</div>
						<div class="haranhide">
							<video width="400" controls>
							<source src="videos\v4.mp4" type="video/mp4">
							</video>
						</div>
						<div class="haranhide">
							<video width="400" controls>
							<source src="videos\v5.mp4"" type="video/mp4">
							</video>
						</div>
						<div class="haranhide">
							<video width="400" controls>
							<source src="videos\v6.mp4" type="video/mp4">
							</video>
						</div>
						<div class="haranhide">
							<video width="400" controls>
							<source src="videos\v7.mp4" type="video/mp4">
							</video>
						</div>
						<div class="haranhide">
							<video width="400" controls>
							<source src="videos\v8.mp4"" type="video/mp4">
							</video>
						</div>
						<div class="haranhide">
							<video width="400" controls>
							<source src="videos\v9.mp4"" type="video/mp4">
							</video>
						</div>
					</div>

					<div class="col-3 col-s-12">
					  <div class="asidehar">
						<h2>What?</h2>
						<p>If the pet is happier for your life.</p>
						<h2>Where?</h2>
						<p>The pets are chiep</p>
						<h2>How BUY?</h2>
						<p>Our Pet Shop is waiting for u</p>
					  </div>
					</div>

					</div>

					<div class="footerhar">
					  <p>ALL VIDEOS ARE UPLOAD BY PET SHOP.</p>
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
						<object width="140" height="150"  data="https://www.youtube.com/embed/tgbNymZ7vqY " >
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