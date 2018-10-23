<?php			

				// configurable_price_product :: start
				// configurable_price_product :: start
				// configurable_price_product :: start



							

							
							
							
							
							


							$showproduct = array();
							$showproduct['title'] = the_sub_field( 'title' );
							$showproduct['button_text'] = the_sub_field( 'add_to_cart_button_text' );
							$showproduct['image'] = get_sub_field( 'shopping_cart_thumbnail' );
							$showproduct['enable_note'] = get_sub_field( 'enable_customer_note' );
							$showproduct['note_instructions'] = the_sub_field( 'customer_note_instructions' );

							//for debug
							//var_dump($showproduct);

							// verify all required values are present

								$showproduct['title'] = trim($showproduct['title']);
								$showproduct['button_text'] = trim($showproduct['button_text']);
								$showproduct['note_instructions'] = trim($showproduct['note_instructions']);

								$error_array = array();


								if ($showproduct['title'] == "") array_push($error_array,"No title");
								if ($showproduct['button_text'] == "") $showproduct['button_text'] = "Add To Cart";
								if (($showproduct['enable_note']) && ($showproduct['note_instructions'] == "")) {
									$showproduct['note_instructions'] = $product_vars['default_note_instructions']; } // default note instructions
								
									//echo $product_vars['configurable_price_product_counter']." ".$showproduct['title'];

								$showproduct['data_id'] = toAscii($product_vars['configurable_price_product_counter']." ".$showproduct['title']);

								$showproduct['data_url'] = $product_vars['current_page_url']."?pb-cpp=".$showproduct['data_id'];

								// set image to default, or get image thumbnail if uploaded
								if (!$showproduct['image']) {
									$showproduct['image'] = $product_vars['default_product_image_url'];
									} else {
									$showproduct['image'] = $showproduct['image']['sizes']['cart-thumb'];
									}



					if ((count($error_array)) == 0) { // if there are no errors

							$showproduct['price'] = "000";

							if ($_GET['pb-cpp'] == $showproduct['data_id']) {							
										if ($_GET['pb-cpp-price'] != "") {
											if (is_numeric($_GET['pb-cpp-price'])) $showproduct['price'] = $_GET['pb-cpp-price'];
											}								
										}


							$showproduct['price_dollars'] = substr($showproduct['price'],0,-2);
							$showproduct['price_decimal'] = substr($showproduct['price'],-2);
							$showproduct['price'] = $showproduct['price_dollars'].".".$showproduct['price_decimal'];
							$showproduct['price_formatted'] = number_format($showproduct['price'],"2");
							?>
							
							
							<?php ################# products container : start ################# ?>
							<?php ################# products container : start ################# ?>
							<?php ################# products container : start ################# ?>
							<div class="colorWrapper">
							<div class="container hpadded center">
							<div class='isf-content'>
							


							
							<script type="text/javascript">
							
							jQuery(document).ready(function(){

							jQuery('#cpp-<?php echo $product_vars['configurable_price_product_counter']; ?>').keyup(function() {

								var inputID = "cpp-<?php echo $product_vars['configurable_price_product_counter']; ?>";


								// validate price

								var newPrice = Number(jQuery(this).val()).toFixed(2);	
												
								//alert(newPrice);

								var buttonID = inputID+"-button";
								var newURL = jQuery("#"+buttonID).data('initial-url')+(newPrice.split('.').join(''));
								var newDesc = newPrice + " USD";

								

								jQuery("#"+buttonID).data('item-price',newPrice);		 
								jQuery("#"+buttonID).data('item-url',newURL);
								jQuery("#"+buttonID).data('item-description',newDesc);
								});

							});

							</script>
							<span class="donationBox2">
							<input type="number" 
								id="cpp-<?php echo $product_vars['configurable_price_product_counter']; ?>"
								class="configurable-price-product-number"
								value="<?php echo $showproduct['price']; ?>"
								step="0.01"
								min="0"
								>
							
							BLAH BLAH

							<button 
								class="snipcart-add-item"
								id="cpp-<?php echo $product_vars['configurable_price_product_counter']; ?>-button"
								data-item-id="<?php echo $showproduct['data_id']; ?>"
								data-item-name="<?php echo $showproduct['title']; ?>"
								data-item-price="<?php echo $showproduct['price']; ?>"
								data-item-weight="20"
								data-initial-url="<?php echo $showproduct['data_url']; ?>&pb-cpp-price="
								data-item-url="<?php echo $showproduct['data_url']; ?>&pb-cpp-price=<?php echo $showproduct['price']; ?>"
								data-item-image="<?php echo $showproduct['image']; ?>"
								data-item-description="<?php echo $showproduct['price_formatted']; ?> USD"
								data-item-stackable="false"	
								data-item-shippable="false"	
								<?php if ($showproduct['enable_note']) { // if note enabled ?>
									data-item-custom1-name="<?php echo $showproduct['note_instructions']; ?>"
									data-item-custom1-type="textarea"
									data-item-custom1-required="false"
								<?php } ?>						
								>								
								<?php echo strtoupper($showproduct['button_text']); ?>
							</button>
							</span>




							
							</div>
							</div>
							</div>
							<?php ################# products container : end ################# ?>
							<?php ################# products container : end ################# ?>
							<?php ################# products container : end ################# ?>


							<?php
							} // end if there are no errors



				// configurable_price_product :: end
				// configurable_price_product :: end
				// configurable_price_product :: end

$product_vars['configurable_price_product_counter']++;
?>