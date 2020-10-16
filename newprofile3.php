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
	header("location:lopage.php");
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
<?php
				
				
				$phpmail="";
				$phppassword="";
				$phprepassword="";
				$phppassworderror="";
				$phprepassworderror="";
				$phpmailerror="";
				$phpmailcorrect="";
				$errorfound=false;
				$a=false;
				
				if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					$phpmail=$_POST['mailvalue'];
					if(empty($phpmail))
					{
						$phpmailerror="*Email is mandatory*";
						$errorfound=true;
					}
					
					else
					{
						if (filter_var($phpmail, FILTER_VALIDATE_EMAIL))
						{ 
							
						}
						
						else
						{
							$phpmailerror="*Invalid email address*";
							$errorfound=true;
							
						}
				
					}
					$phppassword=$_POST['fpassword'];
					if(empty($phppassword))
					{
						$phppassworderror="*password is mandatory*";
						$errorfound=true;
						
					}
					
					
					$phprepassword=$_POST['refpassword'];
					if(empty($phprepassword))
					{
						$phprepassworderror="*password is mandatory*";
						$errorfound=true;
					}
					
					if($phprepassword!=$phppassword)
					{	$a =true;
						$errorfound=true;
						
					}
					
					
					
					
					
				
				}
				
				?>		


<?php
require 'require.php';
$identify=false;

