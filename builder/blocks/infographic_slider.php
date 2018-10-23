<?php


global $theme_option;
$infographics = new WP_Query(
	array("post_type" => array("infographics"), 
		"posts_per_page" => 1000,
		'order'    => 'ASC',
       	'orderby'  => 'order',
       	'meta_key' => 'order'
		)
	);

foreach ($infographics->posts as $member):

	$infographic = array();
	$infographic["icon_class"] = get_post_meta($member->ID, 'icon_class', true);
	$infographic["numeric_header"] = get_post_meta($member->ID, 'numeric_header', true);
	$infographic["text_subheader"] = get_post_meta($member->ID, 'text_subheader', true);
	$infographic["details_text"] = get_post_meta($member->ID, 'details_text', true);
	$infographic["order"] = get_post_meta($member->ID, 'order', true);
	array_splice( $allinfographics, $infographic['order'], 0, $infographic );


	$infographic["icon_class"];
	$infographic["numeric_header"];
	$infographic["text_subheader"];
	$infographic["details_text"];

	/** show each inforgraphic **/

endforeach;

if ($builder_vars['needs_wrapper'] == 0) { 
	echo "</div>"; 
	$builder_vars['needs_wrapper'] = 1;
	}

echo "</div>";

include (get_stylesheet_directory()."/pageblocks/infographics-container-tmp.php");
echo "<div id='pb-content'>";

?>