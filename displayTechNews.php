<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="id01"></div>

	<script>
	var xmlhttp = new XMLHttpRequest();
	var APIkey = "54ab37c2-0a1b-4d96-9b04-f42c044b8a12";
	var url = "http://content.guardianapis.com/search?section=technology&api-key=" + APIkey;
	
	xmlhttp.onreadystatechange = function() {
	    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	        var technologyJSON = JSON.parse(xmlhttp.responseText);
	        getTechnologyNews(technologyJSON);
	    }
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();

	function getTechnologyNews(technology) {
		document.write(technology.response.results[0].webTitle);
		console.log(technology);
	}
	</script>
</body>
</html>