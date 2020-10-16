

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

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utp-8">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="css/home1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Homepage</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	

	
	<link rel="stylesheet" type="text/css" href="css/clinic.css">
		<script type="text/javascript" src="javascript/home.js"></script>
		
		
		
		
		
		
		
	


   
		
		

	</head>
	
	
	<body onResize="refresh()">
	
		<div class="header">
		
		<h2 id="hed1">
		
		<div class="row">
				<div class="headercolumn ">
				<img src="as.png" style="width:190px; height:130px; float:left;">
				</div>
				<div class="headercolumn" style="height:10px;">
				  
				<p id="petname"></p>
				</div>
				
				<div class="headercolumn" style="width:23%">
				<form METHOD="POST">
				  <input style="width:50%;height:25%" type="text" id ="search" name="search" placeholder="SEARCH....">
				 
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
					<div class="addtocart1">
											<?php
				if(!$showdetail){
					
				
					
					?>	
						<a href="order.php" style=" width:50px; height:45px; margin-top:13px;float:right; margin-right:-240px;"><i style="font-size:40px" class="fa">&#xf07a;</i>
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
					<a href="p3.php"">Home</a>
					<a  style="background-color:red; href="newclinic.php">Clinic</a>
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
				
					
					
					
					<script>
					var ajishow=0;
					var slideIndex = 0;
					var divindex=0;
					showSlides();
					</script>
					
					
					
			<div class="sstotal">

<a href="aa.php" class="ss1button">Feedback</a>
	<div class="ssscroll">
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor1.jpg" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
										As a animal veterinarian, I've done everything from working in a busy dog and cat practice, 
										to doing volunteer work in Sri Lanka, to teaching veterinary students about how to better communicate with the humans that their patients come with.
										and helps pet parents to understand diseases of companion animals and how to care pets.
										
										
										
																	
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. Chrdory<br>Akshi Pet Clinic<br>&#9742;  +(94)-779784215</p>
								</div>
								

										
		</div>
								
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
	
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor2.jpg" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
										I offers an array of
										treatments that soothe and solves any and all ailments that the 
										birds faces. Basically I diagnoses birds health problems,
										vaccinates against diseases - distemper and rabies ,etc.I helps
										to maintain the health and well-being of the birds, performs diagnostic tests
										such as X-Ray, EKG, Ultrasound and checks the blood, urine and faeces of the animal if needed. 
										
										
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. Nasrudin Shaikh<br>Pathan Clinic<br>&#9742;  +(94)-771758967</p>
								</div>

										
			</div>
								
										
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
	
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor3.jpg" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
										I protect the health of animals by diagnosing and controlling 
										its disease and treating it with the love, care and attention.
										I treat all the animals delicately and efficiently, ensuring that
										they are in safe hands.The vet's clinic is operational on all days of
										the week, from 11:00 - 19:00.As modes of payments, the doctor only accepts Cash from the patients.
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr.Chandimaa Perera<br>Ayshu Pet World<br>&#9742;  +(94)-771478523</p>
								</div>

										
			</div>
								
										
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
	
		</div><hr>
  	
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor4.png" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
											Just like you, I can’t imagine my life without my beloved pets. 
											I still love them completely and unconditionally!
											I’ve been a veterinarian for 8 years, 
											and I’ve done everything from volunteering in third world countries to opening 
											a modern and successful vet clinic. I’ve helped many different species of pets.
											I also have a lot of experience giving advice remotely, and I’m sure 
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. Destini R. Holloway<br>Ruberd Pet World<br>&#9742;  +(94)-773698521</p>
								</div>

										
			</div>
								
		
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
		
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor5.jpg" alt="DR" class="ssimage">
							
							<div class="ssoverlay">
									
										<div class="sstext">
										
													For me, helping a pet owner become educated about how
													to care  their pet is the key to a successful partnership
													between the veterinarian,  pet, and the pet parent.
													Also,I find that being able to work from my home allows me to answer
													their questions all over the world with using social media.
													 I currently work at several veterinary practices and emergency 
													 and critical care services in the Cambridge and London areas.
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. David Elbeze<br>Shree Dog Care Unit<br>&#9742;  +(94)-778521364</p>
										<p></p>
								</div>
								
			</div>
					
										
		
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
	
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor6.jpg" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
										I protects the health of animals by diagnosing and controlling its disease
										and treating it with the love, care and attention and  this medical professional is 
										extremely qualified.
										This vet has earned a regular group of clients over the years and has esteemed pet
										owners visiting the clinic.I treats 
										all the animals delicately and efficiently, ensuring that they are in safe hands. 
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. Geetha Nilesh<br>Badsha Pet Center<br>&#9742;  +(94)-771234567</p>
								</div>

										
			</div>
								
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
	
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor7.png" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
										During veterinary school I completed an externship at a small animal practice 
										and afterwards passed the American Veterinary Licensing Exam .
										I can help anyone, anytime, anywhere! There's no limit. I also like that the veterinarians all have
										such different backgrounds that there is such a large pool of knowledge, making it a great and convenient resource for pet owners worldwide.
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. Sarah ,BSC (HONS)<br>Veteniary Pet Clinic<br>&#9742;  +(94)-774867521</p>
								</div>

										
			</div>

											
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
	
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor8.jpg" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
										I completed my degree in veterinary medicine. 
										I have developed a keen interest in neurology, internal medicine and diagnostic imaging.
										For me, being in direct contact with clients and having the chance to help pet owners
										everyday is an absolute professional joy! I like answering challenging questions
										and being in contact with pet owners from all around the world. 
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. Massimo Orioles<br>Pet Care Center<br>&#9742;  +(94)-770189634</p>										
								</div>

										
			</div>
							
										
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
	

		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor9.jpg" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
										Our veterinary clinic is a general practice serving dogs, cats, and occasionally .
										In the clinic,I do a little bit of everything including wellness exams, new puppy.
										 I get immense professional and personal satisfaction
										when I’m able to help an owner and their pet work through these problems, 
										ultimately improving the bond between the two.
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. Jennifer Summerfiel<br>Prabhat Vaternary<br>&#9742;  +(94)-771120741</p>
								</div>

										
			</div>
								
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
	
		<div class="ssrow">
			<div class="sscontainer">
		
					<img src="images/doctor10.jpg" alt="DR" class="ssimage" >
							
							<div class="ssoverlay">
									
										<div class="sstext">
										 I have a lot of specific areas of interest within veterinary medicine.
										 In my practice I repeatedly find that symptoms that may not seem connected are.
										 This helps me get to the root cause of the problem rather than just treat the
										 symptoms.genuinely look forward to getting to know you 
										 and your pet, and helping you care for him or her in the best way possible.
										</div>
							</div>
							
							
								<div class="ssdoctor">
										<p>Dr. Somnath Dhainje<br>Do Do Pet Clinic<br>&#9742;  +(94)-777400167</p>
								</div>

										
			</div>
								
				<a href="form1.php"><button class="ssbutton"><span>Enquire Now </span></button></a>
		
		</div><hr>
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