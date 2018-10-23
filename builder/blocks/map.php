<?php if ($builder_vars['needs_wrapper']) { ?>
<div class="wrapper">

<?php
$builder_vars['needs_wrapper'] = 0;
}
?>

	<section class="editor">
		<div class="pb-container">
		<div class="content">
		

		<?php
		$header = trim(get_sub_field('header'));
		if ($header != "") {
		?>
		<h2 class="align-center"><?php echo $header; ?></h2>
		<?php
		}
		?>
		
		<?php build_i_world_map(2); ?>

		</div> <!-- content //-->
		</div> <!-- container //-->
	</section> <!-- section //-->