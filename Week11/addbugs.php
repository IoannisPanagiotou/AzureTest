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
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
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
    <?
    }
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bugName=$_POST["name"];
    $bugSummary=$_POST["summary"];
    $bugCategory=$_POST["category"];
    $sql="INSERT INTO bugs (bugName, bugSummary, bugCategory) VALUES ('$bugName','$bugSummary','$bugCategory')";
    if (mysql_query($db, $sql)){
    }else{
        echo "error: ".$sql."<br>".mysqli_error($db);
    }
    header("location: showbugs.php");
}
else{
    header("location: index.php");
}?>
</content>
<footer>
    Designed by Ioannis Panagiotou, 2016
</footer>
</body>
</html>
