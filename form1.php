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
	




	
?>


<!DOCTYPE html>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=tel] {
    width: 100%;
    padding: 15px;
	font-size:20px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: outset;
	border-radius: 50px;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=tel]:focus {
    background-color: #ddd;
    outline: none;
}



/* Set a style for all buttons */
button {
	
    background-color: #00ff00;
    color: white;
	font-size:40px;
	font-family:Cambria;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.submitbtn
{
width:50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
   
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.datetime{
	float:right;
	font-size:20px;
	
	
}

.notes{
	width:50%;
	margin-top:-35px;
	float:right;
}

ul {
    background: #ebebe0;
    padding: 5px;
	float:right;
	

	

}

ul li {
    background: #f2f2f2;
    margin: 12px;
}

h2{
	
	font-size:40px;
	font-family:Fancy Pants NF;
	text-align:center;
	color: #1a1a1a;
    text-shadow: 3px 3px 3px orange, 0 0 25px blue, 0 0 10px #33ff33;
	}
	
	
</style>
<body>


<?php //Linking the configuration file

?>


<div id="id01" class="modal">
  
  <form class="modal-content" method="POST" action="form1.php">
    <div class="container">
      
      <h2>Please fill in this form to get an Appointment from "VETERINARY DOCTOR"</h2>
      <hr>
      
      <label for="fname"><b>Your Name *</b></label>
				<input type="text" placeholder="e.g Ravi Varma" name="fname" required>

				<label for="email"><b>Your eMail Id *</b></label>
				<input type="text" placeholder="abc@xzy.com" name="email" required>
	  
				<label for="cnumber"><b>Your Mobile Number *</b></label>
				<input type="tel" placeholder="e.g 0771234567" name="cnumber" required>
				
				<div class="datetime">
                    <label for="time"><b>Prefered date : </b></label>
						<input type="date" name="date"><br><br>
			

	  
						<div class="time">
							<label for="time"><b>Prefered time of a day : </b></label>
	 
						<select name="time">
								<option value="sel">Select : </option>
								<option value="Morning">Morning</option>
								<option value="ernoon">Afternoon</option>
								<option value="evening">Evening</option>
								<option value="night">Night</option>
						</select>
						</div>
      			</div><br>
      <br>
	  <div class="spec">
      <label for="tspe"><b>Type of Specialist</b></label>
				
				
					<select name="type">
						<option value="sel">Select : </option>
						<option value="Veterinary Cardiologist">Veterinary Cardiologist</option>
						<option value="Veterinary Internal Medicine">Veterinary Internal Medicine</option>
						<option value="Veterinary Neurologist">Veterinary Neurologist</option>
						<option value="Veterinary Oncologist">Veterinary Oncologist</option>
					</select>
                    <br><br>
                  
      </div>
	  <label for="location"><b>Located Near</b></label>
							<input type="text" placeholder="Enter your location" name="location" required><br>
				
				<div class="area"><label for="comments"><b>Reason for an appointment</b></label></div>
	  
	  
							<textarea rows="8" cols="55" name="reason">
							</textarea>
							

				<div class="notes">
				
						<ul>
							<li>Your requirement is sent to the selected relevant businesses/ service providers</li>
							<li>You choose whichever suits you best</li>
							<li>Contact Info sent to you by SMS/Email</li>
						</ul>
						
				</div>



      

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submitbtn" class="submitbtn">Conform </button>
      </div>
    </div>
  </form>
  
  <?php
  
  
  $con=new mysqli("localhost","root","","pets");
  if($con->connect_error)
  {
	die("connection Error".$con->connect_error);  
  }
if(isset($_POST["submitbtn"])){
   $fname = $_POST["fname"];
  $email = $_POST["email"]; 
  $cnumber = $_POST["cnumber"];
   $date = $_POST["date"];
   $time=$_POST["time"];
   $type=$_POST["type"];
   $location=$_POST["location"];
   $reason=$_POST["reason"];


  $sql= "INSERT INTO appointment( customer_id,name,email,contact_number,speciallist,date,time,location,reason) VALUES ('$myid','$fname','$email','$cnumber','$type','$date','$time','$location','$reason')";
 if($con->query($sql))
	 
	 {
		 
		 echo "Sucessfully inserted";
		
	 }
	 else
		 
		 {
			 echo $con->error;
		 }
	}



 mysqli_close($con);
 ?>
  
  
</div>

<script>

</script>

</body>
</html>
