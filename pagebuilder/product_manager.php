<?php


// function for creating a URI friendly string
setlocale(LC_ALL, 'en_US.UTF8');
function toAscii($str, $replace=array(), $delimiter='-') {
	if( !empty($replace) ) {
	$str = str_replace((array)$replace, ' ', $str);
	}

	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	return $clean;
	}
// end function for creating a URI friendly string



$product_vars = array();
$product_vars['default_button_text'] = "Add To Cart";
$product_vars['default_note_instructions'] = "Enter a comment about this order";
$product_vars['default_product_image_url'] = "http://www.google.com";
$product_vars['current_page_id'] = get_the_ID();
$product_vars['current_page_url'] = get_page_link($product_vars['current_page_id']);

$product_vars['product_select_box_counter'] = 0;
$product_vars['configurable_price_product_counter'] = 0;

//$product_vars['pagetime'] = the_modified_time('U'); // timestamp that this post was last modified



// calls the builders for each of the 3 product options, selectable from the product manager menu

if ( have_rows( 'products_group' ) ) :
	while ( have_rows( 'products_group' ) ) : the_row();
		if ( have_rows( 'products' ) ) :
			while ( have_rows( 'products' ) ) : the_row();

				echo "<div class='pb-content'>";

				// include the php file matching the layout name  from the pagebuilder/contentblocks directory
				include get_stylesheet_directory()."/pagebuilder/contentblocks/".get_row_layout().".php";

				echo "</div>";

			endwhile; //  loop through layouts :: end 
		endif; // if no layouts are found :: end
	endwhile;
endif;

?>