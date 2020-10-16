

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

<?php

$sqlget="SELECT count(add_id) FROM addcart";

				$resultget=$con->query($sqlget);
				if($resultget->num_rows>0)
				{
					while($row=$resultget->fetch_array())
					{
						$add_cart=$row['count(add_id)'];
					}
				}
				else
				{
					$con->error;
				}


if(isset($_POST['add_to_cart']))
{
	
	
	
	
	
	
	
		

	if(isset($_SESSION['shopping_cart']))
	{
		
		$item_array_id=array_column($_SESSION['shopping_cart'],'item_id');
		if(!in_array($_GET['id'],$item_array_id))
			
			{
				$sqlcart="INSERT INTO addcart(customer_id) values('$myid')";
				$resultcard=$con->query($sqlcart);
			
				
$sqlget="SELECT max(add_id) FROM addcart";

				$resultget=$con->query($sqlget);
				if($resultget->num_rows>0)
				{
					while($row=$resultget->fetch_array())
					{
						$add_cart=$row['max(add_id)'];
					}
				}
				else
				{
					$con->error;
				}
				
				
				
				$item_tot=array(
			
				'tot_item'=>$add_cart);
		
				foreach($item_tot as $get=>$getno)
				{
					$a =$getno;
					if(!$_SESSION["shopping_cart"][$a])
					{
				
				
							$item_array=array(
					'item_id'=>$_GET['id'],
					'itemname'=>$_POST['hidden_name'],
					'itemprice'=>$_POST['hidden_price'],
					'item_quantity'=>$_POST['quantity'],
					'item_image'=>$_POST['hidden_image'] );
		
		
		
					$_SESSION["shopping_cart"][$a]=$item_array;
					
		
					}
					break;
					
				}
				
				
		$item_tot=array(
		
		'tot_item'=>$count);
		
		
		
		
		header("location:cat.php");
			}
			else
			{
				echo "<script>alert('item already added')</script>";
				echo "<script>window.location='cat.php'</script>";
			}
	}
	else
	{
		$sqlcart="INSERT INTO addcart(customer_id) values('$myid')";
				$resultcard=$con->query($sqlcart);
			
						
$sqlget="SELECT count(add_id) FROM addcart";

				$resultget=$con->query($sqlget);
				if($resultget->num_rows>0)
				{
					while($row=$resultget->fetch_array())
					{
						$add_cart=$row['count(add_id)'];
					}
				}
				else
				{
					$con->error;
				}

		$item_array=array(
		'item_id'=>$_GET['id'],
		'itemname'=>$_POST['hidden_name'],
		'itemprice'=>$_POST['hidden_price'],
		'item_quantity'=>$_POST['quantity'],
		'item_image'=>$_POST['hidden_image'] );
		
		
		$item_tot=array(
		
		'tot_item'=>$add_cart);
		
				foreach($item_tot as $get=>$getno)
				{
					$a =$getno;
					$_SESSION["shopping_cart"][$a]=$item_array;
				}
		

		
		
		


			
		header("location:cat.php");
	}
	
}




?>



<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utp-8">
		


		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="css/anu3.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		
			<link href="css/home1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Homepage</title>
		
		
		<script type="text/javascript" src="javascript/homevideo.js"></script>
		
		
		

		
	


   
		
		

	</head>
	
	
	<body>
	
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
					</div>
							
  
								<a href="notification.php" style=" width:50px; height:45px; margin-top:13px;float:right; margin-right:10px;">
								<i onclick="openNav()" style="font-size:40px; color:orange"class="material-icons">
								
								&#xe7f4;</i></a><span class="cards" style="font-size:14px;"><?php echo $get_not; ?></span>
						
						
						<?php 
				
				
				
					echo $imageshow;
				 
				?>
				<?php }?>
			
					
				
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

<div class="container" style="width:700px;">
<h3 align="center">Shopping cart</h3></br>

<div class="anurow">
<?php
$query="SELECT * FROM items WHERE category_id=8";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result))
	{
		
		?>
		 <div class="anucolumn">
		<div class="anucontent" style="width:500px; height:500px;">
		
		<form method="POST" action="cat.php?action=add&id=<?php echo $row['item_id']; ?>" >
		<?php echo "<img  style='width:200px; height:200px;' src='images/".$row['image']."'>" ?>
		<h4 class="text-info"><?php echo $row['item_name']; ?></h4>
		<h4 class="text-danger"><?php echo $row['price']; ?></h4>
		<input type="text" name="quantity" class="form-control" value="1" />
		<input type="hidden" name="hidden_name" value="<?php echo $row['item_name']; ?>"/>
		<input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>"/>
		<input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>"/>
		
		<div class="addtocart">
		<a href="cat.php?mes=<?php echo $row['item_id'];  ?>"> <input type="submit" name="add_to_cart" style="margin-top:5px;" class="add-to-cart" value="Add to cart" /></a>
		</div>
		</form>
		</div>
		</div>
	<?php	
		
	}

	
}
else
	
{
		echo $connect->error;
}
?>

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