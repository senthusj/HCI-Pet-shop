<?php

$con = new mysqli("localhost","root","","pets");

if($con->connect_error)
{
	die("connection falied".$con-> connect_error);
}

?>