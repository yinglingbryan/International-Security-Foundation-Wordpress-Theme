
<?php

// import data here

//staff

// name
// photo
// position
// linked-in
// email










//


?>


<div class="container directors">

	<div class="innerwrapper">
			
		<?php
			$i = 0;
			while($i < 4) {
				?>

		<span class="employee">
					
		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="photo front">&nbsp;</div>
				<div class="links back">LI EM</div>
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