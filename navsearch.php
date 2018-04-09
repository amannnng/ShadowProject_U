<?php
// connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->coupons;
echo '1';
$value = $_GET['value'];
echo $value;
if(!empty($_POST['subcategory']) || !empty($_POST['category']))
 { 
echo'2';
   $category = $_POST['category'];
   $subcategory = $_POST['subcategory'];
 
	  $x=true;
	$row=$collection->find();
	
echo'<div align="center">';

	
	$product = $_POST['product'];
	$row = $collection->find(array('$or' => array(array("category" =>$category),array("subcategory" =>$subcatogary))));
	//$row=$collection->find(array("brand"=>$product,"product"=>$product));
//echo $date;
		
	echo'</div>';


	echo '
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Offers Found</h3>
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
											<a href="single.html"><img title=" " alt=" " src="'.$res["imgurl"].'" height="50px" width="50px"/></a>		
											<p>'.$res["brand"].'</p><p>'.$res["product"].'</p><p>'.$res["description"].'</p><p>'.$res["storelocation"].'</p>
											<h4>$'.$res["priceafter"].'<span>$'.$res["pricebefore"].'</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="checkout.html" method="post">
												<input type="submit" name="submit" value="Save for Later" class="button" />													
											</form>
									
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>';
					
			}echo'	
				<div class="clearfix"></div>
			</div>
		</div>
	</div>';
	
	
 }	

 
 ?>