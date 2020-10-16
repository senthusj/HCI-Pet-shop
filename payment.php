
<?php
session_start();
$showdetail=false;
require 'require.php';
if(!isset($_SESSION['myid']))
{
	$showdetail=true;
	header("location:lopage.php");
	
}
if(empty($_SESSION['shopping_cart']))
{
	
	header("location:order.php");
	
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

			$error_card="";
			
			$card_value="";


			
			$error_found=false;
			
			
		
	
		if(isset($_POST['btnorder']) OR isset($_POST['btnpay']) )
			
			{
						if($_SESSION['check_onetime'])
						{
							$sqlin="INSERT INTO orders(customer_id) values('$myid')";
							if($con->query($sqlin))
							{
							}
							else
							{
								echo $con->error;
							}
						}
					
				foreach($_SESSION['shopping_cart'] as $keys=>$values)
				{
					
					
						$ilist=$values['item_id'];
						$iprice=$values['itemprice'];
						$iquantity=$values['item_quantity'];
						$iimage=$values['item_image'];
						
						$sqlorder="SELECT max(order_id) FROM orders";
						$resultf=$con->query($sqlorder);
						if($resultf->num_rows>0)
						{
							while($row=$resultf->fetch_assoc())
								
								{
									
									$iorder=$row['max(order_id)'];
								}
						
							if($_SESSION['check_onetime'])
							{
								$sqlf="INSERT INTO order_items(order_id,customer_id,item_id,quantity,price,image) values('$iorder','$myid','$ilist','$iquantity','$iprice','$iimage')";
								if($con->query($sqlf))
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
								echo $con->error;
							}
					
					}
					
					
					
					
					
					
					$sqlcus="SELECT * FROM customer WHERE customer_id='$myid'";
					$result=$con->query($sqlcus);
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{

							$pay_fname=$row['first_name'];
							$pay_lname=$row['last_name'];
							
						}					
						
					}
					else
					{
						echo $con->error;
						
					}
					
					$total_amount=$_SESSION['total_amount'];
					$_SESSION['check_onetime']=false;
					
				}
				
				if(isset($_POST['btnpay']))
			{
				$sqlcard="SELECT * FROM card";
				
				$result=$con->query($sqlcard);
				if($result->num_rows>0)
				{
					while($row=$result->fetch_array())
					{
						if($_POST['cardname'] == $row['card_no'] && date("Y-m-d") <= $row['expdate'] && $_POST['payzip']==$row['zipcode'] )
						{
							$paddress=$_POST['paddress'];
							$pcity=$_POST['pcity'];
							$td=date("Y-m-d");
							$card_value=$row['card_no'];
							$error_found=true;
							$card_no=$row['card_id'];
							$sqlpay="INSERT INTO payment(payment_date,order_id,customer_id,card_id,totalprice,Address,city) 
							values('$td','$iorder','$myid','$card_no','$total_amount','$paddress','$pcity')";
							if($con->query($sqlpay))
							{
								$today = date("H:i:s");
								$sqlupdate="INSERT INTO notification(customer_id,message,name,last_payment,card_no,date,time)
								values('$myid','Payment Sucessfull!!..','$pay_lname','$total_amount','$card_value','$td','$today')";
								
								if($con->query($sqlupdate))
								{
									unset($_SESSION['shopping_cart']);
									$sqldel="DELETE FROM addcart";
									$resultdel=$con->query($sqldel);
									header("location:p3.php");
								}
								else
								{
									echo $con->error;
								}
								$sqlnot="INSERT INTO addnotification(customer_id) values('$myid')";
								if($con->query($sqlnot))
								{
									
								}
								else
								{
									$con->error;
								}
							}
							else
							{
								echo $con->error;
							}
						}
						else
						{
							$error_card="*Invalid Card Number/Your Card is Expired/Invalid Zip_code*";
						}
						
					}
				}
				
				
				
				$_SESSION['paytrue']=true;
				
				
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
	

	
	<link href="css/payment.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />	
		
		
		
		
		
	


   
		
		

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
				 <input type="text" name="search" placeholder="SEARCH....">
					<button type="submit" id="mybutton"><i class="fa fa-search"></i></button>
					
				</div>
				
				<div class="headercolumn" style="width:15%; margin-top:6px;">
					<div class="addtocart1">
											<?php
				if(!$showdetail){
					
				
					
					?>	
						
			
							
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
					
					
					
					
					
	
					<div class="pay">
	<table  aligen="center" cellspacing="2">
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><img src="images/22a.jpg" width="100%"></td>
	<td><h1>Payment</h1></td>
	
	</tr>
	</table>
	<form method="POST" action="payment.php">
	<table>
	<tr>
	<td><label for="fname">Full Name</label>
	</td>
	<td>
     <input type="text" id="fname" name="firstname" value="<?php echo $pay_fname.$pay_lname;?>" placeholder="John M. Doe">
	 </td>
	 </tr>
	 <tr>
	 <td>
	 <label for="cname">Card No.</label>
	 </td>
	 <td>
	 <input type="text" id="cname" value="<?=$card_value;?>" name="cardname" placeholder="">
	 </td>
	
	 <tr>
	 <td>
	 <label for="cards">we accept</label>
	 </td>
	 <td>
			<i class="fa fa-cc-visa" style="color:navy;"></i>
			<i class="fa fa-cc-amex" style="color:blue;"></i>
			<i class="fa fa-cc-mastercard" style="color:red;"></i>
			<i class="fa fa-cc-discover" style="color:orange;"></i>
	 </td>
	 </tr>
	 <tr>
	 <td>
		<label for="address1">Address 1</label>
		</td>
		<td>
		<input type="text"  name="paddress" id="address2">
		</td>
	 </tr>
	 
	 <tr>
	 <td>
		<label for="city">City</label>
	 </td>
	 <td>
		<input type="text" name="pcity" id="city">
	 </td>
	 </tr>
	 <tr>
	 <td>
		<label for="pcode">Postal/Zip code</label>
		</td>
		<td>
		<input type="text"  name="payzip" id="pcode">
		</td>
	 </tr>
	 
	
		<p style="color:white; background-color:red; font-size:18px;"><?php echo $error_card; ?></p>
	 <tr>
	 <td>
		<label for="pamount">Payment Amount</label>
		</td>
		<td>
		<input type="text" id="pamount" name="pay_amount" value="<?php echo "RS.".$total_amount;?>">
		</td>
	 </tr> 
	 <tr>
	 <td></td>
	 <td>
	 <div class="submit">
	 
			<input type="submit" value="pay" name="btnpay" >
			
		</div>
	</td>
	</tr>
	</table>
	</form>
	<table>
	<tr>
	<td><img src="images/7.jpg" width="80px" height="80px"></td>
	
	</tr>
	</table>
	</div>
</body>
		
				
					
				
				
				
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