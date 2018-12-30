<?php

include('conn.php');



if (isset($_GET['term'])){
$val=$_GET['term'];
$return_arr = array();

	try{
		$sql ="SELECT * FROM pincode WHERE pincode like '%$val%'";
$result =mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
	 $return_arr[] =  $row['pincode'];
	
	
}
		
	}catch(Exception $e){
	    echo 'ERROR: ' . $e->getMessage();
	}
	


echo json_encode($return_arr);

}

?>
