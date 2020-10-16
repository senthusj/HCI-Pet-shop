<?php
    $key=$_GET['key'];
    $array = array();
    
	$con = new mysqli("localhost","root","","pets");

if($con->connect_error)
{
	die("connection falied".$con-> connect_error);
}
	
		$search_res="SELECT * FROM items WHERE item_name 
		LIKE '{$key}%'";
		$result_get=$con->query($search_res);
		
		
		if($result_get->num_rows>0)
		{
			
			
			
		
				while($row=$result_get->fetch_array())
				{
					$array[] = $row['item_name'];
				}
				echo json_encode($array);
		}
		
			  
			
			
			
		
			mysqli_close($con);
?>
