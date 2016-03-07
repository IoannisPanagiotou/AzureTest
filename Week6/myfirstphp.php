<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 07/03/2016
 * Time: 09:36
 */

echo "Hello world!";
echo 5*7;
$myname="Yanis";
$name="Ken";
$myage=26;
echo "My name is ".$myname." and I am ".$myage;
echo "\n";
if ($name==$myname){
    print "You are the number one!";
}
else {
    print"Go home!";
}

if ($myage>=16){
    print "You can only buy specs!";
}
else if($myage>=18){
    print"You can buy both specs and mugs!";
}
else{
    print "You can buy specs mugs and sausage rolls!";
}

?>