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

	<div class="container product-table"><!-- this is a flex-box //-->

		<div class="product">
			<div class="product-header">
				<h3>PREMIUM TICKET</h3>
				<span class="product-price">1000 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>Recognition as an individual sponsor at the premium level in the event program journal</li>
					<li>One (1) premium ticket to The ISF 5th Annual OSAC Appreciation Dinner</li>
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
	</div><!-- this is a flex-box END //-->
</div>