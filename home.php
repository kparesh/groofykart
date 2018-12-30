<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Groofykart</title>
	 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	 <link rel="stylesheet" href="css/home-styles.css">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
       <!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->
       
		<script src="js/script.js"></script>
        
        <script src="js/js.cookie.js"></script>
       
       <script>
	   jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});
   
	   </script>
       <script>
	   
	   function closeitem(){
		 alert('hello1');
		 $(this).parents('.single-item').fadeOut('slow');
		 $(this).parents('.single-item').remove();
		 
	   };
	   
	   $(document).ready(function(c) {
	$('.close-item').on('click', function(c){
		/*$('.single-item').fadeOut('slow', function(c){
	  		$('.single-item').remove();
		});*/
		alert('hello');
	});	  
});
</script>
  <script>
 function pp(val1){
    if (val1.length == 0) { 
        document.getElementById("rowitem").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rowitem").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "php/item.php?term=" + val1, true);
        xmlhttp.send();
    }
  };
   
   
$(function(){
  $(".click").click(function(){
     //alert();
     $(this).children().toggle(1000);
  });
});
</script>
<script>
function sideopen(){
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("cart-item").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "php/sidecart.php", true);
        xmlhttp.send();
};

$(function(){
$(".clicktoggle").click(function(){
	$(".sidenav").toggle();
	});
	
	
});	
</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <!-- Navigation -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
    	
        <div class="container nav-box">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-sm-6">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GroofyKart</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#"> Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
       
        </div>
   
        
        
     
        	<div class="col-sm-6 clearfix " style="padding-right:0px">
        		
               <div class="col-sm-4 proimg">
                  
                   <p class="usr-acc"> Account</p>
                    <img src="images/usr-acc.png" style="float:right; margin-top: 15px; height: 24px;"> 
               </div>
               <div class="col-sm-6 proimg">
               <div class="serch1">
							<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="">
						</div>
                        
                  
               </div>
               <div class=" col-sm-2 proimg clicktoggle "  onClick="sideopen()">
               <div class="full-div-cart">
               <p class="cart-box-totalitem">6</p>
               <p class="cart-box-total-amount">
               <img src="images/rupee.png">400
               </p>
               
               </div>
                <!--<img class="fevicon_img" src="images/shopping-cart.png">-->
               </div>
			</div>
         </div>
        
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
	    
        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                
                
                <div id='cssmenu'>

<?php include('php/navmenu.php'); echo navmenu();?>
</div>
                
                
            </div>

            <div class="col-md-9">
				<!-- CART NAVIGATION-->
                <div id="mySidenav" class="sidenav" >
                <div class="col-md-12 col-sm-12 cartarea">
               		<!--<div class="col-md-8 cartleft"  onClick="closeNav()"> left</div>-->
                      <div class="col-md-12 col-sm-12 cartnav" > 
                          <div class="col-md-12 glyphicon glyphicon-remove" onClick="closeNav()"></div>
                          <div class="col-md-12 col-sm-12  single-item-heading" >
                          	<div class="col-md-2 col-sm-2 text-center "> Image </div>
                            <div class="col-md-4 col-sm-4  "> Product Description </div>
                            <div class="col-md-2 col-sm-2 text-center"> Quantity</div>
                            <div class="col-md-2 col-sm-2 text-center"> Price </div>
                            <div class="col-md-2 col-sm-2 text-center"> Total</div>                         	
                          </div>
                        	 <!-- cart display area-->
                          <div id="cart-item">
                          <div class="col-md-12 single-item" >
                          	<div class="col-md-2 col-sm-2 text-center position-relative" > 
                            	<img src="images/p1.jpg" style="left:-10px">
                            
                            </div>
                            <div class="col-md-4 col-sm-4 position-relative "> 
                            <p class="position-absolute" style="top:20px"> Product Description</p><br>	
                            <p class="position-absolute" style="top:60px"> Brand </p>
                             </div>
                            <div class="col-md-2 col-sm-2" style="padding-top:20px"> 
                            <form id="myform" method="POST" action="#">
                                <input type="button" value="-" class="qtyminus" field="quantity" />
                                <input type="text" name="quantity" value="0" class="qty" readonly/>
                                <input type="button" value="+" class="qtyplus" field="quantity" />
                            </form>
                            </div>
                            <div class="col-md-2 col-sm-2 text-center position-relative">
                            <p class="pos-middle">Price</p> </div>
                            <div class="col-md-2 col-sm-2 text-center position-relative">
                            <p class="pos-middle"> Total</p>
                            <img src="images/close.png" class="close-item"></div>                         	 </div>
                            
                            
                            
                            
                            
                            </div>
                    			   <!--left area-->
                       </div>	
                      </div>	
             	</div>
            
            		 <!-- CART NAVIGATION-->
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/800x300.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/800x300.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/800x300.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <!--item area-->
                
                <div class="row" id="rowitem">
                
               <?php /*?> <?php  include('php/item.php'); ?><?php */?>
                </div>
                
                
                <!--item area-->

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

   <script>
   
   function clearall(){
   Cookies.remove('cookiename');
   Cookies.remove('counter');
   }
   
     if (Cookies.get('counter') == null){
			   Cookies.set('counter' , 0,{ expires: 7});
			  Cookies.set('cookiename' ,[],{ expires: 7});
			}
   		//data = pro_id, item, weight[QTY], MRP
      function addtocart(proid,proname,proweight,promrp){
			 if (Cookies.get('counter') != null){
			 var val =Number(Cookies.get('counter'));
			 var add = val + 1;
			 Cookies.set('counter' , add,{ expires: 7});
			 var name = 'item' + add;
			 var ele= Cookies.getJSON('cookiename');
			 ele.push(name);
			 var pp= Cookies.getJSON('cookiename');
			Cookies.set('cookiename' ,ele,{ expires: 7});
			 Cookies.set(name ,[proid,proname,proweight,promrp],{ expires: 7});
			 alert(Cookies.getJSON(name));
			 
		 }
		  
		  /*if(Cookies.get('counter') !=null ){
			Cookies.set('cookieid' , '',{ expires: 7});  
		  }
		  
		  
		 Cookies.set('counter' , 0,{ expires: 7}); 
		  Cookies.set('cookieid' , '',{ expires: 7});
		  if(Cookies.get('counter') != null){
			  var cookiename = 'item' + Cookies.get('counter');
			  Cookies.set('counter' , 0,{ expires: 7});
		  }
Cookies.set('name', ["item1","item2","it3m3"]);
var ele= Cookies.getJSON('name');
alert(proid);*/
 };

   </script>

</body>

</html>
