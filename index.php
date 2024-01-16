<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div id="demo">
		<h2>XML HTTP Object</h2>
		<button  type="button" onclick="loadDoc()">click</button>
	</div>

	<script>
		function loadDoc() {
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function(){
				document.getElementById("demo").innerHTML = this.responseText;
			}
			xhttp.open("GET", "info.php");
			xhttp.send()
		}
	</script>
</body>
</html>