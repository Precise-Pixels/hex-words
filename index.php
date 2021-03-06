<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="description" content="A collection of user submitted hexadecimal colours that also resemble words">
	<meta name="author" content="Precise Pixels">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Hex Words</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Atomic+Age' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id="mainWrapper">

		<h1>HEX WORDS</h1>
		<h2>A collection of user submitted hexadecimal colours that also resemble words.</h2>

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
				<p id="submityourown">Submit your own</p>
				<input type="text" id="hex_input" class="hex spin" value="#EEEEEE"/>
				<p class="author"><input type="text" id="author_input" placeholder="ENTER YOUR NAME"/></p>
				<input type="submit" id="submit" value="Submit"/>
			</div>
		</div>	
	</div>

<!-- Footer -->
<div id="footer">
	<span id="copyright">&copy; <a href="http://precisepixels.co.uk/" target="_blank">PrecisePixels</a> 2013</span>
	<span id="github"><a href="https://github.com/Precise-Pixels/hex-words/" target="_blank">GitHub</a></span>
</div>
<!-- Footer End -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>