<?php
include("dbconnect.php");
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
        <li><a href="showbugs.php">All Bug Items</a></li>
        <li><a href="showbugs.php">Android Bugs</a></li>
        <li><a href="showbugs.php">iOS Bugs</a></li>
        <li><a href="showbugs.php">Windows Bugs</a></li>
        <li><a href="addbugs.php">Insert Bug</a></li>
    </ul>
</nav>
<content id="con">
    <ul>
    <?
        $sql_query = "select * from bugs";
        $result = $db->query($sql_query);
        while ($row = $result->fetch_array())
        {
            $bugName=$row["name"];
            $bugSummary=$row["summary"];
            $bugCategory=$row["category"];
            echo "<li>{$bugName} {$bugCategory} {$bugSummary}</li>";
        }
    ?>
    </ul>
        <br>
</content>
<footer>
Designed by Ioannis Panagiotou, 2016
</footer>
</body>
</html>