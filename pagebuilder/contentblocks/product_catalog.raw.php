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

							//for debug
							//var_dump($product_entry);

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
									$product_entry['note_instructions'] = "Enter a comment about this order:"; } // default note instructions		
										
								// if (count($product_entry['features']) < 1) array_push($error_array,"No Features");
									// throws error if no features are present, re-enable if features are to be required



							// if no errors have been found, push to products array

							if ((count($error_array)) == 0) { array_push($products,$product_entry); }

							// otherwise log errors (maybe)


						// end iterate through all rows
						endwhile;



					// end if rows are present
					}

					if ((count($products)) > 0) { // if there are products to show


					?>
					
					<!-- PRODUCT TABLE : BEGIN //-->


					<?php
						echo "<p>There is a products catalog to show</p>";
						// iterate through products array and build content block using data

						foreach ($products as $showproduct) {


							// individual product :: begin


							echo "<p>";

							echo "Title:  ";
							echo $showproduct['title'];
							echo "<br>";

							echo "Price:  ";
							echo $showproduct['price'];
							echo "<br>";

							echo "Features:  ";
							echo $showproduct['features'];
							echo "<br>";

							echo "Button Text:  ";
							echo $showproduct['button_text'];
							echo "<br>";

							echo "Image:  ";
							echo $showproduct['image'];
							echo "<br>";

							echo "Enable Note:  ";
							echo $showproduct['enable_note'];
							echo "<br>";

							echo "Note Instructions:  ";
							echo $showproduct['note_instructions'];

							echo "</p>";

							// individual product :: end

							}
					?>


					<!-- PRODUCT TABLE : END //-->


				<?php } // end if there are products to show  ?>

