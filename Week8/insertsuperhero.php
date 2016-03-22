<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 22/03/2016
 * Time: 09:40
 */
include("dbconnect.php");
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$superpower=$_POST["superpower"];
$sql = "INSERT INTO superheros(firstName, lastName,mainSuperpower) VALUES ('$firstname','$lastname','$superpower')";
if (mysqli_query($db,$sql)){
} else {
    echo "Error: ".$sql."<br>".mysqli_error($db);
}