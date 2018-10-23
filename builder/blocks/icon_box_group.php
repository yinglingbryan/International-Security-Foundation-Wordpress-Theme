<?php



$enable_header = get_sub_field( 'enable_header' );
$header_content = get_sub_field( 'header_content' );
$bgcolor = get_sub_field('background_color');
if ($bgcolor == "white") $bgcolor = 'colorchanging-grid';



if ( have_rows( 'icon_boxes' ) ) :






?>

<?php if ($builder_vars['needs_wrapper'] == 0) { ?>
</div>
<?php } ?>

<div class="wrapper <?php echo $bgcolor; ?>"> <!-- colorchanging grid wrapper -->

<?php if ( $enable_header == 1 ) { ?>
	<div class="pb-container">
		<div class="content">
			<div class="icon-box-group-header">
			<?php echo $header_content; ?>
			</div>
		</div>
	</div>
<?php } ?>

<section class="icon-box-group"><!-- section //-->
<div class="pb-container grid"><!-- grid container //-->
<?php

while ( have_rows( 'icon_boxes' ) ) : the_row();

	$icon = get_sub_field('icon');
	$icon_box_header = get_sub_field( 'icon-box-header' );
	$body_text = get_sub_field( 'body_text' );
	$link = get_sub_field( 'link' );
	if ( $link ) {
		$link['url'];
		$link['target'];
		$link['title'];
		}
	?>
			<!-- icon box : start -->
			<div class="grid-item icon-box<?php if ( $link ) { ?> with-link<?php } ?>">
			<div class="content">
				<div class="inner-content align-center">
					
					<div class="icon-box-content">
					<div class="icon-box-icon">
					<i class="isf-icon <?php echo $icon; ?>"></i>
					</div>

					<h3>
					<?php echo $icon_box_header; ?>
					</h3>

					<p class="s-text">
					<?php echo $body_text; ?>
					</p>

					
					<?php if ( $link ) { ?>
					<p class="s-text icon-box-link">
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="italic-text">
					<?php echo $link['title']; ?>
					</a>
					</p>
					<?php } ?>

					</div>

				</div>
			</div>
			</div>
			<!-- icon box : end -->





	<?php
endwhile;
?>
</div><!-- grid container //-->
</section><!-- section //-->

</div><!-- wrapper // -->

<?php

$builder_vars['needs_wrapper'] = 1;

endif;
?>