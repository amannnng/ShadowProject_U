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
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->coupons;

if(!empty($_GET['value']))
 { 
   $value = $_GET['value'];
	$row=$collection->find();
	
echo'<div align="center">';

	$row = $collection->find(array('$or' => array(array("category" =>$value),array("subcategory" =>$value))));
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