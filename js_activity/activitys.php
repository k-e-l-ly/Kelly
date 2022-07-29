<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test</title>
	
</head>
<body>
	<script type="text/javascript">
		fetch("flower.json")
		.then(response =>{
			return response.json();
		})
		.then(data => console.log(data));
		
	</script>
	
</body>
</html>