<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 07/03/2016
 * Time: 09:36
 */

echo "Hello world!";
echo "<br>";
echo 5*7;
$myname="Yanis";
$name="Ken";
$myage=26;
echo "My name is ".$myname." and I am ".$myage;

echo "<br>";
if ($name==$myname){
    print "You are the number one!";
}
else {
    print"Go home!";
}
echo "<br>";
if ($myage>=21){
    print "You can buy specs, mugs and sausage rolls!";
}
else if($myage>=18){
    print"You can buy both specs and mugs!";
}
else{
    print "You can only buy specs!";
}
echo "<br>";
$wantedgood="mugs";
switch($wantedgood){
    case "specs":
        echo "You have to be 16 to buy specs";
        break;
    case "mugs":
        echo "You have to be 18 to buy mugs";
        break;
    case "sausage rolls":
        echo "You have to be 21 to buy sausage rolls";
        break;
}
echo "<br>";
$provisionedActivities=array("Specs","Drugs","Rock and Roll");
foreach ($provisionedActivities as $x){
    print "<p>$x<p>";
}

?>