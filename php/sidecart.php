<?php
/*$var = json_encode($_COOKIE['cookiename']);
$var = str_replace('[',"",str_replace(']',"",json_encode($_COOKIE['cookiename'])));
$var = str_replace(']',"",$var);*/
/*$pp = stripslashes(str_replace('"',"",str_replace('[',"",str_replace(']',"",json_encode($_COOKIE['cookiename'])))));*/
$cname= array();
$iname= array();
$cname = explode(',' , stripslashes(str_replace('"',"",str_replace('[',"",str_replace(']',"",json_encode($_COOKIE['cookiename']))))));
$iname =  explode(',' , stripslashes(str_replace('"',"",str_replace('[',"",str_replace(']',"",json_encode($_COOKIE['item1']))))));

/*print_r($iname);
echo $iname[0];*/



$var ='';
reset($cname);
while (list($key, $val) = each($cname)){
  $iname =  explode(',' , stripslashes(str_replace('"',"",str_replace('[',"",str_replace(']',"",json_encode($_COOKIE[$val]))))));
 $var.='<div class="col-md-12 single-item" >
                          	<div class="col-md-2 col-sm-2 text-center position-relative" > 
                            	<img src="images/p1.jpg" style="left:-10px">
                            
                            </div>
                            <div class="col-md-4 col-sm-4 position-relative "> 
                            <p class="position-absolute" style="top:20px"> '.$iname[1].'</p><br>	
                            <p class="position-absolute" style="top:60px"> '.$iname[2].' </p>
                             </div>
                            <div class="col-md-2 col-sm-2" style="padding-top:20px"> 
                            <form id="myform" method="POST" action="#">
                                <input type="button" value="-" class="qtyminus" field="quantity" />
                                <input type="text" name="quantity" value="0" class="qty" readonly/>
                                <input type="button" value="+" class="qtyplus" field="quantity" />
                            </form>
                            </div>
                            <div class="col-md-2 col-sm-2 text-center position-relative">
                            <p class="pos-middle">'.$iname[3].'</p> </div>
                            <div class="col-md-2 col-sm-2 text-center position-relative">
                            <p class="pos-middle"> Total</p>
                            <img src="images/close.png" class="close-item" onClick="closeitem()"></div>                         	 </div>';
  }
  
  echo $var;
?>