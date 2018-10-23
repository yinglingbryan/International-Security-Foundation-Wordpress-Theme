<?php
if($_SERVER['SERVER_ADDR'] == '192.168.16.250'){
    $documentBaseURL = "http://isf4osac.mghstage.com";
} else {
    $documentBaseURL = "http://isf4osac.org";
}

?>
<div class="colorWrapper">

	<?php /* <!-- SNIPCART DEPENDENCIES - MOVE TO FUNCTIONS.PHP WHEN YOU INTEGRATE -->
	<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" data-api-key="NTJiNWQwYmItNjIzMi00ODdlLTkyMDYtZTllOTljODcxNWM0NjM2NDU1ODE4NjcxMTQ1MDA5" id="snipcart"></script>
	<link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />
	*/ ?>

	<div class="container">
		<div class="above-product-table">
			
			<?php the_field('above_products_content'); ?>

		</div>
	</div>

	<div>&nbsp;</div>

	<div class="container product-table"><!-- this is a flex-box //-->

		<div class="product">
			<div class="product-header">
				<h3>PLATINUM SPONSOR</h3>
				<span class="product-price">35,000 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>Two (2) VIP seats with the evening’s keynote speaker at The ISF Annual OSAC Appreciation Dinner</li>
					<li>Photo opportunity with keynote speaker at the VIP reception</li>
					<li>Ten (10) invitations to the VIP reception</li>
					<li>Ten (10) invitations (one table) to the event, including priority seating</li>
					<li>Verbal recognition from the stage at the event</li>
					<li>One (1) full page, color advertisement on the inside front or inside back cover in the event program journal*</li>
					<li>Logo recognition for one (1) year on the ISF website with organization’s direct hyperlink</li>
					<li>Recognition in ISF’s Annual Donor Report</li>
				</ul>
			</div>
	
			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="1"
				    data-item-name="PLATINUM SPONSOR"
				    data-item-price="35000.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/sponsorship"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Platinum.jpg" 
				    data-item-description="35,000 USD"
					data-item-custom1-name="Thank you for your ISF membership. If this is for someone other than the person whose name is on the credit card, please list here:"
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>GOLD SPONSOR</h3>
				<span class="product-price">25,000 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>Photo opportunity with keynote speaker at the VIP reception</li>
					<li>Ten (10) invitations to the VIP reception</li>
					<li>Ten (10) invitations (one table) to the event, including priority seating</li>
					<li>Verbal recognition from the stage at the event</li>
					<li>One (1) full page, color advertisement in the event program journal*</li>
					<li>Logo recognition for one (1) year on the ISF website with organization’s direct hyperlink</li>
					<li>Recognition in ISF’s Annual Donor Report</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="2"
				    data-item-name="GOLD SPONSOR"
				    data-item-price="25000.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/sponsorship"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Gold.jpg" 
				    data-item-description="25,000 USD"
					data-item-custom1-name="Thank you for your ISF membership. If this is for someone other than the person whose name is on the credit card, please list here:"
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>SILVER SPONSOR</h3>
				<span class="product-price">15,000 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>Ten (10) invitations to the VIP reception</li>
					<li>Ten (10) invitations (one table) to the event</li>
					<li>Verbal recognition from the stage at the event</li>
					<li>Half page, full color advertisement placed in the event program journal*</li>
					<li>Logo recognition for one (1) year on the ISF website with organization’s direct hyperlink</li>
					<li>Recognition in the ISF’s Annual Donor Report</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="3"
				    data-item-name="SILVER SPONSOR"
				    data-item-price="15000.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/sponsorship"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Silver.jpg" 
				    data-item-description="15,000 USD"
					data-item-custom1-name="Thank you for your ISF membership. If this is for someone other than the person whose name is on the credit card, please list here:"
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				        ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>BRONZE SPONSOR</h3>
				<span class="product-price">10,000 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>Ten (10) invitations (one table) to the event</li>
					<li>Quarter page, color advertisement in the event program journal*</li>
					<li>Logo recognition for one (1) year on the ISF website with organization’s direct hyperlink</li>
					<li>Recognition in the ISF’s Annual Donor Report</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="4"
				    data-item-name="BRONZE SPONSOR"
				    data-item-price="10000.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/sponsorship/"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Bronze.jpg" 
				    data-item-description="10,000 USD"
					data-item-custom1-name="Thank you for your ISF membership. If this is for someone other than the person whose name is on the credit card, please list here:"
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>PATRON SPONSOR</h3>
				<span class="product-price">5,000 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>Four (4) invitations to the event</li>
					<li>Listing as Patron in the event program journal*</li>
					<li>Name recognition for one (1) year on the ISF website</li>
					<li>Recognition in the ISF’s Annual Donor Report</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="5"
				    data-item-name="PATRON SPONSOR"
				    data-item-price="5000.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/sponsorship"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Patron.jpg" 
				    data-item-description="5,000 USD"
					data-item-custom1-name="Thank you for your ISF membership. If this is for someone other than the person whose name is on the credit card, please list here:"
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>PREMIUM TICKET</h3>
				<span class="product-price">1000 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>Recognition as an individual sponsor at the premium level in the event program journal</li>
					<li>One (1) premium ticket to The ISF Annual OSAC Appreciation Dinner</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="6"
				    data-item-name="PREMIUM TICKET"
				    data-item-price="1000.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/sponsorship"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Premium.jpg" 
				    data-item-description="1,000 USD"
					data-item-custom1-name="Thank you for your ISF membership. If this is for someone other than the person whose name is on the credit card, please list here:"
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>Individual Ticket</h3>
				<span class="product-price">350 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>One (1) ticket to the event</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="7"
				    data-item-name="INDIVIDUAL TICKET"
				    data-item-price="350.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/sponsorship"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_individual.jpg" 
				    data-item-description="350 USD"
					data-item-custom1-name="Thank you for your ISF membership. If this is for someone other than the person whose name is on the credit card, please list here:"
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product blank"></div>
		<div class="product blank"></div>
	</div><!-- this is a flex-box END //-->
</div>