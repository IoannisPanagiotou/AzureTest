<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 25/04/2016
 * Time: 09:33
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BugTracker</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
<header>
    <img id="logo" src="logo.png">
    <h1>BugTracker</h1>
    <h2>Keeping track of all the pesky little bugs</h2>
</header>
<nav>
    <ul>
        <li><a href="showbugs.html">All Bug Items</a></li>
        <li><a href="showbugs.html">Android Bugs</a></li>
        <li><a href="showbugs.html">iOS Bugs</a></li>
        <li><a href="showbugs.html">Windows Bugs</a></li>
        <li><a href="addbugs.html">Insert Bug</a></li>
    </ul>
</nav>
<content id="con">
    <form>
        Bug Name <input type="text" name="name" required/><br>
        Bug Summary <textarea name="summary" required></textarea><br>
        Bug Category
        <select name="category" required>
            <option value="andr">Android</option>
            <option value="ios">iOS</option>
            <option value="win">Windows</option>
        </select>
        <br>
        <input type="submit" value="Submit" />
    </form>
</content>
<footer>
    Designed by Ioannis Panagiotou, 2016
</footer>
</body>
</html>
