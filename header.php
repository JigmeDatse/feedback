<?php

if (!isset($title)) {
	$title="This is the default title";
}

if (!isset($h1)) {
	$h1 = $title;
}

echo "<!doctype html>
<html>
<head>
	<title>$title</title>
</head>
<body>
	<h1>$h1</h1>
";

?>
