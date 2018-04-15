<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WVPZ7D9');</script>
<!-- End Google Tag Manager -->
<link rel="shortcut icon" href="images/main.ico" />
<title>Sale Hunter - Admin Portal</title>
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
<!-- Google Tag Manager (noscript) -->
<?php
session_start();
if(isset($_SESSION["name"]))
{
echo'
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVPZ7D9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
				<h1><a href="index.php"><span>Sale</span> Hunter</a></h1>
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
					<form action="adminupload.php" method="post" enctype="multipart/form-data">
						<input type="text" name="brand" placeholder="Brand Name" required=" ">
						<input type="text" name="product" placeholder="Product Name" required=" ">
						<select name="category">
							<option selected="selected">Select categary</option>
							<option value="electronics">Electronics</option>
							<option value="home">Home</option>
						</select>
						<select name="subcategory">
							<option selected="selected">Select categary</option>
							<option value="mobile">Mobile</option>
							<option value="television">Television</option>
							<option value="laptop">Laptop</option>
							<option value="furniture">Furniture</option>
							<option value="kitchen">Kitchen</option>
							<option value="homeappliance">Home Appliance</option>
							<option value="decor">Decor</option>
						</select>
						<br>
						<br>
					<input type="text" name="description" placeholder="Description" required=" ">
					<input type="text" name="pricebefore" placeholder="Price Before" required=" ">
					<input type="text" name="priceafter" placeholder="Price After" required=" ">
					<input type="date" name="offerexp" placeholder="offerexp" required=" "><br>
					
					
					<br>
						<select name="storelocation">
							<option selected="selected">Select Store</option>
							<option value="HEB">Heb</option>
							<option value="Bestbuy">Best Buy</option>
							<option value="Walmart">Walmart</option>
						</select>
						<br>
						<br>
						<font size = "2" color="grey">Select image to upload:</font>
						<br>
						<br>
						<input type="file" name="fileToUpload" id="fileToUpload">
						<br>
					<input type="submit" name="submit "value="Add">
					</form>
				  </div>

				 
				  <div class="cta"></div>
				
				
				
				</div>
			</div>';
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
	echo'	</div>
<!-- //login -->
		</div>
		<div class="clearfix">';
			<script>
			$(document).on('mouseenter', ".item_data_ellipsis", function () {
			    var $this = $(this);
			     if (this.offsetWidth < this.scrollWidth && !$this.attr('title')) {
			         $this.tooltip({
			             title: $this.text(),
			             placement: "top"
			             
			         });
			         $this.tooltip('show');
			     }
			 });
			$('.hideText').css('width',$('.hideText').parent().width());
	</script>
		<?php

// connect to mongodb
//$m = new \MongoDB\Driver\Manager();
  $m = new MongoClient();
// select a database
   $db = $m->dealhunter;
   $collection = $db->coupons;


	$row=$collection->find();
	//$date1=new MongoDate(strtotime($offerexp));
	$date=new MongoDate();
	
//echo $date;
	echo'<div align="center"></div>';
	echo '
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3> Offers</h3>
			<div class="agile_top_brands_grids">';
			foreach($row as $res)
			{
				echo'
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">';
										$id = $res["_id"];
										echo'<a href="single.php?id='.$id.'"><img title="Click to see details of '.$res["product"].'" alt=" " src="'.$res["imgurl"].'" height="220px" width="220px"/></a>	
											<p></p>	
											<div class="item_data_ellipsis hideText2">'.$res["product"].'</div>
											<div class="item_data_ellipsis hideText2"><p><i><h6>from </h6></i>'.$res["brand"].'</p></div>
											<div class="item_data_ellipsis hideText2">'.$res["description"].'</div>
											<div class="item_data_ellipsis hideText2"><p>Get in <b>'.$res["storelocation"].'</b></p></div>
											<div class="item_data_ellipsis hideText2"><p><h4 style="color:green;">$'.$res["priceafter"].'<span style="color:red;">$'.$res["pricebefore"].'</span></h4></p></div>
											<div class="snipcart-details top_brand_home_details">
										</div><form action="delete.php" method="post">
												<!--<input type="submit" name="submit" value="Save for Later" class="button" />	-->';
												$id = $res["_id"];
											echo'	<a href="deleteitem.php?id='.$id.'">Delete Item</a>
											</form>
									
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>';
				
			}echo'	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>';
?>
	echo'	</div>
	</div>
<!-- footer -->
	<div class="footer">
		<!--<div class="container">-->
			<!--
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="events.html">Events</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="products.html">Best Deals</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="short-codes.html">Short Codes</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="faqs.html">FAQ</a></li>
					<li><a href="privacy.html">privacy policy</a></li>
					<li><a href="privacy.html">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="pet.html">Pet Food</a></li>
					<li><a href="frozen.html">Frozen Snacks</a></li>
					<li><a href="kitchen.html">Kitchen</a></li>
					<li><a href="products.html">Branded Foods</a></li>
					<li><a href="household.html">Households</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>twitter posts</h3>
				<ul class="w3_footer_grid_list1">
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>-->
			<div class="wthree_footer_copy">
				<p>© 2018 Sale Hunter Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		<!--</div>-->
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->';
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
