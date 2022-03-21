<!doctype html>
<html id="themehere" class="dark">
<head>
	<meta charset="utf-8">
	<meta lang="de">
	<title>Social Media Generator - PHP Version</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="src/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="src/img/gen.png" type="image/x-icon">




</head>
<body>
	<div id="notification"></div>
	<div id="loader" class="loader">
			<div class="loaderspin"></div>
	</div>
	<script>
		var loader = document.getElementById("loader");

		window.addEventListener("load", function(){
				loader.style.display = "none";
				console.log("Loader stopt");
			}
		);
	</script>
	
	<script>
		function setCookie(cvalue) {
  var d = new Date();
  d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = "theme=" + cvalue + ";" + expires + "; path=/";
}
function getCookie(theme) {
  var name = theme + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function checkCookie() {
  var theme = getCookie("theme");
  if (theme == "light") {
  body.className = "light";
  }
  if (theme == "dark") {
  body.className = "dark";
  }  
}
		
	</script>
