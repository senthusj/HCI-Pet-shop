

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
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="css/feedback.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>


<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$a=$_POST['level'];
	$b=$_POST['feedlog'];
	$c=$_POST['detail'];
	$d=$_POST['femail'];
	$f=$_POST['subject'];
	if(isset($_POST['feedsubmit']))
	{
		$sqlfeed="INSERT INTO feedback(message,email_id,customer_id,user_interface,pet_details,auto_log) values('$f','$d','$myid','$a','$c','$b')";
		$result=$con->query($sqlfeed);
		header("location:p3.php");
	}
	
}
?>




<h2 style="text-align:center;">FEED BACK</h2>
<h3 id="changea" style="color:blue; text-align:center;"> </h3>

<div class="container" onMouseOver="typeWriter()">
  <form method="POST" action="feedback.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Web User Interface</label>
      </div>
      <div class="col-75">
		<select id="country" name="level">
          <option value="lowlevel">Low level</option>
          <option value="Medium level">Medium level</option>
          <option value="High level">High Level</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"> Auto logoff</label>
      </div>
      <div class="col-75">
        <select id="country" name="feedlog">
          <option value="priority members">priority members</option>
          <option value="members">members</option>
          <option value="Users">Users</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Pets Details</label>
      </div>
      <div class="col-75">
        <select id="country" name="detail">
          <option value="Not enough">Not enough</option>
          <option value="Enough">Enough</option>
          <option value="Great">Great</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">E-mail id</label>
      </div>
      <div class="col-75">
        <input type="email" name="femail" placeholder="eg:-1234@gmail.com...."required>
      </div>
    </div>
	    <div class="row">
      <div class="col-25">
        <label for="subject">Your Comment</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject"  placeholder="Write something.." style="height:200px"required></textarea>
      </div>
    </div>
    <div class="row">
	
		<div class="col-25">
			<a href="p3.php"><input type="button" value="Cancel"></a>
		</div>
		<div class="col-75">
			<input type="submit" name="feedsubmit"  onclick="funa()">
		</div>
    </div>
  </form>

      <div class="row">
  <div id="overlay">
<span id="closebtn" onclick="off()" style="font-size:40px; color:white;">&times;</span> 
  <div id="text"><h3 style="color:white; text-align:center;">Rate us</h3>
<span class="fa fa-star checked" onclick="starvisible()"></span>
<span class="fa fa-star checked" onclick="starvisible1()"></span>
<span class="fa fa-star checked" onclick="starvisible2()"></span>
<span class="fa fa-star checked" onclick="starvisible3()"></span>
<span class="fa fa-star checked" onclick="starvisible4()"></span>
</div>
</div>

<div style="padding:20px">

  <button onclick="on()" class="ratebtn">Rate Us</button>
</div>

<script>
var lo = 0;
var txt = 'Dear customer please give us a feedback to improve our website';
var speed = 160;

function typeWriter() 
{

  if (lo < txt.length) {
    document.getElementById("changea").innerHTML += txt.charAt(lo);
    lo++;
    setTimeout(typeWriter, speed);
  }
}





var j = 0;
var j1 = 0;
var j2 = 0;
var j3 = 0;
var j4 = 0;
var star=document.getElementsByClassName('checked');
function starvisible()
{
	 j ++;
     if( j % 2 == 1 )
     {
      var i;

      for(i = 0; i < star.length - 4; i ++)
      {
      star[i].style.color="orange";
      }
     }
     
     else
     {
     	
     var i;

      for(i = 0; i < star.length - 4; i ++)
      {
      star[i].style.color="black";
      }
     
     }

}
function starvisible1()
{
var i;
	j1 ++;
    if(j1 % 2 == 1)
    {

      for(i = 0; i <star.length - 3; i ++)
      {
      star[i].style.color="orange";
      }
     }
     else
     {
     
     var i;

      for(i = 0; i < star.length - 3; i ++)
      {
      star[i].style.color="black";
      }
     
     }

}
function starvisible2()
{

var i;
	j2 ++;
    if(j2 % 2 == 1)
    {

      for(i = 0; i <star.length - 2; i ++)
      {
      star[i].style.color="orange";
      }
     }
     else
     {
     
     var i;

      for(i = 0; i < star.length - 2; i ++)
      {
      star[i].style.color="black";
      }
     
     }
}
function starvisible3()
{

var i;
	j3 ++;
    if(j3 % 2 == 1 )
    { 

      for(i = 0; i <star.length - 1; i ++)
      {
      star[i].style.color="orange";
      }
     }
     else
     {
     
     var i;

      for(i = 0; i < star.length - 1; i ++)
      {
      star[i].style.color="black";
      }
     
     }
}
function starvisible4()
{

var i;
	j4 ++;
    if(j4 % 2 == 1)
    {

      for(i = 0; i <star.length; i ++)
      {
      star[i].style.color="orange";
      }
     }
     else
     {
     
     var i;

      for(i = 0; i < star.length; i ++)
      {
      star[i].style.color="black";
      }
     
     }
}





function on() 
{
	
    document.getElementById("overlay").style.display = "block";
    
}

function off() 
{
	
    document.getElementById("overlay").style.display = "none";
    
}




</script>
  
  
  
  
  </div>
</div>

</body>
</html>
