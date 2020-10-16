		
		
		
		
		<?php  	
			if(isset($_SESSION['myid']))
			{
						$sqls = "SELECT * FROM customer
						WHERE customer_id='$myid'";
						$result = $con->query($sqls);

							if($result->num_rows > 0)
							{
								 while($row = $result->fetch_array()) 
									 {
									$fn= $row['first_name'];
									$ln=$row['last_name'];
									$dat=$row['date'];
									$gen=$row['gender'];
									$em=$row['email_id'];
									$viewname= "<h3 style='margin-top:60px;'>HI $ln</h3>";
									
									 }									
									
								
							}
							
							else
							{
								$errorlogin="*invalid login*";
							}
							?>
							<?php
							
						
						

								$sql="SELECT * FROM profile WHERE customer_id='$myid'";
									$result = $con->query($sql);

								if($result->num_rows > 0)
								{
									 while($row = $result->fetch_array()) 
										 {
										 
										$imageupload="<img  id='profileimg1' src='upload/".$row['image']."' >";
										$imageedit="<img  id='previewimg' src='upload/".$row['image']."' >";
											$imageshow="<img id='imageshow'  src='upload/".$row['image']."' >";
											echo "</div>";
											
											

										 }									
										
								}	
								else
									
									{
										echo $con->error;
									}
									
							}
									
								?>
								
								
			<!DOCTYPE html>
			<head>
			<link href="css/home1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
			</head>

</html>			