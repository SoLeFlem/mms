<!DOCTYPE html>
<html>
<head>
	<title>Test Php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="main.js"></script>
</head>
<body>

	<div id="box">

	<h1>PHP Test</h1>
    <br>
	<?php
	$notes = [10, 20, 9, 17, 16];
	$eleves = ["jean", "sylvie", "nolan", "ernest", "pascal"];
	for ($i=0; $i < 5; $i++) { 
	    echo $eleves[$i] . " : " . $notes[$i] . "\n";
	}
	?>
	</div>

</body>
</html>