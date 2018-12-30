<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
<!-- Custom Theme files -->
<link href="css/search.css" rel="stylesheet" type="text/css" media="all"/>
<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>-->
<!-- Custom Theme files -->
<!--Google Fonts-->
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>-->
<!--Google Fonts-->
<script type="text/javascript">
/*$(function(){
    $("#subpin").submit(function(){
        alert($("#pinval").val());
    });
});*/
/*$(function(){
	
	$("#subpin").submit(function(){
	
 $.ajax({
        type: "POST",
        url: 'pincheck.php',
        data: $("form").serialize(),
        //dataType: "html",
        success: function(data) {
            alert(data);
        },
        error: function() {
            alert('Error occured');
        }
    });
	});
});
*/
 function Redirect() {
	 var formval= $("#pinval").val();
	 
	 if (formval.length == 0) { 
        alert(formval);
        
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if(xmlhttp.responseText == "available")
				window.location="home.php";
				
            }
        };
        xmlhttp.open("GET", "php/redirect.php?term=" + formval, true);
        xmlhttp.send();
    }
               //window.location="www.google.com";
			   //alert();
            };
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "php/pincheck.php?term=" + str, true);
        xmlhttp.send();
    }
};
function checkstr(str) {
	if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                /*document.getElementById("chkshow").innerHTML = xmlhttp.responseText;*/
				document.getElementById("chkshow").innerHTML= xmlhttp.responseText;
				
            }
        };
        xmlhttp.open("GET", "php/checkimg.php?term=" + str, true);
        xmlhttp.send();
    }
	};

</script>
<body>

<div class="colorback">
<div class="name"> <p class="nameattr"> GroofyKart </p></div>

<!--search start here-->
<div class="search">
	<div id="chkshow"><i > </i></div>
	<div class="s-bar">
	   <!--<form id="subpin"  >-->
		<input  type="text" id="pinval" name="term" placeholder="Search Your Pincode"  onChange="showHint(this.value) & checkstr(this.value)" onMouseOver="showHint(this.value) & checkstr(this.value) " onkeyup="showHint(this.value) & checkstr(this.value)"
 class="auto">
		<input type="submit" id="formbtn" value="Search"  class="" onClick="Redirect()"/>
	  <!--</form>-->
	</div>
    <div id="txtHint"></div>
	<p>Popular searches: <a href="#">Modern PSD template,</a> <a href="#"> Portfolio design </a></p>
</div>
<!--search end here-->	
<div class="copyright">
	 <p>2015 &copy Groofykart All rights reserved | Template by  <a href="http://creativesol.co.in/" target="_blank">  CreativeSol </a></p>
</div>	
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		source: "php/test.php",
		minLength: 1,
		autoFocus: true
	});				

});
</script>
</body>
</html>