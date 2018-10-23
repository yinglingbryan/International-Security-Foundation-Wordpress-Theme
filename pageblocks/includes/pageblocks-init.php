<?



get_header();

global $post;
$post_slug=$post->post_name;


?>


<?php
//include (get_stylesheet_directory()."/pageblocks/hero-banners-container.php");
?>



<?php

function default_editor_content() { return get_template_part('single/content', 'page'); }

function above_sidebar_content() { if( !empty($above_sidebar_content) ) return gdlr_print_page_builder($above_sidebar_content); }

function with_sidebar_content() { if( !empty($with_sidebar_content) ) return gdlr_print_page_builder($with_sidebar_content); }

function below_sidebar_content() { if( !empty($below_sidebar_content) ) return gdlr_print_page_builder($below_sidebar_content); }

function container_width() { return $theme_option['container-width']; }




// get a field from a post id
		//get_field("background_image_url",$myBannerID,true);









function getPageBlock($slug,$urivarient,$enclose) {
		$uri = get_stylesheet_directory()."/pageblocks/".$slug."-container".$urivarient.".php";
		

		if (file_exists($uri)) {

			if ($enclose !== false) echo "<div class='isf-content ".$post_slug." ".$title."'>";
			include($uri);
			if ($enclose !== false) "</div>";
			return true;

		}

		echo $uri." was not found.";
		
	}






	// include any pageblocks files that need to be included after header, but before content starts









gdlr_print_page_builder($above_sidebar_content);
default_editor_content();
gdlr_print_page_builder($with_sidebar_content);









	







	
?>