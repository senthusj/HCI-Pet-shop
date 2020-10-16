
<?php
session_start();
$showdetail=false;
require'require.php';

if(isset($_SESSION['myid']))
{
	$myid=$_SESSION['myid'];
	$seller_email=$_SESSION['mymail'];
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<title>Homepage</title>
		
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	

		
		
		<link href="css/seller.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="javascript/home.js"></script>
		
		
	
	
		
					<script>
					var ajishow=0;
					var slideIndex = 0;
					var divindex=0;
					showSlides();
		

					</script>
					
					
		

	</head>
	
	
	
	
		<div class="header">
		
		<h2 id="hed1">
		
		<div class="row">
				<div class="headercolumn ">
				<img src="as.png" style="width:190px; height:140px; float:left;">
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
					<a href="newclinic.php">Clinic</a>
					<a  style="background-color:red; href="newseller.php">Seller</a>
					
					<a href="newaboutus.php" style="float:right;">About us</a>
				</div>
				<div class="dropdown">
				
					<button class="dropbtn" onclick="myFunction()" style="float:right;"><i class="fa fa-bars"></i></button>
					
						<div id="myDropdown" class="dropdown-content">
								<span><a href="p3videos.php">Videos</a></span>
								<span><a href="#abot">History<span></a>
								<a href="#">Contact</a>
																
								<div class="ajidivtot">
									<div class="ajidiv1">
													
									</div>
								
									<div class="ajidiv2">
								
													
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
				
					
						
					
			
					
					<div class="davis">
					<form enctype="multipart/form-data" method="POST" action="newseller.php">		
<div class="row">
<div class="column" style="background-color:#92def3;">
 
<div style="text-align:center">
  <h1 style="color:#f50101;">SELL YOUR PET</h1>
  
</div>


<div class="row1">
 <div id="preview">
<img id="previewimg" class="image11" src="">

</div>
<p >Upload Image : 
<input type="file" name="file"  id="file" size="40" >

</p>
</div>



<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>
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
<div class="column" style="background-color:#92def3;">
<p>Breed   :<br>
<span ><select  name="breed">
<option value="Affenpinscher">Affenpinscher</option>
<option value="Afghan Hound">Afghan Hound</option>
<option value="Airedale Terrier">Airedale Terrier</option>
<option value="Akita">Akita</option>
<option value="Alaskan Malamute">Alaskan Malamute</option>
<option value="American English Coonhound">American English Coonhound</option>
<option value="American Eskimo Dog">American Eskimo Dog</option>
<option value="American Foxhound">American Foxhound</option>
<option value="American Pit Bull Terrier">American Pit Bull Terrier</option>
<option value="American Water Spaniel">American Water Spaniel</option>
<option value="Anatolian Shepherd Dog">Anatolian Shepherd Dog</option>
<option value="Appenzeller Sennenhunde">Appenzeller Sennenhunde</option>
<option value="Australian Cattle Dog">Australian Cattle Dog</option>
<option value="Australian Shepherd">Australian Shepherd</option>
<option value="Australian Terrier">Australian Terrier</option>
<option value="Azawakh">Azawakh</option>
<option value="Barbet">Barbet</option>
<option value="Basenji">Basenji</option>
<option value="Basset Hound">Basset Hound</option>
<option value="Beagle">Beagle</option>
<option value="Bearded Collie">Bearded Collie</option>
<option value="Bedlington Terrier">Bedlington Terrier</option>
<option value="Belgian Malinois">Belgian Malinois</option>
<option value="Belgian Sheepdog">Belgian Sheepdog</option>
<option value="Belgian Tervuren">Belgian Tervuren</option>
<option value="Berger Picard">Berger Picard</option>
<option value="Bernese Mountain Dog">Bernese Mountain Dog</option>
<option value="Bichon Frise">Bichon Frise</option>
<option value="Black and Tan Coonhound">Black and Tan Coonhound</option>
<option value="Black Russian Terrier">Black Russian Terrier</option>
<option value="Bloodhound">Bloodhound</option>
<option value="Bluetick Coonhound">Bluetick Coonhound</option>
<option value="Bolognese">Bolognese</option>
<option value="Border Collie">Border Collie</option>
<option value="Border Terrier">Border Terrier</option>
<option value="Borzoi">Borzoi</option>
<option value="Boston Terrier">Boston Terrier</option>
<option value="Bouvier des Flandres">Bouvier des Flandres</option>
<option value="Boxer">Boxer</option>
<option value="Boykin Spaniel">Boykin Spaniel</option>
<option value="Bracco Italiano">Bracco Italiano</option>
<option value="Briard">Briard</option>
<option value="Brittany">Brittany</option>
<option value="Brussels Griffon">Brussels Griffon</option>
<option value="Bull Terrier">Bull Terrier</option>
<option value="Bulldog">Bulldog</option>
<option value="Bullmastiff">Bullmastiff</option>
<option value="Cairn Terrier">Cairn Terrier</option>
<option value="Canaan Dog">Canaan Dog</option>
<option value="Cane Corso">Cane Corso</option>
<option value="Cardigan Welsh Corgi">Cardigan Welsh Corgi</option>
<option value="Catahoula Leopard Dog">Catahoula Leopard Dog</option>
<option value="Cavalier King Charles Spaniel">Cavalier King Charles Spaniel</option>
<option value="Cesky Terrier">Cesky Terrier</option>
<option value="Chesapeake Bay Retriever">Chesapeake Bay Retriever</option>
<option value="Chihuahua">Chihuahua</option>
<option value="Chinese Crested">Chinese Crested</option>
<option value="Chinese Shar-Pei">Chinese Shar-Pei</option>
<option value="Chinook">Chinook</option>
<option value="Chow Chow">Chow Chow</option>
<option value="Clumber Spaniel">Clumber Spaniel</option>
<option value="Cockapoo">Cockapoo</option>
<option value="Cocker Spaniel">Cocker Spaniel</option>
<option value="Collie">Collie</option>
<option value="Coton de Tulear">Coton de Tulear</option>
<option value="Curly-Coated Retriever">Curly-Coated Retriever</option>
<option value="Dachshund">Dachshund</option>
<option value="Dalmatian">Dalmatian</option>
<option value="Dandie Dinmont Terrier">Dandie Dinmont Terrier</option>
<option value="Doberman Pinscher">Doberman Pinscher</option>
<option value="Dogue de Bordeaux">Dogue de Bordeaux</option>
<option value="English Cocker Spaniel">English Cocker Spaniel</option>
<option value="English Foxhound">English Foxhound</option>
<option value="English Setter">English Setter</option>
<option value="English Springer Spaniel">English Springer Spaniel</option>
<option value="English Toy Spaniel">English Toy Spaniel</option>
<option value="Entlebucher Mountain Dog">Entlebucher Mountain Dog</option>
<option value="Field Spaniel">Field Spaniel</option>
<option value="Finnish Lapphund">Finnish Lapphund</option>
<option value="Finnish Spitz">Finnish Spitz</option>
<option value="Flat-Coated Retriever">Flat-Coated Retriever</option>
<option value="Fox Terrier">Fox Terrier</option>
<option value="French Bulldog">French Bulldog</option>
<option value="German Pinscher">German Pinscher</option>
<option value="German Shepherd Dog">German Shepherd Dog</option>
<option value="German Shorthaired Pointer">German Shorthaired Pointer</option>
<option value="German Wirehaired Pointer">German Wirehaired Pointer</option>
<option value="Giant Schnauzer">Giant Schnauzer</option>
<option value="Glen of Imaal Terrier">Glen of Imaal Terrier</option>
<option value="Goldador">Goldador</option>
<option value="Golden Retriever">Golden Retriever</option>
<option value="Goldendoodle">Goldendoodle</option>
<option value="Gordon Setter">Gordon Setter</option>
<option value="Great Dane">Great Dane</option>
<option value="Great Pyrenees">Great Pyrenees</option>
<option value="Greater Swiss Mountain Dog">Greater Swiss Mountain Dog</option>
<option value="Greyhound">Greyhound</option>
<option value="Harrier">Harrier</option>
<option value="Havanese">Havanese</option>
<option value="Ibizan Hound">Ibizan Hound</option>
<option value="Icelandic Sheepdog">Icelandic Sheepdog</option>
<option value="Irish Red and White Setter">Irish Red and White Setter</option>
<option value="Irish Setter">Irish Setter</option>
<option value="Irish Terrier">Irish Terrier</option>
<option value="Irish Water Spaniel">Irish Water Spaniel</option>
<option value="Irish Wolfhound">Irish Wolfhound</option>
<option value="Italian Greyhound">Italian Greyhound</option>
<option value="Jack Russell Terrier">Jack Russell Terrier</option>
<option value="Japanese Chin">Japanese Chin</option>
<option value="Keeshond">Keeshond</option>
<option value="Kerry Blue Terrier">Kerry Blue Terrier</option>
<option value="Komondor">Komondor</option>
<option value="Kooikerhondje">Kooikerhondje</option>
<option value="Korean Jindo Dog">Korean Jindo Dog</option>
<option value="Kuvasz">Kuvasz</option>
<option value="Labradoodle">Labradoodle</option>
<option value="Labrador Retriever">Labrador Retriever</option>
<option value="Lakeland Terrier">Lakeland Terrier</option>
<option value="Lancashire Heeler">Lancashire Heeler</option>
<option value="Leonberger">Leonberger</option>
<option value="Lhasa Apso">Lhasa Apso</option>
<option value="Lowchen">Lowchen</option>
<option value="Maltese">Maltese</option>
<option value="Maltese Shih Tzu">Maltese Shih Tzu</option>
<option value="Maltipoo">Maltipoo</option>
<option value="Manchester Terrier">Manchester Terrier</option>
<option value="Mastiff">Mastiff</option>
<option value="Miniature Pinscher">Miniature Pinscher</option>
<option value="Miniature Schnauzer">Miniature Schnauzer</option>
<option value="Mutt">Mutt</option>
<option value="Neapolitan Mastiff">Neapolitan Mastiff</option>
<option value="Newfoundland">Newfoundland</option>
<option value="Norfolk Terrier">Norfolk Terrier</option>
<option value="Norwegian Buhund">Norwegian Buhund</option>
<option value="Norwegian Elkhound">Norwegian Elkhound</option>
<option value="Norwegian Lundehund">Norwegian Lundehund</option>
<option value="Norwich Terrier">Norwich Terrier</option>
<option value="Nova Scotia Duck Tolling Retriever">Nova Scotia Duck Tolling Retriever</option>
<option value="Old English Sheepdog">Old English Sheepdog</option>
<option value="Otterhound">Otterhound</option>
<option value="Papillon">Papillon</option>
<option value="Peekapoo">Peekapoo</option>
<option value="Pekingese">Pekingese</option>
<option value="Pembroke Welsh Corgi">Pembroke Welsh Corgi</option>
<option value="Petit Basset Griffon Vendeen">Petit Basset Griffon Vendeen</option>
<option value="Pharaoh Hound">Pharaoh Hound</option>
<option value="Plott">Plott</option>
<option value="Pocket Beagle">Pocket Beagle</option>
<option value="Pointer">Pointer</option>
<option value="Polish Lowland Sheepdog">Polish Lowland Sheepdog</option>
<option value="Pomeranian">Pomeranian</option>
<option value="Poodle">Poodle</option>
<option value="Portuguese Water Dog">Portuguese Water Dog</option>
<option value="Pug">Pug</option>
<option value="Puggle">Puggle</option>
<option value="Puli">Puli</option>
<option value="Pyrenean Shepherd">Pyrenean Shepherd</option>
<option value="Rat Terrier">Rat Terrier</option>
<option value="Redbone Coonhound">Redbone Coonhound</option>
<option value="Rhodesian Ridgeback">Rhodesian Ridgeback</option>
<option value="Rottweiler">Rottweiler</option>
<option value="Saint Bernard">Saint Bernard</option>
<option value="Saluki">Saluki</option>
<option value="Samoyed">Samoyed</option>
<option value="Schipperke">Schipperke</option>
<option value="Schnoodle">Schnoodle</option>
<option value="Scottish Deerhound">Scottish Deerhound</option>
<option value="Scottish Terrier">Scottish Terrier</option>
<option value="Sealyham Terrier">Sealyham Terrier</option>
<option value="Shetland Sheepdog">Shetland Sheepdog</option>
<option value="Shiba Inu">Shiba Inu</option>
<option value="Shih Tzu">Shih Tzu</option>
<option value="Siberian Husky">Siberian Husky</option>
<option value="Silky Terrier">Silky Terrier</option>
<option value="Skye Terrier">Skye Terrier</option>
<option value="Sloughi">Sloughi</option>
<option value="Small Munsterlander Pointer">Small Munsterlander Pointer</option>
<option value="Soft Coated Wheaten Terrier">Soft Coated Wheaten Terrier</option>
<option value="Stabyhoun">Stabyhoun</option>
<option value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option>
<option value="Standard Schnauzer">Standard Schnauzer</option>
<option value="Sussex Spaniel">Sussex Spaniel</option>
<option value="Swedish Vallhund">Swedish Vallhund</option>
<option value="Tibetan Mastiff">Tibetan Mastiff</option>
<option value="Tibetan Spaniel">Tibetan Spaniel</option>
<option value="Tibetan Terrier">Tibetan Terrier</option>
<option value="Toy Fox Terrier">Toy Fox Terrier</option>
<option value="Treeing Tennessee Brindle">Treeing Tennessee Brindle</option>
<option value="Treeing Walker Coonhound">Treeing Walker Coonhound</option>
<option value="Vizsla">Vizsla</option><option value="Weimaraner">Weimaraner</option>
<option value="Welsh Springer Spaniel">Welsh Springer Spaniel</option>
<option value="Welsh Terrier">Welsh Terrier</option>
<option value="West Highland White Terrier">West Highland White Terrier</option>
<option value="Whippet">Whippet</option>
<option value="Wirehaired Pointing Griffon">Wirehaired Pointing Griffon</option>
<option value="Xoloitzcuintli">Xoloitzcuintli</option>
<option value="Yorkipoo">Yorkipoo</option>
<option value="Yorkshire Terrier">Yorkshire Terrier</option>
</select>
</span> 
</p>
<?php
require'require.php';
if(isset($_POST['sellbtn']))
{
	$error_found=false;
	$error_sell=false;
	
	$seller_sql="SELECT * FROM staff WHERE staff_id=$myid";
	$result_sell=$con->query($seller_sql);
	if($result_sell->num_rows > 0)
	{
		
		while($row=$result_sell->fetch_array())
		{
			$error_sell=true;
			
		}
		
	}
	
		if($error_sell)
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
				 
							$result = mysqli_query($con, "SELECT * FROM pet");
							
							
				 }		
			
	
	
	
	
	
				
				if($error_found)
				{
					
					$breed=$_POST['breed'];
					$color=$_POST['color'];
					$age=$_POST['text-557'];
					$name=$_POST['your-name'];
					$mail=$_POST['your-email'];
					
					
					
					
					$sqlseller="INSERT INTO pet(color,breed,Age,customer_id,image,name,email_id)
					values('$color','$breed','$age','$myid','$image','$name','$mail')";
					if($con->query($sqlseller))
					{
						
					}
					else
					{
						echo $con->error;
					}
				}
		}
		
		else
		{
			echo "<script> alert(' You are not Staff Please contact admin')</script>";
			
			
		}
		
}
?>


<p >Colour : <span ><select name="color" >
<option value="Black">Black</option>
<option value="White">White</option>
<option value="Brown">Brown</option>
<option value="Black tan">Black tan</option>
<option value="Tricolour">Tricolour</option>
<option value="Orange">Orange</option>
<option value="Golden Brown">Golden Brown</option>
<option value="Other">Other</option>
</select>
</span>
</p>




<p >Age in Month: 
<input type="text" name="text-557" value="" size="40" >
 
</p>



<p >Your Name: 
<input type="text" name="your-name" value="" size="40" >

</p>



<p > Your Email Id: 
 
<input type="email" name="your-email" value="" size="40" >

</p>

<p><div class="container-contact100-form-btn">
					<input type="submit" name="sellbtn"  value= "submit" class="contact100-form-btn">
						
					
				</div>

</p>





</div>
</div>
</form>
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