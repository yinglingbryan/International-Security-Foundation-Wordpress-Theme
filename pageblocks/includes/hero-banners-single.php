<?php

$myBannerID = $_REQUEST['banner-id'];

// get variables from post
$background_image_url = get_field("background_image_url",$myBannerID,true);
$background_color = get_field("background_color",$myBannerID,true);
$content_image_url = get_field("content_image_url",$myBannerID,true);
$mobile_content_image_url = get_field("mobile_content_image_url",$myBannerID,true);
$content_type = get_field("content_type",$myBannerID,true);
$header1 = get_field("header1",$myBannerID,true);
$header2 = get_field("header2",$myBannerID,true);
$body = get_field("body",$myBannerID,true);
$text_align = get_field("text_align",$myBannerID,true);
$text_color = get_field("text_color",$myBannerID,true);
$editor_output = get_field("editor_output",$myBannerID,true);
$content_HTML = get_field("content_HTML",$myBannerID,true);
$has_button = get_field("has_button",$myBannerID,true);
$button_align = get_field("button_align",$myBannerID,true);
$button_text = get_field("button_text",$myBannerID,true);
$button_link = get_field("button_link",$myBannerID,true);
$button_color = get_field("button_color",$myBannerID,true);
// must be blue, gray, whiteBorder, or yellow (default yellow)



$banner_class = "hero-banner";




$text_color = trim($text_color);







$background_image_url = trim($background_image_url);
$background_color = trim($background_color);

$background_color = trim($background_color);
if ($background_color === "") {
	if ($background_image_url === "") {
			$background_color = "#003366";
			} else {
			$background_color = "transparent";
			}
	}


$mobile_content_image_url = trim($mobile_content_image_url);
if ($mobile_content_image_url === "") $mobile_content_image_url = $content_image_url;


if ($content_type == "text") {
	$content_HTML = generateHTML($header1,$header2,$body);
	$content_type = "html";
	}

if ($content_type == "editor") {
	$content_HTML = $editor_output;
	$content_type = "html";
	}

if ($content_type == "html") {
		$banner_class = $banner_class." show-text";
	} else {
		$banner_class = $banner_class." show-image";
	}


if ($has_button) $banner_class = $banner_class." show-button";


$banner_class = $banner_class." ".$text_align; 

// add text alignment class


?>


<div class="<?php echo $banner_class; ?>" style="<?php

	echo "background-image:url(".$background_image_url."); background-color:".$background_color.";";

?>">

	<div class="container">

		<div class="hb-content-container">

				
<span class="image-wrapper" style="<?php

if ($content_type != "html") {
	echo "background-image:url(".$content_image_url.");";
	}

?>">&nbsp;</span>

<span class="mobile-image-wrapper" style="<?php

if ($content_type != "html") {
	echo "background-image:url(".$mobile_content_image_url.");";
	}

?>">&nbsp;</span>

				<span class="text-wrapper" style="<?php if ($text_color !== "") { echo "color:".$text_color.";"; } ?>">

				<?php echo $content_HTML; ?>

				</span>
			

		</div>
		<div class="hb-button-container <?php echo $button_align; ?>">
			
			<a href="<?php echo $button_link; ?>" class="button <?php echo $button_color; ?>Button"><?php echo $button_text; ?></a>

		</div>


	</div>

</div>