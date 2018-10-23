<?php

include_once (get_stylesheet_directory()."/pageblocks/includes/hero-banners-functions.php");


$pageID = get_the_ID();
$heroBannersSelected = get_post_meta($pageID,"hero_banner_ids");

$arrayOfIDS = $heroBannersSelected[0];
$numberOfBanners = count($arrayOfIDS);

// if there are at least 1 banners selected
if ($numberOfBanners > 0) { // if banners exist


//inject flexslider container start
//inject flexslider container start
//inject flexslider container start


if ($numberOfBanners > 1) {
echo "<div id='heroBannerFlexSlider' class='flexslider'>";
echo "<ul class='slides'>";
}


$i = 0;

while ($i < $numberOfBanners) {

	// include the single banner view
	// for each hero banner that you are going to show
	if ($numberOfBanners > 1) {
	echo "<li>";
	}


	$_REQUEST['banner-id'] = $arrayOfIDS[$i];
	include (get_stylesheet_directory()."/pageblocks/includes/hero-banners-single.php");

	if ($numberOfBanners > 1) {
	echo "</li>";
	}
	// end include single banner view
	// for each hero banner that you are going to show

$i++;
} // end iterate through banners



if ($numberOfBanners > 1) {
echo "</ul>";
echo "</div>";
}

// inject flexslider container end
// inject flexslider container end
// inject flexslider container end


} // end if banners exist
?>