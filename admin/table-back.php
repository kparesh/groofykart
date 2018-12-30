<?php
include('../php/conn.php');
$var ='';
$sql="SELECT `product_id`, `ITEM`, `QTY`, `MRP`, `SP` FROM `table 3` limit 0,100";
$result= mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
	$id=$row['product_id'];
	$name=$row['ITEM'];
	$qty=$row['QTY'];
	$mrp=$row['MRP'];
	$sp=$row['SP'];
	$val= "'$id','$name','$qty','$mrp','$sp'";
	$var.='<tr id="div-hide"  onClick="pp('.$val.')">
        <td>'.$row['ITEM'].'</td>
        <td>'.$row['QTY'].'</td>
        <td>'.$row['MRP'].'</td>
        <td>'.$row['SP'].'</td>
	
		</tr>
		';
}

echo $var;
?>