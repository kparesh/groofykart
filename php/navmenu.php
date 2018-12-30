<?php
function navmenu(){

include('conn.php');
$var ='';
$catsql="SELECT * FROM `table 5`";
	$result= mysqli_query($conn,$catsql);
	$var.='<ul class="left-nav" >';
	while($row= mysqli_fetch_array($result)){
		$var.='
<li id="left-nav-super" class="click" >'.$row['cat_name'].
'<ul class="sub-nav" id="sub-hov" >';
		
		$varid = $row['cat_id'];
		$subcatsql = "SELECT subcat_name FROM `table 4` where cat_id='$varid'";
		$subresult = mysqli_query($conn,$subcatsql);
		
		while($subrow= mysqli_fetch_array($subresult)){
				$val=$subrow['subcat_name'];
				$sla = "'$val'";
				$var.='
        				<li onClick="pp('.$sla.')" >'.$subrow['subcat_name'].'</li>        
       					';
			
		}
		$var.=' </ul></li>';
		
	}
	$var.='</ul>';
	$conn->close();	
				
return $var;
}


?>