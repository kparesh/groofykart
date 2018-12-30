<?php

include('conn.php');


$val = $_GET['term'];

$sql = " SELECT * FROM PINCODE WHERE pincode = $val";
$result =mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
$txt=$row['pincode'];
if($row['pincode']==$val){

echo "available";}
else{
echo "unavailable";

}
?>
