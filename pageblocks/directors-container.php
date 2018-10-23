
<?php

// import data here




//directors

// name
// photo
// position
// company
// website
// linked-in










//


?>


<div class="container directors">

	<div class="innerwrapper">
			
		<?php
			$i = 0;
			while($i < 14) {
				?>

		<span class="employee">
					
		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="photo front">&nbsp;</div>
				<div class="links back">links</div>
			</div>
		</div>

		<div class="caption">
			<h3>James F. Snyder</h3>
				<p class="jobtitle">President</p>
				<p class="jobtitle">Job Title Goes Here</p>
			</div>
		</span>



		<?
			$i++;
			}
		?>
			
	</div>

</div>