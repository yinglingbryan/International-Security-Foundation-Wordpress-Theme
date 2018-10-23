
<?php

		// start infographics content container
		global $theme_option;

		?>

		
		
		<div style="width:100%; position:relative; height:auto;">



		<div id="igsliderControls" style="max-width:1180px; ?>px; width:100%; display:none;">

			<i id="igsliderControls-left" class="fa fa-angle-left" style="display:none;"></i>
			<i id="igsliderControls-right" class="fa fa-angle-right" style="display:none;"></i>

		</div>



		<div class="ig-color-container">
		


		<?php 
		

			$infographics = new WP_Query(
			array("post_type" => array("infographics"), 
				"posts_per_page" => 1000,
				'order'    => 'ASC',
        		'orderby'  => 'order',
        		'meta_key' => 'order'
				)
			);
	


		?>



		
		

		<div id="igslider" style="max-width:<?php echo $theme_option['container-width']-60; ?>px; width:100%; display:none;">
			
			<ul><?php

			foreach ($infographics->posts as $member):

				$infographic = array();
				$infographic["icon_class"] = get_post_meta($member->ID, 'icon_class', true);
				$infographic["numeric_header"] = get_post_meta($member->ID, 'numeric_header', true);
				$infographic["text_subheader"] = get_post_meta($member->ID, 'text_subheader', true);
				$infographic["details_text"] = get_post_meta($member->ID, 'details_text', true);
				$infographic["order"] = get_post_meta($member->ID, 'order', true);

				
				array_splice( $allinfographics, $infographic['order'], 0, $infographic );



		?><li>
			<div class="ig-wrapper">
				<i class="isf-icon-large <?php echo $infographic["icon_class"]; ?>">&nbsp;</i>
				<div class="ig-numeric-header"><?php echo $infographic["numeric_header"]; ?></div>
				<div class="ig-text-subheader"><?php echo $infographic["text_subheader"]; ?></div>
				<div class="ig-details-text"><?php echo $infographic["details_text"]; ?></div>
			</div>
		</li><?php

			endforeach;



			?></ul>

			



		<!-- end of page slider container -->
		</div>

		</div>

	</div>
