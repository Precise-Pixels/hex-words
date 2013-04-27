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

		# creating the statement
		$STH = $DBH->query('SELECT hex, author from hexwords');

		# setting the fetch mode
		$STH->setFetchMode(PDO::FETCH_OBJ);

		# showing the results
		while($row = $STH->fetch()): ?>
		<div class="item" style="background: #<?= $row->hex; ?>">
			<div class="item_inner">
				<input type="text" value="#<?= $row->hex; ?>" class="hex"/>
				<p class="author">by <?= $row->author; ?></p>
				<p class="copy">Ctrl+C/Cmd+C to copy</p>
			</div>
		</div>
	<?php endwhile; ?>

	<div class="item new">
		<div class="item_inner">
			<input type="text" name="hex_input" value="#FFFFFF" class="hex"/>
			<p class="author">by <input type="text" name="author_input" placeholder="YOUR NAME"/></p>
			<p>Submit your own</p>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>