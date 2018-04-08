<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
	<?php
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->coupons;

echo'<div align="center">
<table border="1" id="table" align="center">
<tr>
<td><h2>Brand</h2></td><td><h2>product</h2></td><td><h2>description</h2></td><td><h2>category</h2></td><td><h2>price before</h2></td><td><h2>price after</h2></td><td><h2>exp</h2></td><td><h2>store</h2></td><td><h2>img</h2></td>
</tr>';
	
	$product = $_POST['product'];
	$row = $collection->find(array('$or' => array(array("brand" =>$product),array("product" =>$product))));
	//$row=$collection->find(array("brand"=>$product,"product"=>$product));
//echo $date;
	foreach($row as $res)
	{

		//if($res['offerexp']>$date)

		echo'<tr>
			<td>'.$res["brand"].'</td><td>'.$res["product"].'</td><td>'.$res["description"].'</td><td>'.$res["category"].'</td><td>'.$res["pricebefore"].'</td><td>'.$res["priceafter"].'</td><td>'.$res["offerexp"].'</td><td>'.$res["storelocation"].'</td>

			</tr>';
		
	}
	
	
	echo'</table></div>';


	echo '
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Hot Offers</h3>
			<div class="agile_top_brands_grids">';
			foreach($row as $res)
			{
				echo'
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href="single.html"><img title=" " alt=" " src="'.$res["imgurl"].'" height="40px" width="40px" /></a>		
											<p>'.$res["brand"].'</p>
											<h4>'.$res["priceafter"].'<span>'.$res["pricebefore"].'</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="checkout.html" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
													<input type="hidden" name="amount" value="7.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
													
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