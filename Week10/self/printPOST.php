<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 12/04/2016
 * Time: 10:19
 */
$title=$_POST["title"];
$content=$_POST["content"];
$category=$_POST["category"];
echo "<h1>$title</h1>";
echo "<p>$content</p>";
echo "<strong>$category</strong>";
