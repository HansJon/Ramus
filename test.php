<!DOCTYPE html>
<html>
<head>
	<title>TEST SITE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" type="image/png" href="/Media/Images/Icons/RamusMaterial_1A.png"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://code.jquery.com/jquery-2.1.4.min.js">
	<link rel="stylesheet" href="CSS/css.css" media="screen" charset="utf-8">

	<!--Put the following in the <head>-->
	<script>
		$(document).ready(function() {
			$.ajax({
				type: "POST",
				url: "process.php",
				data: {action:"showroom"},
				dataType: 'application/json',
				success: function(data) {
					console.log(data);
				}
			});
		});
	</script>
</head>
<body>
<form>
	<input type="text" value="A" name="X">

	<input type="submit">
</form>

<div id="content"></div>
</body>
</html>