<?php

// You'll likely pass the data string from a query, etc - this is just a very basic example to show how it works
$data = '<?xml version="1.0" encoding="utf-8"?>
<markers>
	<marker name="Chipotle Minneapolis" lat="44.947464" lng="-93.320826" category="Restaurant" address="3040 Excelsior Blvd" address2="" city="Minneapolis" state="MN" postal="55416" country="US" phone="612-922-6662" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="" />
	<marker name="Chipotle St. Louis Park" lat="44.930810" lng="-93.347877" category="Restaurant" address="5480 Excelsior Blvd." address2="" city="St. Louis Park" state="MN" postal="55416" country="US" phone="952-922-1970" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering " />
	<marker name="Chipotle Minneapolis" lat="44.9553438" lng="-93.29719699999998" category="Restaurant, Bar" address="2600 Hennepin Ave." address2="" city="Minneapolis" state="MN" postal="55404" country="US" phone="612-377-6035" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="true" features="Online Ordering, Fresh Guacamole" />
	<marker name="Chipotle Golden Valley" lat="44.983935" lng="-93.380542" category="Restaurant" address="515 Winnetka Ave. N" address2="" city="Golden Valley" state="MN" postal="55427" country="US" phone="763-544-2530" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering" />
	<marker name="Chipotle Hopkins" lat="44.924363" lng="-93.410158" category="Cafe" address="786 Mainstreet" address2="" city="Hopkins" state="MN" postal="55343" country="US" phone="952-935-0044" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Margaritas" />
	<marker name="Chipotle Minneapolis" lat="44.973557" lng="-93.275111" category="Restaurant" address="1040 Nicollet Ave" address2="" city="Minneapolis" state="MN" postal="55403" country="US" phone="612-659-7955" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering, Margaritas" />
	<marker name="Chipotle Minneapolis" lat="44.97774" lng="-93.270909" category="Restaurant, Cafe" address="50 South 6th" address2="" city="Minneapolis" state="MN" postal="55402" country="US" phone="612-333-0434" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Fresh Guacamole" />
	<marker name="Chipotle Edina" lat="44.879826" lng="-93.321280" category="Restaurant" address="6801 York Avenue South" address2="" city="Edina" state="MN" postal="55435" country="US" phone="952-926-6651" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering, Fresh Guacamole" />
	<marker name="Chipotle Minnetonka" lat="44.970495" lng="-93.437430" category="Restaurant" address="12509 Wayzata Blvd" address2="" city="Minnetonka" state="MN" postal="55305" country="US" phone="952-252-4900" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Margaritas" />
	<marker name="Chipotle Minneapolis" lat="44.972808" lng="-93.247153" category="Restaurant, Coffee" address="229 Cedar Ave S" address2="" city="Minneapolis" state="MN" postal="55454" country="US" phone="612-659-7830" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="" />
	<marker name="Chipotle St. Paul" lat="44.945127" lng="-93.095368" category="Restaurant, Coffee" address="29 5th St West" address2="" city="St. Paul" state="MN" postal="55102" country="US" phone="651-291-5411" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Fresh Guacamole" />
</markers>';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Map Example - Raw Data</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/storelocator.css" />
</head>

<body>

<div class="bh-sl-container">
	<div id="page-header">
		<h1>Using Chipotle as an Example</h1>
		<p>I used locations around Minneapolis and the southwest suburbs. So, for example, Edina, Plymouth, Eden Prarie, etc. would be good for testing the functionality.
			You can use just the city as the address - ex: Edina, MN.</p>
	</div>

	<div class="bh-sl-form-container">
		<form id="bh-sl-user-location" method="post" action="#">
			<div class="form-input">
				<label for="bh-sl-address">Enter Address or Zip Code:</label>
				<input type="text" id="bh-sl-address" name="bh-sl-address" />
			</div>

			<button id="bh-sl-submit" type="submit">Submit</button>
		</form>
	</div>

	<div id="map-container" class="bh-sl-map-container">
		<div class="bh-sl-loc-list">
			<ul class="list"></ul>
		</div>
		<div id="bh-sl-map" class="bh-sl-map"></div>
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="assets/js/libs/handlebars.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/js/plugins/storeLocator/jquery.storelocator.js"></script>
<script>
	$(function() {
		$('#map-container').storeLocator({
			'dataRaw': <?php echo json_encode($data); ?>
		});
	});
</script>

</body>
</html>