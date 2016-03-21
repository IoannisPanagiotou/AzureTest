<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
Where would you like to say hello?
<br>
<ul>
    <li><a href="helloPrinter.php?planet=EARTH">Earth</a></li>
    <li><a href="helloPrinter.php?planet=".<?php $planet=$_GET["planet"] ?>."">Mars</a></li>
    <li><a href="helloPrinter.php?planet=".<?php $planet=$_GET["planet"] ?>."">Uranus</a></li>
</ul>
