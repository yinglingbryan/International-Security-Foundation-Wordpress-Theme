<?php			

				// product_catalog :: start
				// product_catalog :: start
				// product_catalog :: start



					//$product_group_label = get_sub_field( 'layout_label' );
					$products = array();

				
					if ( have_rows( 'product_catalog_products' ) ) {
					// if rows are present

						while ( have_rows( 'product_catalog_products' ) ) : the_row();
						// iterate through all rows

							$singleProduct = get_sub_field('single_product');

							$product_entry = array();
							$product_entry['title'] = $singleProduct['title'];
							$product_entry['price'] = $singleProduct['product_options_group']['price'];
							$product_entry['features'] = array();

								// put features in it's own array
								foreach ($singleProduct['product_options_group']['features_list'] as $featurevar) {
									array_push($product_entry['features'], $featurevar['feature_text']);
									}

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
								if ($product_entry['button_text'] == "") $product_entry['button_text'] = $product_vars['default_button_text'];
								if (($product_entry['enable_note']) && ($product_entry['note_instructions'] == "")) {
									$product_entry['note_instructions'] = $product_vars['default_note_instructions']; } // default note instructions

								// create data_id
								$product_entry['data_id'] = toAscii($product_vars['product_select_box_counter']." ".$product_entry['title']." ".str_replace(',','',$product_entry['price']));
								$product_entry['data_url'] = $product_vars['current_page_url'];

								//echo $product_entry['image'];

								if (!$product_entry['image']) {
									$product_entry['image'] = $product_vars['default_product_image_url'];
									} else {
									$product_entry['image'] = $product_entry['image']['sizes']['cart-thumb'];
									}
										
								if (count($product_entry['features']) < 1) array_push($error_array,"No Features");
								// throws error if no features are present, re-enable if features are to be required

							// if no errors have been found, push to products array

							if ((count($error_array)) == 0) { array_push($products,$product_entry); }

							// otherwise log errors (maybe)

						// end iterate through all rows
						endwhile;



					// end if rows are present
					}

					if ((count($products)) > 0) { // if there are products to show	?>
					
					<!-- products container :: begin //-->
					<div class="isf-content">
					<div class="container product-table">

					<?php
						// iterate through products array and build content block using data
						$counter = 0;
						foreach ($products as $showproduct) {
							if ($counter == 3) $counter = 0; else $counter++;
							?>
							<?php // individual product :: start ?>


							<div class="product">
								<div class="product-header">
									<h3><?php echo $showproduct['title']; ?></h3>
									<span class="product-price"><?php echo $showproduct['price']; ?> USD</span>
								</div>
								<div class="product-body">
									<ul class="product-list">
										<?php foreach($showproduct['features'] as $feature) { ?>
										<li><?php echo $feature; ?></li>
										<?php } ?>
									</ul>
								</div>								
									<button
									    class="snipcart-add-item"
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
										>
									<?php echo strtoupper($showproduct['button_text']); ?>
									</button>
							</div>
							
							
							<?php // individual product :: end ?>
							<?php } ?>

						<?php
						while ($counter < 3) {
						$counter++;
						?>
						<div class="product blank" style="padding-top:0 !important; padding-bottom:0 !important; margin-top:0 !important; margin-bottom:0 !important; height:1px !important; line-height:1px !important; font-size:1px !important;">&nbsp;</div>
						<?php
						}
						?>
							
					</div>
					</div>
					<!-- products container :: end //-->


				<?php } // end if there are products to show  ?>