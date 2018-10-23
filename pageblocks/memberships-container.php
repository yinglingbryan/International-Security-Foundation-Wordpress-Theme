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

	<div class="container hapadded">
		<?php the_field('above_products_content'); ?>
	</div>

	<div>&nbsp;</div>

	<div class="container product-table"> <!-- this is a flex-box //-->
		<div class="product">
			<div class="product-header">
				<h3>PLATINUM LEVEL</h3>
				<span class="product-price">1,500 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>10% off Annual Gala Ticket Price</li>
					<li>Reserved Seating at ISF-Sponsored Forums</li>
					<li>Invitation to Members-only Reception before ISF-Sponsored Forums</li>
					<li>ISF Member Pin</li>
					<li>ISF Challenge Coin</li>
					<li>ISF e-Newsletter</li>
					<li>Listed in the Annual Report</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="8"
				    data-item-name="PLATINUM LEVEL MEMBERSHIP"
				    data-item-price="1500.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/membership"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Platinum.jpg"
				    data-item-description="1,500 USD"
					data-item-custom1-name="If you will be attending our event, please list attendees here."
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>GOLD LEVEL</h3>
				<span class="product-price">1,000 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>5% off Annual Gala Ticket Price</li>
					<li>Invitation to Members-only Reception before ISF-Sponsored Forums</li>
					<li>ISF Member Pin</li>
					<li>ISF Challenge Coin</li>
					<li>ISF e-Newsletter</li>
					<li>Listed in the Annual Report</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="9"
				    data-item-name="GOLD LEVEL MEMBERSHIP"
				    data-item-price="1000.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/membership"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Gold.jpg"
				    data-item-description="1,000 USD"
					data-item-custom1-name="If you will be attending our event, please list attendees here."
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>SILVER LEVEL</h3>
				<span class="product-price">500 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>ISF Member Pin</li>
					<li>ISF Challenge Coin</li>
					<li>ISF e-Newsletter</li>
					<li>Listed in the Annual Report</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="10"
				    data-item-name="SILVER LEVEL MEMBERSHIP"
				    data-item-price="500.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/membership"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Silver.jpg"
				    data-item-description="500 USD"
					data-item-custom1-name="If you will be attending our event, please list attendees here."
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product">
			<div class="product-header">
				<h3>BRONZE LEVEL</h3>
				<span class="product-price">250 USD</span>
			</div>

			<div class="product-body">
				<ul class="product-list">
					<li>ISF Member Pin</li>
					<li>ISF e-Newsletter</li>
					<li>Listed in the Annual Report</li>
				</ul>
			</div>

			<a class="button">
				<button
				    class="snipcart-add-item"
				    data-item-id="11"
				    data-item-name="BRONZE LEVEL MEMBERSHIP"
				    data-item-price="250.00"
				    data-item-weight="20"
				    data-item-url="<?php echo $documentBaseURL; ?>/support-isf/membership"
				    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Bronze.jpg"
				    data-item-description="250 USD"
					data-item-custom1-name="If you will be attending our event, please list attendees here."
					data-item-custom1-type="textarea"
					data-item-custom1-required="false">
				    ADD TO CART
				</button>
			</a>
		</div>

		<div class="product blank"></div>
		<div class="product blank"></div>
	</div>
</div>