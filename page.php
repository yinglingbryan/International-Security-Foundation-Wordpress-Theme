<?php get_header(); 
	if( ! post_password_required() ){ 


$show_the_content = false;


if((!empty($below_sidebar_content)) || (!empty($above_sidebar_content)) || (!empty($with_sidebar_content)) || (( '' !== get_post()->post_content ) && ( empty($gdlr_post_option['show-content']) || $gdlr_post_option['show-content'] != 'disable' )) ) {
// if gdlr content exists : begin
?>


	<div class="gdlr-content">

		<!-- Above Sidebar Section-->
		<?php global $gdlr_post_option, $above_sidebar_content, $with_sidebar_content, $below_sidebar_content; ?>
		<?php if(!empty($above_sidebar_content)){ ?>
			<div class="above-sidebar-wrapper"><?php gdlr_print_page_builder($above_sidebar_content); ?></div>
		<?php } ?>
		
		<!-- Sidebar With Content Section-->
		<?php 
			if( !empty($gdlr_post_option['sidebar']) && ($gdlr_post_option['sidebar'] != 'no-sidebar' )){
				global $gdlr_sidebar;
				
				$gdlr_sidebar = array(
					'type'=>$gdlr_post_option['sidebar'],
					'left-sidebar'=>$gdlr_post_option['left-sidebar'], 
					'right-sidebar'=>$gdlr_post_option['right-sidebar']
				); 
				$gdlr_sidebar = gdlr_get_sidebar_class($gdlr_sidebar);
		?>
			<div class="with-sidebar-wrapper gdlr-type-<?php echo esc_attr($gdlr_sidebar['type']); ?>">
				<div class="with-sidebar-container container">
					<div class="with-sidebar-left <?php echo esc_attr($gdlr_sidebar['outer']); ?> columns">
						<div class="with-sidebar-content <?php echo esc_attr($gdlr_sidebar['center']); ?> columns">
							<?php 
								if( !empty($with_sidebar_content) ){
									gdlr_print_page_builder($with_sidebar_content, false);
								}
								if( !empty($gdlr_post_option['show-content']) && $gdlr_post_option['show-content'] != 'disable' ){
									get_template_part('single/content', 'page');
								}
							?>							
						</div>
						<?php get_sidebar('left'); ?>
						<div class="clear"></div>
					</div>
					<?php get_sidebar('right'); ?>
					<div class="clear"></div>
				</div>				
			</div>				
		<?php 
			}else{ 
				if( !empty($with_sidebar_content) ){ 
					echo '<div class="with-sidebar-wrapper gdlr-type-no-sidebar">';
					gdlr_print_page_builder($with_sidebar_content);
					echo '</div>';
				}
				if( empty($gdlr_post_option['show-content']) || $gdlr_post_option['show-content'] != 'disable' ){
					get_template_part('single/content', 'page');
				}
			} 
		?>

		
		<!-- Below Sidebar Section-->
		<?php if(!empty($below_sidebar_content)){ ?>
			<div class="below-sidebar-wrapper"><?php gdlr_print_page_builder($below_sidebar_content); ?></div>
		<?php } ?>

		
	</div><!-- gdlr-content -->

<?php  } else {

	if ( '' !== get_post()->post_content ) {
		
		$show_the_content = true;

		} 

}	// if gdlr content exists :: end ?>


<?php

// include page builder
include get_stylesheet_directory()."/builder/builder.php";

?>

<?php }else{ // post password require
		echo '<div class="with-sidebar-container container gdlr-password-protected" style="padding-top: 60px; padding-bottom: 40px;" >';
		echo '<div class="gdlr-item">';
		the_content();
		echo '</div>';
	} ?>

<?php

get_footer(); ?>