<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign In & Sign Up :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<?php include_once("analyticstracking.php") ?>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span>Grocery</span> Store</a></h1>
			</div>
			
			
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li>Add</li>
			</ul>
		</div>
	</div>	
<!-- login -->
		<div class="w3_login">
			<h3>Add New Product Discount</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				   <div class="form">
					<h2>Add Products</h2>
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					<input type="text" name="brand" placeholder="Brand Name" required=" ">
					<input type="text" name="product" placeholder="Product Name" required=" ">
					
						<input name="category"><li>
							<option selected="selected">Select categary</option>
							<option value="mobile">Mobile</option>
							<option value="television">Television</option>
							<option value="camera">Camera</option>
							<option value="networking">Networking</option>
							<option value="homeappliances">Home Appliances</option>
							<option value="grocery">Grocery</option></li>
						</input><br>
					<input type="text" name="description" placeholder="Description" required=" ">
					<input type="text" name="pricebefore" placeholder="Price Before" required=" ">
					<input type="text" name="priceafter" placeholder="Price After" required=" ">
					<input type="date" name="offerexp" placeholder="offerexp" required=" ">
					<a>Select image:</a>
					<input type="file" name="fileToUpload" id="fileToUpload">
					<br>
						<select name="storelocation">
							<option selected="selected">Select Store</option>
							<option value="HEB">Heb</option>
							<option value="Bestbuy">Best Buy</option>
							<option value="Walmart">Walmart</option>
						</select>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
// connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->coupons;
if(!empty($_POST['imgurl']) && !empty($_POST['brand']) && !empty($_POST['product']) && !empty($_POST['category']) && !empty($_POST['description']) && !empty($_POST['pricebefore']) && !empty($_POST['priceafter']) && !empty($_POST['offerexp']) && !empty($_POST['storelocation']))
 { 
   $imgurl = $_POST['imgurl'];
   $brand = $_POST['brand'];
   $product = $_POST['product'];
   $category = $_POST['category'];
   $description = $_POST['description'];
   $pricebefore = $_POST['pricebefore'];
   $priceafter = $_POST['priceafter'];
   $offerexp = $_POST['offerexp'];
   $storelocation = $_POST['storelocation'];
	   
	$x=true;
	$row=$collection->find();
	foreach($row as $res)
	{
		if($res['storelocation']==$storelocation && $res['brand']==$brand && $res['product']==$product)
		$x=false;
	}
	if($x)
	{
		 $query = array("imgurl"=>"$imgurl","brand"=>"$brand","product"=>"$product","category"=>"$category","description"=>"$description","pricebefore"=>"$pricebefore","priceafter"=>"$priceafter","offerexp"=>"$offerexp","storelocation"=>"$storelocation");
		 $collection->insert($query);
		 echo'insert success';			
		 //header('Location: index.php');
		
	}
	else
	{
		echo"Adv already exist";		
	}
 }
else
{
	echo"Enter All * Parameters";
}
}
?>  
					<input type="submit" name="submit "value="Add">
					</form>
				  </div>

				 
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="footer">
		
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
