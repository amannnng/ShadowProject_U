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