if(isset($_POST['btnsubmit']))
{
	if(!$errorfound)
	{
				
		$sqld="SELECT * FROM customer WHERE customer_id='$myid'";
	
		$result = $con->query($sqld);

							if($result->num_rows > 0)
							{
								 while($row = $result->fetch_array()) 
									 {
									
										$identify_mail=$row['email_id'];
										

									 }									
									
								
							}
							
							else
							{
								$errorlogin="*invalid login*";
							}



				if($phpmail==$identify_mail)
					
					{
						$sqls="UPDATE  customer SET password='$phppassword'

						 WHERE customer_id='$myid'";
						if($con->query($sqls))
						{
							
							$identify=true;
						}
						else
						{
								echo "Error:".$con->error;
						}
						
					}
					
					
					else
					{
						$identify=false;
						
					}
		
	}
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

	<script type="text/javascript" src="javascript/homevideo.js"></script>

	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	
	<link href="css/profile.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	
		
		
		
		<style>
		
		#passdisplay,#passdisplay1,#passdisplay2
		{
		display:none;
		
		border:2px solid yellow;
		}
		
		#passdisplay3,#passdisplay4
		{
		
		
		padding:8px;
		}
		.invalid
		{
			color:red;
			margin-left:35px;
		}
		
		.invalid:before
		{
			content: "✖";
			left:-30px;
			 position: relative;
		
		}
		p
		{
			
		}
		
		.valid
		
		{
			color:green;
			margin-left:35px;
			
		}
		
		.valid:before
		{
			position: relative;
			left: -30px;
			content: "✔";
		
		}
		</style>
		
		
	


   
		
		

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
				<form METHOD="POST" action="newprofile3.php">
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
			
			<div class="middleside" id="funhidemiddle_aji_content"  onMouseOver="funhideoption()"><!---div class middle side start---->
				<!------ image slide show------>
	
		<div class="styles" style="height:950px;">
					
						
					
					<script>
					var ajishow=0;
					var slideIndex = 0;
					var divindex=0;
					showSlides();
					</script>
			
				
					
		<div class="aji">			
		
			
			<div class="profilecontent2">
		
			<form method="POST" action="./newprofile3.php">
				<div class="profilerowbutton">
					<div class="profilerowbutton">
					<a href="newprofile1.php"><button type="button" id="profilebtn1"><p>Your Profile<p></button></a>
					<a href="newprofile.php"><button type="button" id="profilebtn2"><p> Edit Profile<p></button></a>
					<a href="newprofile3.php"><button type="button" id="profilebtn3"><p>Edit Password<p></button></a>
					<a href="logout.php"><button type="button" id="profilebtn4"><p>Sign Off<p></button></a>
				</div>
				</div>
				<!----Edit my profile picture---------->
			
				<!----Edit my password---------->
				<div id="Ajprofilechange2">
				
					<div class="profilerow">
					<p id="ajipp1" style="color:red;"></p>
						<div class="profilerowcolumn1">
							<label>Email id</label>
						</div>
						<div class="profilerowcolumn2">
							<input type="text" placeholder="@gmail.com" id="femail" value="<?=$errorfound ? $phpmail: ""?>" name="mailvalue">
							<div class="success">
								<p id="p1"><?php echo $phpmailerror;?> </p>
								
							</div>
						</div>
					
					</div>
					
					<div class="profilerow">
						<div class="profilerowcolumn1">
							<label>Enter new password </label>
						</div>
						<div class="profilerowcolumn2">
							<input type="password" placeholder="password" id="frepass" name="fpassword"
							pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain
							at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
							<div class="success">
								<p id="p3"><?php echo $phppassworderror;?></p>
							</div>
						</div>
					
					</div>
					<div class="profilerow">
						<div class="profilerowcolumn1">
							<label>Re-enter password</label>
						</div>
						<div class="profilerowcolumn2">
							<input type="password" placeholder="New password" id="fnewpass" name="refpassword"
							pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain
							at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
							<div class="success">
								<p id="p4"> <?php echo $phprepassworderror;?></p>
							</div>
						</div>
					
					</div>
				</div><!----div end--->
				
				
					
					
				
					<div class="profilerow">
						<div class="profilerowcolumn3">
							
							<input type="submit" id="submit" name="btnsubmit" > 
								<a href="p3.php"><button type="button">Cancel</button></a>
						</div>
					
					</div>
					
						<div class="profilerow">
							<div id="passdisplay">
								<h3>Password Must contain:</h3>
								<p id="capital" class="invalid">Uppercase Letter</p>
								<p id="smaller" class="invalid">Lowercase Letter</p>
								<p id="number" class="invalid">Number</p>
								<p id="maximum" class="invalid">Maximum number of digits is 8</p>
							</div>
							<div id="passdisplay1">
								<h3> Re-enter Password Must contain:</h3>
								<p id="capitals" class="invalid">Uppercase Letter</p>
								<p id="smallers" class="invalid">Lowercase Letter</p>
								<p id="numbers" class="invalid">Number</p>
								<p id="maximums" class="invalid">Maximum number of digits is 8</p>
							</div>
							<?php 
							if($_SERVER["REQUEST_METHOD"]=="POST" AND $a==true) {?>
								<div id="passdisplay3">
									<h3 style="color:red;" id="myh3">Password Does Not Match!....</h3>				
								</div>
							<?php }?>
							<?php 
							if($_SERVER["REQUEST_METHOD"]=="POST" AND !$errorfound AND $identify) {?>
								<div id="passdisplay4">
									<h3 style="color:green;">Your Changes has been Updated</h3>				
								</div>
							<?php }?>
							
							<?php 
							if($_SERVER["REQUEST_METHOD"]=="POST" AND !$errorfound AND !$identify) {?>
								<div id="passdisplay3">
									<h3 style="color:red;" id="myh3">Your Email is Invalid</h3>				
								</div>
							<?php }?>
						</div>
		
				
				
			</form>	
					
		
			</div><!-------form end--->
		
			
		
		
		
		</div>
		
			<!-------java script start------>		
		</div>
		
		
		<script>
		var fnewpassword=document.getElementById('frepass');
		var fnewpassword1=document.getElementById('fnewpass');
		var flower=document.getElementById('smaller');
		var fupper=document.getElementById('capital');
		var fnumber=document.getElementById('number');
		var fmaximum=document.getElementById('maximum');
		
		fnewpassword.onfocus = function() 
		{
		document.getElementById("passdisplay").style.display = "block";
		document.getElementById("passdisplay3").style.display = "none";
		}

		
		
		fnewpassword.onblur=function()
		{
			document.getElementById('passdisplay').style.display="none";
			
		
		}
		
		
		fnewpassword.onkeyup=function()
		{
			var lc=/[a-z]/g;
			if(fnewpassword.value.match(lc))
			{
				flower.classList.remove("invalid");
				flower.classList.add("valid")	
				
			}
			else
			{
			flower.classList.remove("valid");
				flower.classList.add("invalid")	
			}
			
			var uc=/[A-Z]/g;
			if(fnewpassword.value.match(uc))
			{
				fupper.classList.remove("invalid");
				fupper.classList.add("valid");
			}
			
			else
			{
				fupper.classList.remove("valid");
				fupper.classList.add("invalid");
			}
			
			var tn=/[0-9]/g;
			if(fnewpassword.value.match(tn))
			{
				fnumber.classList.remove("invalid");
				fnumber.classList.add("valid");
			}
			else
			{
				fnumber.classList.remove("valid");
				fnumber.classList.add("invalid");
			}
			
			
			if(fnewpassword.value.length >= 8)
			{
				fmaximum.classList.remove('invalid');
				fmaximum.classList.add('valid');
			}
			else
			{
				fmaximum.classList.remove('valid');
				fmaximum.classList.add('invalid');
			}
		}
			
			
			
			
			
		var fnewpassword1=document.getElementById('fnewpass');
		var flowers=document.getElementById('smallers');
		var fuppers=document.getElementById('capitals');
		var fnumbers=document.getElementById('numbers');
		var fmaximums=document.getElementById('maximums');
		
			
			
			fnewpassword1.onfocus = function() 
		{
		document.getElementById("passdisplay1").style.display = "block";
		document.getElementById("passdisplay3").style.display = "none";
		
		}

		
		fnewpassword1.onblur=function()
		{
			document.getElementById('passdisplay1').style.display="none";
			
		}
		
		
		fnewpassword1.onkeyup=function()
		{
			var lc=/[a-z]/g;
			if(fnewpassword1.value.match(lc))
			{
				flowers.classList.remove("invalid");
				flowers.classList.add("valid")	
				
			}
			else
			{
			flowers.classList.remove("valid");
				flowers.classList.add("invalid")	
			}
			
			var uc=/[A-Z]/g;
			if(fnewpassword1.value.match(uc))
			{
				fuppers.classList.remove("invalid");
				fuppers.classList.add("valid");
			}
			
			else
			{
				fuppers.classList.remove("valid");
				fuppers.classList.add("invalid");
			}
			
			var tn=/[0-9]/g;
			if(fnewpassword1.value.match(tn))
			{
				fnumbers.classList.remove("invalid");
				fnumbers.classList.add("valid");
			}
			else
			{
				fnumbers.classList.remove("valid");
				fnumbers.classList.add("invalid");
			}
			
			
			if(fnewpassword1.value.length >= 8)
			{
				fmaximums.classList.remove('invalid');
				fmaximums.classList.add('valid');
			}
			else
			{
				fmaximums.classList.remove('valid');
				fmaximums.classList.add('invalid');
			}
		}
			
		
		
		</script>
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