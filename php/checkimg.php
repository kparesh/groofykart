<?php
include('conn.php');


$val = $_GET['term'];

$sql = " SELECT * FROM PINCODE WHERE pincode = $val";
$result =mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
$txt=$row['pincode'];
if($row['pincode']==$val){

echo '<i style="background: url(images/check.png)no-repeat;" class="chkimgpos"> </i>';
}
else{
echo '<i style="background: url(images/wrong.png)no-repeat;" class="chkimgpos"> </i>';

}

?>