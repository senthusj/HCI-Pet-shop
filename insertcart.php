


<?php




if(isset($_SESSION['myid']))
{
	$myid=$_SESSION['myid'];
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
?>



<?php




?>