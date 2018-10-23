<?php			
// product_select_box :: start
// product_select_box :: start
// product_select_box :: start

					//$product_group_label = get_sub_field( 'layout_label' );
					$products = array();
					$button_default_data_id = null;

				
					if ( have_rows( 'product_select_box_products' ) ) {
					// if rows are present

						while ( have_rows( 'product_select_box_products' ) ) : the_row();
						// iterate through all rows

							$singleProduct = get_sub_field('single_product');

							$product_entry = array();
							$product_entry['title'] = $singleProduct['title'];
							$product_entry['price'] = $singleProduct['product_options_group']['price'];
							$product_entry['button_text'] = $singleProduct['product_options_group']['add_to_cart_button_text'];
							$product_entry['image'] = $singleProduct['shopping_cart_options']['shopping_cart_thumbnail'];
							$product_entry['enable_note'] = $singleProduct['shopping_cart_options']['enable_customer_note'];
							$product_entry['note_instructions'] = $singleProduct['shopping_cart_options']['customer_note_instructions'];

							// verify all required values are present

								$product_entry['title'] = trim($product_entry['title']);
								$product_entry['price'] = trim($product_entry['price']);
								$product_entry['button_text'] = trim($product_entry['button_text']);
								$product_entry['note_instructions'] = trim($product_entry['note_instructions']);

								$error_array = array();

								if ($product_entry['title'] == "") array_push($error_array,"No title");
								if ($product_entry['price'] == "") { array_push($error_array,"No Price"); } else { // format price
									$product_entry['price'] = round($product_entry['price'], 2);
									$product_entry['price'] = number_format($product_entry['price'],"2"); }
								if ($product_entry['button_text'] == "") $product_entry['button_text'] = "Add To Cart";
								if (($product_entry['enable_note']) && ($product_entry['note_instructions'] == "")) {
									$product_entry['note_instructions'] = $product_vars['default_note_instructions']; } // default note instructions									
								
								// create data_id also use for select box option value && url query to preset select box value

								$product_entry['data_id'] = toAscii($product_vars['product_select_box_counter']." ".$product_entry['title']." ".str_replace(',','',$product_entry['price']));
								$product_entry['data_url'] = $product_vars['current_page_url']."?sb=".$product_entry['data_id'];

								$product_entry['selected_text'] = "";

								// set image to default, or get image thumbnail if uploaded
								if (!$product_entry['image']) {
									$product_entry['image'] = $product_vars['default_product_image_url'];
									} else {
									$product_entry['image'] = $product_entry['image']['sizes']['cart-thumb'];
									}

							// if no errors have been found, push to products array
							if ((count($error_array)) == 0) { array_push($products,$product_entry); }
							// otherwise log errors (maybe)

						// end iterate through all rows
						endwhile;

					// end if rows are present
					}


					if ((count($products)) > 0) { // if there are valid products ?>

						<?php echo "<!-- PRODUCT SELECT BOX CONTENT BLOCK ".$product_vars['product_select_box_counter']." : BEGIN //-->"; ?>

						<?php ################# products container : start ################# ?>
						<?php ################# products container : start ################# ?>
						<?php ################# products container : start ################# ?>
						
						<div class="colorWrapper">
						<div class="container hpadded center">
						<div class='isf-content'>



							

							<span class="donationBox2">

							<?php ### select box : start ### ?>
							<script type="text/javascript">
							jQuery(document).ready(function(){	
								jQuery('#sb_<?php echo $product_vars['product_select_box_counter'] ?>').change(function() {
									var selectBoxID = "sb_<?php echo $product_vars['product_select_box_counter'] ?>";
									var selectBoxValue = jQuery(this).val();
									jQuery('.'+selectBoxID+'_button').hide();
									jQuery('#'+selectBoxValue+'_button').show();
								});
							});
							</script>
							<select id="sb_<?php echo $product_vars['product_select_box_counter'] ?>" class="product-select-box">
							<?php foreach ($products as $showproduct) { // first loop (create products) ?>

								<?php // determines which button and option to start out showing, based on URI
								if (($button_default_data_id == null) || ($_GET['sb'] == $showproduct['data_id'])) {
									$button_default_data_id = $showproduct['data_id'];
									if ($_GET['sb'] == $showproduct['data_id']) $showproduct['selected_text'] = "selected"; } ?>
								<option
									id="<?php echo $showproduct['data_id']; ?>"
									value="<?php echo $showproduct['data_id']; ?>"
									<?php echo $showproduct['selected_text']; ?>
									>
									<?php echo $showproduct['title']; ?> (<?php echo $showproduct['price']; ?> USD)
								</option>

							<?php } // end first loop (create products) ?>
							</select>
							<?php ### select box : end ### ?>



							<?php ### button wrapper : start ### ?>
							<span class="sp-button-container">
							<?php foreach ($products as $showproduct) { // second loop (create buttons) ?>
							<button
								class="snipcart-add-item sb_<?php echo $product_vars['product_select_box_counter']; ?>_button"
								id="<?php echo $showproduct['data_id']; ?>_button"
								value="<?php echo $showproduct['data_id']; ?>"									
								data-item-id="<?php echo $showproduct['data_id']; ?>"
								data-item-name="<?php echo $showproduct['title']; ?>"
								data-item-price="<?php echo str_replace(',','',$showproduct['price']); ?>"
								data-item-weight="20"
								data-item-url="<?php echo $showproduct['data_url']; ?>"
								data-item-image="<?php echo $showproduct['image']; ?>"
								data-item-description="<?php echo $showproduct['price']; ?> USD"
								data-item-stackable="false"	
								data-item-shippable="false"	
								<?php if ($showproduct['enable_note']) { // if note enabled ?>
									data-item-custom1-name="<?php echo $showproduct['note_instructions']; ?>"
									data-item-custom1-type="textarea"
									data-item-custom1-required="false"
								<?php } ?>

								<?php if ($button_default_data_id != $showproduct['data_id']) { ?>
									style="display:none;"
								<?php } ?>
								>
								<?php echo strtoupper($showproduct['button_text']); ?>
							</button>
							<?php } // end second loop through products (create buttons) ?>
							</span>
							<?php ### button wrapper : end ### ?>

							</span>





						</div>
						</div>
						</div>

						<?php ################# products container : end ################# ?>
						<?php ################# products container : end ################# ?>
						<?php ################# products container : end ################# ?>

						
						
						<?php echo "<!-- PRODUCT SELECT BOX CONTENT BLOCK ".$product_vars['product_select_box_counter']." : END //-->"; ?>

						<?php } // end if there are products to show ?>


<?php

$product_vars['product_select_box_counter']++; // increase counter by 1 so multiple select boxes can be added

// product_select_box :: end
// product_select_box :: end
// product_select_box :: end

?>