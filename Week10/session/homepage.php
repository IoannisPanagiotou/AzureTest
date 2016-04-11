<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 11/04/2016
 * Time: 09:41
 */
session_start();
$accesslevel = $_SESSION['access_level_session'];
displayAccessLevelInformation($accesslevel);
function displayAccessLevelInformation($accesslevel) {
    if ($accesslevel == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($accesslevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

?>