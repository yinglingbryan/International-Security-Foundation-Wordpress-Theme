<div class="rv2">



<?php




$enabled = get_field('enable_icon_boxes');

if ($enabled != 1) return;

	if( have_rows('icon_boxes') ):


	$my_fields = get_field_object('icon_boxes');
   	$count = (count($my_fields['value']));

   	//echo $count;

   	$injectPoint =  (floor($count/4)*4);
   	if ($injectPoint == $count) { $injectPoint = null; }



?>







<div class="container icon-box-container center">
<?php

	 	// loop through the rows of data
		$counter=1;
	    while ( have_rows('icon_boxes') ) : the_row();

	    	

	        // display a sub field value
	        $icon = get_sub_field('icon');
	        $icon_box_header = get_sub_field('icon-box-header');
	        $body_text = get_sub_field('body_text');
	        $link = get_sub_field('link');


	        // error check

	       

	        



?>


	<div class="icon-box center hpadded<?php if( $link ) echo ' haslink' ?>">
		

		<i class="icon-box-icon isf-icon <?php the_sub_field('icon'); ?>"></i>

		<br>
		
		<h3 class="icon-box-title">
			<?php the_sub_field('icon-box-header'); ?>
		</h3>
		
		<br>
		
		<p class="small icon-box-text"><?php the_sub_field('body_text'); ?></p>
		
		
		<?php 
		if( $link ):
		?>

		<a href="<?php echo $link['url']; ?>" class="icon-box-link link" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

		<?php endif; ?>

	</div>



<?php





if ($injectPoint == $counter) { ?>


	<div class="icon-box blank">
	<h3 class="icon-box-title">
	&nbsp;
	</h3>
	</div>


	<?php
	}

	$counter++;

endwhile;



if ($injectPoint != null) {

 
	$count++;
	$injectPoint =  (floor($count/4)*4);
	if ($injectPoint != $count) {
	?>
	<div class="icon-box blank">
		<h3 class="icon-box-title">
		&nbsp;
		</h3>
	</div>
	<?php
	}

}




?>
</div>
<?php

	endif;

?>
</div>