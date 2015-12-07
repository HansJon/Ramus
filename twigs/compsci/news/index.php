<html>
	<head>
		<title>Ramus - Latest News in Technology</title>
	 	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <link rel="icon" type="image/png" href="/Media/Images/Icons/RamusMaterial_1A.png"/>
	    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="../../../../CSS/css.css">
		<!--<link rel="stylesheet" type="text/css" href="../../../../CSS/news.css">-->

		<style type="text/css">
			a {
				color: white;
			}

			.newsBlock {
				height: 350px;
			}

			.title {
				text-align: center;
				color: white;
				border-bottom: 3px solid white;

				margin-top: 20px;
			}

			.PageWrapper {
				
			}
		</style>
	</head>
	<body>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>

		<?php
			include '../../../includes/navbar.php';
		?>
	<div class="PageWrapper">
		<div class="container">
			<div class="row">
				<h1 class="title">The Latest News in Technology</h1>

				<div id="newsWrapper">
					
				</div>
			</div>
		</div>
	</div>

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
			var results = technology.response.results;
			var newsWrapper = $("#newsWrapper");

			for (i = 0; i < technology.response.results.length; i++) {
				console.log(results[i].webTitle);
				var title = "<p class=\"flow-text\">" + results[i].webTitle + "</p>";
				var section = "<p class=\"flow-text\">" + results[i].sectionName + "</p>";
				var date = "<p class=\"flow-text\">" + results[i].webPublicationDate.replace('T', ' ').replace('Z', '') + "</p>";
				var url = "<a class=\"url flow-text\" href=\"" + results[i].webUrl + "\">View story</a>";

				var newsCard = newsWrapper.append(
											"<div class=\"newsBlock col s12 m6 l4\">" + 
												title +
												section +
												date +
												url +
											"</div>"
											);
			}

			//document.write(technology.response.results[0].webTitle);
			console.log(technology);
		}
		</script>
	</body>
</html>