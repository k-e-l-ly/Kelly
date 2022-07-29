<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Javascript Objects</title>
	</head>
	<body>
		<p>Example of javascript objects</p>
		<h2>Javascript Object Properties</h2>
		<p>Looping object property values</p>

		<p id="demo"></p>

		<script>
			const person={
				name: "John",
				age: 25,
				city: "New York"
			};

			const myArray = Object.values(person);
			document.getElementById("demo").innerHTML = myArray;

		</script>

	</body>
</html>