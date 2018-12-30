<?php
include('conn.php');
$val = $_GET['term'];
$var ='';



$sql= "SELECT * FROM `table 3` where SUB_CATEGORIES like '%$val%'";
$result= mysqli_query($conn,$sql);
while($row= mysqli_fetch_array($result)){
	//data = pro_id, item, weight[QTY], MRP
$proid = "'".$row['product_id']."','".$row['ITEM']."','".$row['QTY']."','".$row['MRP']."'";
           $var.='<div class="col-sm-4 col-xs-6 col-lg-4 col-md-4">
                 
                        <div class="thumbnail">
                        <div class="upper">
                            <img src="images/320x150.png" alt="">
                            <div class="caption">
                                <h4 class="pull-right">  <!--TEXT --> </h4>
                               <div class="proname">'.$row['ITEM'].'</div>
                                <div class="proweight"> '.$row['QTY'].' </div>
                                
                            </div>
                            <div class="price">
                              $'.$row['MRP'].' <div class="vertical-line"></div> <del> $40 </del>MRP
                            </div>
                           </div>
                            <div class="lower">
                            <div class="col-md-12 nopadd">
                           <div class=" addcart" onClick="addtocart('.$proid.')"><p > Add to Cart</p> </div>
                           <div class=" moreitem"><p>more..</p></div>
                           </div>
                           
                           </div>
                        </div>
                       
                       
                    </div>';
					
}
echo $var;
?>