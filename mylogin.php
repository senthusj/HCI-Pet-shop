<?php

$errorlogin="";



		
		
		if(isset($_POST['mybtnlogin']))
		{
			if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					$signoutchecks=true;
					//Linking the configuration file
					require 'require.php';

					$loginmail=$_POST['logemail'];
					$loginpassword=$_POST['logpassword'];
					
					if($loginmail!="" && $loginpassword!="")
					{
						$sqls = "SELECT * FROM customer
						WHERE email_id='$loginmail' AND password='$loginpassword'";
						$result = $con->query($sqls);

							if($result->num_rows > 0)
							{
								while($row = $result->fetch_array())
								{
								$_SESSION['myid']=$row['customer_id'];
								$_SESSION['mymail']=$row['mail_id'];
								}
								
								
									header("location:p3.php");
							}
							
							else
							{
								$errorlogin="*invalid login*";
								header("location:p3.php");
							}
								
								
					}
					else
					{
						header("location:p3.php");
						$errorlogin="*Please login*";
					}

					$con->close();
				}	
		}

?>