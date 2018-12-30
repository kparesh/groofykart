<?php
include('../php/conn.php');
$id = $_GET['id'];
$name = $_GET['name'];
$qty = $_GET['qty'];
$mrp = $_GET['mrp'];
$sp = $_GET['sp'];
//echo $id.$name.$qty.$mrp.$sp;
$sql = "UPDATE `table 3` SET `ITEM`='".$name."',`QTY`='".$qty."',`MRP`='".$mrp."',`SP`='".$sp."' WHERE `product_id`='".$id."'";
$result= mysqli_query($conn,$sql);
echo "done";


?>	