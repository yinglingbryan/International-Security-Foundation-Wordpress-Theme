<div id="pb-content">
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


$builder_vars['section_count'] = 0;
$builder_vars['background_color'] = null;
$builder_vars['color_changed'] = false;

$builder_vars['needs_wrapper'] = 1;


// calls the builders for each 
$mainContent = get_field("main_content");
$mainContent = trim($mainContent);


if ($show_the_content) {
?>

<div class="wrapper">
<section class="editor">
	<div class="pb-container">

	<div class="content">
		
		<?php
			get_template_part('single/content', 'page');
		?>

	</div> <!-- content //-->

	</div> <!-- container //-->
</section> <!-- section //-->
<?php
$builder_vars['needs_wrapper'] = 0;
}


if ( have_rows( 'add_page_block' ) ):
	while ( have_rows( 'add_page_block' ) ) : the_row();

		$pageBlockLayout = get_row_layout();		
		$pageblockURL = dirname(__FILE__)."/blocks/".$pageBlockLayout.".php";

		if (file_exists($pageblockURL)) {			
				include($pageblockURL);
				} else {
				echo $pageblockURL." has not yet been created.";
				}

		$builder_vars['section_count']++;
	endwhile;
endif;

if ($builder_vars['needs_wrapper'] == 0) {
	echo "</div>";
	}

?>
</div>