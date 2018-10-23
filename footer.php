	<?php global $theme_option; ?>
	<div class="clear" ></div>
	</div><!-- content wrapper -->

	<?php 
		// page style

		$themePath = get_stylesheet_directory();

		global $gdlr_post_option;
		if( empty($gdlr_post_option) || empty($gdlr_post_option['page-style']) ||
			  $gdlr_post_option['page-style'] == 'normal' || 
			  $gdlr_post_option['page-style'] == 'no-header'){ 
	?>	

<footer class="footer-wrapper footer2">

<?php if( $theme_option['show-footer'] != 'disable' ){ ?>

	<div class="footer-container">
		<div class="container">
			<div id="block1"<?php if (get_field('block1_bgimage','option')) { echo ' style=\'background-image:url('.get_field('block1_bgimage','option').')\'; background-position:\'center center\';'; } ?> class="footerblock">
				<div class="vertical-align-outer">
						<div class="vertical-center center">
						<?php the_field('block1_content', 'option'); ?>
						</div>
				</div>
			</div>
			<div id="block2" class="footerblock center">
				<h6>EVENT GALLERIES</h6>		
				<div id="gallery-wrap">			
				<?php include ("events_gallery.php"); ?>
				</div>
			</div>
			<div id="block3"<?php if (get_field('block3_bgimage','option')) { echo ' style=\'background-image:url('.get_field('block3_bgimage','option').')\'; background-position:\'center center\';'; } ?> class="footerblock">
				<div class="vertical-align-outer">
					<div class="vertical-center center">
						<?php the_field('block3_content', 'option'); ?>
					</div>
				</div>
			</div>
			<div id="block4"<?php if (get_field('block4_bgimage','option')) { echo ' style=\'background-image:url('.get_field('block4_bgimage','option').')\'; background-position:\'center center\';'; } ?> class="footerblock">
					<?php the_field('block4_content', 'option'); ?>
			</div>		
		</div>
	</div>

<?php } ?>

<?php if( $theme_option['show-copyright'] != 'disable' ){ ?>
	<div class="copyright-wrapper">
		<div class="copyright-container container">
			<div class="copyright-left">
				<?php if( !empty($theme_option['copyright-left-text']) ) echo gdlr_text_filter($theme_option['copyright-left-text']); ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://smile.amazon.com/ch/80-0719130" target="_blank"><img src="/wp-content/themes/isf/images/smile-logo-darkbg.png" style="height:30px; vertical-align: middle; border:0;"></a>
			</div><div class="copyright-right">
					<?php if( !empty($theme_option['copyright-right-text']) ) echo gdlr_text_filter($theme_option['copyright-right-text']); ?>
			</div><div class="clear"></div>
		</div>
	</div>
<?php } ?>

		
</footer>
<?php } ?>

<!-- Sticky Footer -->
<?php

if ( get_field('enable_sticky_footer','option') ) {

?>

<div class="section-sticky-footer">
	<div class="content">
		<p><?php the_field('text', 'option'); ?></p>
		<?php

			$stickyfooterbutton = get_field('sticky_footer_button', 'option');


		?>
		<a href="<?php echo $stickyfooterbutton['url']; ?>"><?php echo $stickyfooterbutton['title']; ?></a>
		<div class="clear"></div>
	</div>
</div>

<?php } ?>

</div> <!-- body-wrapper -->
<?php wp_footer(); ?>
</body>
</html>
