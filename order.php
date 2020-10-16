

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
$sqlget="SELECT count(add_id), max(add_id) FROM addcart";

				$resultget=$con->query($sqlget);
				if($resultget->num_rows>0)
				{
					while($row=$resultget->fetch_array())
					{
						$add_cart=$row['count(add_id)'];
						$max_cart=$row['max(add_id)'];
					}
				}
				else
				{
					$con->error;
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

<?php
	if(isset($_GET['mes']))
	{
		$a=$_GET['mes'];
	
		$sqlg="DELETE FROM orders WHERE order_id='$a'";
		$results=$con->query($sqlg);
		header("location:order.php");
		
	}	


?>

<?php

if(isset($_GET['action']))
{
	if($_GET['action'] == 'delete')
		
		{
				foreach($_SESSION['shopping_cart'] as $keys=>$values)
				{
					if($values['item_id']==$_GET['id'])
					{
						
						unset($_SESSION['shopping_cart'][$keys]);
						echo "<script>alert('Do you want to remove this')</script>";
						
					
					}
				}
			
			
			$sqldel="DELETE FROM addcart WHERE add_id=$max_cart";
			if($con->query($sqldel))
				
				{
					header("location:order.php");
				}
				else
				{
					echo $con->error;
				}
			
		}
		
}



?>




<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utp-8">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="css/anu3.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		
			<link href="css/home1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
				<img src="images\as.png" style="width:190px; height:150px; float:left;">
				</div>
				<div class="headercolumn" style="height:10px;">
				  
				<p id="petname"></p>
				</div>
				
				<div class="headercolumn" style="width:23%">
				 <form METHOD="POST" action="order.php">
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


			<h3 align="center">Order_Details </h3>



	<table class="mytable" border="1">
	<tr>
	<th width="15%">Item Name</th>
	<th width="15%">Item_image</th>
	<th width="8%">Quantity</th>
	<th width="8%">Price</th>
	<th width="10%">Total</th>
	<th width="5%">Action</th>
	</tr>
	<?php
	
	
	if(!empty($_SESSION['shopping_cart']))
	{
		$total=0;
		foreach($_SESSION['shopping_cart'] as $keys=>$values)
		{
			
		
		?>
		
		<tr><td><?php echo $values['itemname'];?></td>
		<td><?php echo "<img  class='img2' style='width:90px; height:90px; box-shadow:1px 1px 1px 1px black;' src='images/".$values['item_image']."' >" ?></td>
		<td><?php echo $values['item_quantity'];?></td>
		<td><?php echo $values['itemprice'];?></td>
		<td><?php echo number_format($values['item_quantity'] * $values['itemprice'],2); ?></td>
		<td><a href="order.php?action=delete&id=<?php echo  $values["item_id"]; ?>" ><span class="text-danger">Remove</span></a></td>
		</tr>
		<?php $total =$total +($values['item_quantity'] * $values['itemprice']);
		}
		
		?>
		
		<tr>
		<td colspan='4' align='right'>Total</td>
		<td align="right">Rs<?php echo number_format($total,2);?></td>
		<?php 
		
		$_SESSION['total_amount']=$total; 
		$_SESSION['check_onetime']=true;
		
		?>
		<td></td>
		</tr>
	
	<?php
	
	}
	
	?>
	
	
	
</table>
	<div class="contentimage">
	<table>
	
	
	<tr>
	<form method="POST" action="payment.php">
	<td><input type="submit" value ="ORDER" name="btnorder" style="padding:8px; background-color:orange; color:white; border:none; width:100%; font-size:20px;"></td>
	</form>
		<form method="POST" action="p3.php">
	<td><input type="submit" value ="CANCEL" name="btncancel" style="padding:8px; background-color:orange; color:white; border:none; width:100%; font-size:20px;"></td>
		</form>
		</tr>
		
		</form>
		</table>
		</div>			
					








<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("anucolumn");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "anushow");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "anushow");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
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