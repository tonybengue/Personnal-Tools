<!DOCTYPE html>
<html>
<body onload="getLocation()">

<p>Votre localisation va apparaître ci dessous</p>
<p id="demo"></p>

<script>
	var x = document.getElementById("demo");
	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			x.innerHTML = "La Géolocalisation n'est pas supportée";
		}
	}
	function showPosition(position) {
		x.innerHTML = "Latitude: " + position.coords.latitude +
		"<br>Longitude: " + position.coords.longitude;
	}
</script>
</body>
</html>
