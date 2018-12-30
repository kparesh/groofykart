<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
--><link href="mycss.css" rel="stylesheet" type="text/css">
<script>
$(function(){
	$("#item").css("display","none");
		});
function pp(id,name,qty,mrp,sp){
	$("#item").css("display","block");
	
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "table-disp-back.php?id="+id, true);
        xmlhttp.send();
		
};
function close1(){
	$("#item").css("display","none");
};
function savedata(id){
	
	var name=$("#name").val();
	var qty=$("#qty").val();
	var mrp=$("#mrp").val();
	var sp=$("#sp").val();
	
	var data = 'id='+id+'&name='+name+'&qty='+qty+'&mrp='+mrp+'&sp='+sp;
	
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				
                document.getElementById("item").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "data.php?"+data, true);
        xmlhttp.send();
}
</script>
</head>

<body>
<div class="container-fluid">

<nav class="navbar navbar-default navbar-fixed-top" id="item">
  
   <!--<div class="col-xs-12 ">
<div class="row" >
  <div class="col-md-6">
    <div class="input-group">
      <td> <input type="text" class="form-control" placeholder="NAME" id="name"   ></td>
        <td><input type="text" class="form-control" placeholder="QUANTITY" id="qty"></td>
         <td><input type="text" class="form-control" placeholder="MRP" id="mrp"></td>
    <td>  <input type="text" class="form-control" placeholder="Selling Price" id="sp"></td>
      <div  class=" btn btn-success form-control" id="sub" onClick="pp()" > submit</div>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div>
  </div>
  
</nav>




<div class="container-form col-xs-12">

<table class="table table-striped">
    <thead>
      <tr >
        <th>Name</th>
        <th>Qty</th>
        <th>MRP</th>
        <th>SP</th>
      </tr>
    </thead>
    <tbody>
    
    	
      <?php include('table-back.php'); ?>
     
      </tbody>
      </table>
</div>
</div>


</body>
</html>
