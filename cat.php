<?php
// This whole thing is a hack, I don't even know PHP
// I'm just too lazy to switch to HTTPS on the microcontroller
// running the cat light shit and just use JS
if ($_POST["color"] != "") {
	$safe_color = urlencode($_POST["color"]);
	$url = "http://cat.ogdog.live:42069/colorSet?color={$safe_color}";
	$new_color = file_get_contents($url);
} else {
	$url = "http://cat.ogdog.live:42069/color";
	$new_color = file_get_contents($url);
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>cat light</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<link rel="icon" type="image/png" href="ogdog.png">
<style>
button {
	margin: 0;
	margin-right: 1em;
	box-shadow: 3px 3px gray;
	margin-top: 1em;
	text-align: left;
}
div#color {
	width: 200px;
	height: 200px;
	margin: 0 auto;
	margin-top: 2em;
	background-color: teal;
	box-shadow: 1em 1em white;
}
p {
	font-size: 16px;
	margin-bottom: 1em;
}

#color {
	width: 5.4em;
	height: 4em;
	border: none;
	margin-bottom: 1em;
}

#submit-button {
	border-radius: 5px;
	border-color: white;
	cursor: pointer;
}
</style>
</head>
<body>
	<!-- kinda dumb but it works i guess -->
	<table id="title">
		<tr>
			<td><img id="ogdog" src="cat.png" alt="cat light drawing"></td>
			<!-- very dumb but it works -->
			<td><h1 id="cat-light-text">cat light</h1></td>
		</tr>
	</table>

	<p>I never use my cat light, so I hooked it up to the internet.</p>

	<form action="cat.php" method="post"> 
		<input id="color" type="color" name="color" value="<?php echo $new_color ?>">
		<br>
		<input id="submit-button" type="submit" value="Set color">
	</form>
</body>
</html>
