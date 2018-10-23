
<script>

	var showButton = function(e) {
		console.log(e);
		}

</script>


<div class="container dp">

	<div class="donationBox">

	<h2>Make a donation</h2>

	<p class="description">
		Tax-deductible donations by organizations and individuals make all we do possible as we work with OSAC and the private sector to secure the safety of Americans across the globe.
	</p>

		<?php /*
		<select onchange="javascript:showButton(this);">
			<option>2500 USD DONATION</option>
			<option>2500 USD DONATION</option>
			<option>2500 USD DONATION</option>
			<option>2500 USD DONATION</option>
		</select>
		<span class="space">&nbsp;</span>
		<button>
			Donate Now
		</button>
		
		<br /><br />
		*/ ?>
		
		<div id='product-component-621035448bb' style="margin:0 auto;"></div><script type="text/javascript">/*<![CDATA[*/(function (){var scriptURL='https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js'; if (window.ShopifyBuy){if (window.ShopifyBuy.UI){ShopifyBuyInit();}else{loadScript();}}else{loadScript();}function loadScript(){var script=document.createElement('script'); script.async=true; script.src=scriptURL; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script); script.onload=ShopifyBuyInit;}function ShopifyBuyInit(){var client=ShopifyBuy.buildClient({domain: 'isf4osac.myshopify.com', apiKey: 'e6c5caf99d912f559117209eefa9a126', appId: '6',}); ShopifyBuy.UI.onReady(client).then(function (ui){ui.createComponent('product',{id: [1490717507], node: document.getElementById('product-component-621035448bb'), moneyFormat: '%24%7B%7Bamount%7D%7D', options:{"product":{"variantId": "all", "width": "240px", "contents":{"img": false, "imgWithCarousel": false, "title": false, "variantTitle": false, "price": false, "description": false, "buttonWithQuantity": false, "quantity": false}, "text":{"button": "DONATE NOW"}, "styles":{"product":{"@media (min-width: 601px)":{"max-width": "100%", "margin-left": "0", "margin-bottom": "50px"}}, "button":{"background-color": "#ffcc62", "color": "#000000","padding-top": "18px", "padding-bottom": "18px", "padding-left": "px", "padding-right": "px", ":hover":{"background-color": "#e6b858", "color": "#000000"}, "border-radius": "0px", ":focus":{"background-color": "#e6b858"}, "font-weight": "bold"}, "title":{"font-size": "26px"}, "price":{"font-size": "18px"}, "compareAt":{"font-size": "15px"}}}, "cart":{"contents":{"button": true}, "styles":{"button":{"background-color": "#ffcc62", "color": "#000000", ":hover":{"background-color": "#e6b858", "color": "#000000"}, "border-radius": "0px", ":focus":{"background-color": "#e6b858"}, "font-weight": "bold"}, "footer":{"background-color": "#ffffff"}}}, "modalProduct":{"contents":{"img": false, "imgWithCarousel": true, "variantTitle": false, "buttonWithQuantity": true, "button": false, "quantity": false}, "styles":{"product":{"@media (min-width: 601px)":{"max-width": "100%", "margin-left": "0px", "margin-bottom": "0px"}}, "button":{"background-color": "#ffcc62", "color": "#000000", ":hover":{"background-color": "#e6b858", "color": "#000000"}, "border-radius": "0px", ":focus":{"background-color": "#e6b858"}, "font-weight": "bold"}}}, "toggle":{"styles":{"toggle":{"background-color": "#ffcc62", ":hover":{"background-color": "#e6b858"}, ":focus":{"background-color": "#e6b858"}, "font-weight": "bold"}, "count":{"color": "#000000", ":hover":{"color": "#000000"}}, "iconPath":{"fill": "#000000"}}}, "productSet":{"styles":{"products":{"@media (min-width: 601px)":{"margin-left": "-20px"}}}}}});});}})();/*]]>*/</script>

	</div>

</div>



<div class="colorWrapper gray">
	<div class="container dp">
	<div class="icon-box-group-section">

	
		<div class="icon-box-group-header">
			
			<h2>
			Your Support Will Make it Possible
			</h2>
			<h3>
			FOR THE ISF TO:
			</h3>

		</div>





		<div class="icon-box-group">
			
			
			<script>

				post_data = [['Enhance the security','of personnel and operations of U.S. organizations in foreign countries'],['Support Crisis Management Preparedness','and emergency evacuation planning by OSAC Constituent Councils.'],['Create Constituent Councils','including Country Councils, Regional Councils and Sector-Specific Working Groups.'],['Sponsor Local/Regional Security Education','including security information exchange initiatives, conferences and workshops between public and private sectors.'],['Provide Logistical and Financial Support','for security training symposia and information exchanges by OSAC Councils.'],['Financially Support OSAC','Constituent Council activities so that government personnel no longer need to solicit private funding or personally fund OSAC activities.'],['Ensure that no one is excluded','No interested representative of a qualified U.S. organization, particularly a nonprofit doing humanitarian work, is excluded from OSAC activities due to financial barriers.'],['Facilitate','OSAC staff travel in support of OSAC activities'],['Foster Collaborative Responses to Terrorist Threats','and incidents, civil disturbances, natural disasters, crime, cyber attacks and other threats to OSAC member organizations.'],['Provided Financial and Administrative Support','that OSAC Constituent Councils and other related organizations need to keep U.S. citizens and organizations safe.']];

			</script>



			<?php

			$icon_order = "iaklmrqptn";
			


			$i=0;
			while ($i<10) {

			if ($i == 9) {
				echo "<div class='icon-box hidden'></div>";
				}

			?>

			<!-- single icon box //-->

			<div class="icon-box">
				
				<div class="icon-box-icon">
					<i><?php echo $icon_order[$i]; ?></i>
				</div>

				<div class="icon-box-title">

					<h3>
					<script>document.write(post_data[<?php echo $i; ?>][0]);</script>
					</h3>

				</div>

				<div class="icon-box-description">
					<p>
					<script>document.write(post_data[<?php echo $i; ?>][1]);</script>
					</p>
				</div>

			</div>


			<?

			if ($i == 9) {
				echo "<div class='icon-box hidden'></div>";
				}


			$i++;
			
			}
			?>


			


		</div>

	</div>
</div>
</div>