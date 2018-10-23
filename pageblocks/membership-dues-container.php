<?php
if($_SERVER['SERVER_ADDR'] == '192.168.16.250'){
    $documentBaseURL = "http://isf4osac.mghstage.com";
} else {
    $documentBaseURL = "http://isf4osac.org";
}
?>

	<?php /* <!-- SNIPCART DEPENDENCIES - MOVE TO FUNCTIONS.PHP WHEN YOU INTEGRATE -->
	<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" data-api-key="NTJiNWQwYmItNjIzMi00ODdlLTkyMDYtZTllOTljODcxNWM0NjM2NDU1ODE4NjcxMTQ1MDA5" id="snipcart"></script>
	<link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />
	*/ ?>

<div class="container dp">

<div class="donationBox">

<p class="description">
	Membership dues are used to fund OSAC Council expenses for the various conferences, meetings and events throughout the year.
</p>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#snipcart-select').change(function(){
			// GET PRICE
			var formattedVal = jQuery(this).val();
			
			// SET PRICE
		    jQuery('#snipcart-select-button').data('item-price', jQuery(this).val());
		});
	});
</script>

<select id="snipcart-select">
	<option value="2500.00" selected="selected">$2,500 (Executive Member)</option>
	<option value="2000.00">$2,000 (Strategic Member)</option>
	<option value="1500.00">$1,500 (Supporting Member)</option>
</select>

<span class="space">&nbsp;</span>

<button class="snipcart-add-item" id="snipcart-select-button"
    data-item-id="17"
    data-item-name="ANNUAL MEMBERSHIP DUES"
    data-item-price="2500.00"
    data-item-weight="20"
    data-item-url="<?php echo $documentBaseURL; ?>/annual-membership-dues"
    data-item-image="<?php echo $documentBaseURL; ?>/wp-content/uploads/2017/11/ISF-receipts_Globe.jpg" 
    data-item-description="">
    ADD TO CART
</button>

</div>

</div>