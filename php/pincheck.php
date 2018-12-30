<?php

include('conn.php');


$val = $_GET['term'];

$sql = " SELECT * FROM PINCODE WHERE pincode = $val";
$result =mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
$txt=$row['pincode'];
if($row['pincode']==$val){

echo '<p style="color: #68FF0A;">Available at : <span id="txtHint">'. $txt.'</span></p>';}
else{
echo '<p style="color: #FF0A0A;">Unavailable at :<span id="txtHint">'.$val.'</span></p>';

}


#FF0A0A

?>
