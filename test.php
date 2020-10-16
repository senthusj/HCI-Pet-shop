<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "pets");

  

 
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
  if(isset($_POST['upload']))
  {
$sql="SELECT * FROM profile WHERE customer_id=2";
  $result = $db->query($sql);

							if($result->num_rows > 0)
							{
								 while($row = $result->fetch_array()) 
									 {
									 echo "<div id='img_div'>";
									echo "<img src='upload/".$row['image']."' >";
										
										echo "</div>";
										
										

									 }									
									
							}	
							else
								
								{
									echo $db->error;
								}
  }
  ?>
  <form method="POST" action="test.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>