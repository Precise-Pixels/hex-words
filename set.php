<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="Precise Pixels">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Hex Words</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<h1>Hex Words</h1>

	<?php
		include("db.php");

		$hex    = 'CCCCCC';
		$author = 'Not Jacob';

		$STH = $DBH->prepare("INSERT INTO hexwords (hex, author) value (:hex, :author)");
		$STH->bindParam(':hex', $hex);
		$STH->bindParam(':author', $author);
		$STH->execute();
	?>
</body>
</html>