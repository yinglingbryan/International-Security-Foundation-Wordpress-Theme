<?php
// if it is gray and needs_wrapper == 0, then end the last wrapper
$bgcolor = get_sub_field('background_color');

if (($bgcolor == "gray") && ($builder_vars['needs_wrapper'] == 0)) {
	echo "</div>";
	$builder_vars['needs_wrapper'] = 1;
	}

if ($builder_vars['needs_wrapper']) { ?>
<div class="wrapper">
<?php
$builder_vars['needs_wrapper'] = 0;
}
?>


<section class="editor">
	<div class="pb-container">

	<div class="content">

		<?php
		the_sub_field( 'editor' );
		?>

	</div> <!-- content //-->

	</div> <!-- container //-->
</section> <!-- section //-->

<?php
if (($bgcolor == "gray") && ($builder_vars['needs_wrapper'] == 0)) {
	echo "</div>";
	$builder_vars['needs_wrapper'] = 1;
	}
?>