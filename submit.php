<?php
	$hex = $_GET['hex'];
	$author = $_GET['author'];

	if (preg_match("/^\#?[A-Fa-f0-9]{3}([A-Fa-f0-9]{3})?$/", $hex)) {
		$hexNoHash = substr($hex, 1);

		include("db.php");

		$STH = $DBH->prepare("INSERT INTO hexwords (hex, author) value (:hex, :author)");
		$STH->bindParam(':hex', $hexNoHash);
		$STH->bindParam(':author', $author);
		$STH->execute();
	} else {
		return false;
	}