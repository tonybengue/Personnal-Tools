<!DOCTYPE html>
<html>
<body onload="getLocation()">

<p>Votre localisation va apparaître ci dessous</p>
<div id="demo"></div>

<script>
	const getLocation = () => {
		navigator.geolocation ?
			navigator.geolocation.getCurrentPosition(showPosition) :
			x.innerHTML = "La Géolocalisation n'est pas supportée"
	}
	const showPosition = position => {
		const target = document.getElementById("demo")
		const template = `
			<p>Latitude: ${position.coords.latitude}</p>
			<p>Longitude: ${position.coords.longitude}</p>
		`
		target.innerHTML = template
	}
</script>
</body>
</html>
