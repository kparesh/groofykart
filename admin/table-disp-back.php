<?php
include('../php/conn.php');
$id =$_GET['id'];
$var='';
$sql="SELECT * FROM `table 3` WHERE `product_id`= '$id'";
$result= mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
$id=$row['product_id'];
	
	$val= "'$id'";
$var.='<div class="col-xs-12 ">
<div class="row" >
  <div class="col-md-6">
    <div class="input-group">
      <td> <input type="text" class="form-control" placeholder="NAME is Null" id="name" value="'.$row['ITEM'].'"></td>
        <td><input type="text" class="form-control" placeholder="QUANTITY is Null" id="qty" value="'.$row['QTY'].'"></td>
         <td><input type="text" class="form-control" placeholder="MRP is Null" id="mrp" value="'.$row['MRP'].'"></td>
    <td>  <input type="text" class="form-control" placeholder="Selling Price is Null" id="sp" value="'.$row['SP'].'"></td>
      <div class="col-xs-12">
      <div  class="col-xs-6 btn btn-warning " id="close1"  onClick="close1()" > close</div>
      <div  class="col-xs-6 btn btn-success " id="sub" onClick="savedata('.$val.')" > submit</div>
      </div>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div>
  </div>';
  
  echo $var;
?>