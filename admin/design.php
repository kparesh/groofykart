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
$(document).ready(function(e) {
    $("#sub").click(function(e) {
        var name = $("#name").val();
		var qty = $("#qty").val();
		var mrp = $("#mrp").val();
		var sp = $("#sp").val();
		var data = 'name='+name+'&qty='+qty+'&mrp='+mrp+'&sp='+sp;
		
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                alert(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET", "data.php?"+data, true);
        xmlhttp.send();
    });
});;
</script>
<script>
$(document).ready(function(e) {
    $("#div-hide").click(function(e) {
        $("#item").toggle();
    });
});
</script>
</head>

<body>

<div class="container-fluid container-form">
<div class="col-xs-12">
	<div class="col-xs-12" id="div-hide">hello</div>
    <div class="row" id="item">
  <div class="col-md-6">
    <div class="input-group">
      <div class="labelp">mrp</div><input type="text" class="form-control " placeholder="NAME" id="name"  >
        <div class="labelp">mrp</div><input type="text" class="form-control " placeholder="QUANTITY" id="qty">
         <div class="labelp">mrp</div><input type="text" class="form-control" placeholder="MRP" id="mrp">
      <div class="labelp">mrp</div><input type="text" class="form-control" placeholder="Selling Price" id="sp">
      <div class="col-xs-12">
      <div  class="col-xs-6 btn btn-warning " id="close"  > close</div>
      <div  class="col-xs-6 btn btn-success " id="sub"  > submit</div>
      </div>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div>
			<!--  check box-->
    
</div>

</div>
</body>
</html>
