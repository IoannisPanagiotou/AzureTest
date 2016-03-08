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
else if ($myage>=16){
    print "You can only buy specs!";
}
else{
    print "I am afraid gou cannot buy anything!";
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
echo "<br>";echo "<br>";
$provisionedActivity=array("Specs","Mugs","Sausage rolls");
$provisionedActivity[1]="Hugs";
unset($provisionedActivity[2]);
foreach ($provisionedActivity as $x){
    print "<p>$x<p>";
}

for ($i = 1; $i < 31; $i++)
{
    if ($i%4==0){
        echo "<p>On the ".$i." of the month ".$provisionedActivity[2]." are available.</p>";
    }
    else if ($i%3==0){
        echo "<p>On the ".$i." of the month ".$provisionedActivity[1]." are available.</p>";
    }
    else if ($i%2==0){
        echo "<p>On the ".$i." of the month ".$provisionedActivity[0]." are available.</p>";
    }
    else {
        echo "<p>On the ".$i." of the month "." no products are available.</p>";
    }
}
echo "<br>";echo "<br>";
$i=1;
$mugCounter=0;
$specCounter=0;
$sausageCounter=0;
while ($mugCounter < 8 && $specCounter < 8 && $sausageCounter < 8)
     {
        $todaysGood = rand(0, 2);
        switch ($todaysGood) {
            case 0:
                $mugCounter = $mugCounter + 1;
                echo "<p>On the " . $i . " of the month mugs are available.</p>";
                break;
            case 1:
                $specCounter = $specCounter + 1;
                echo "<p>On the " . $i . " of the month specs are available.</p>";
                break;
            case 2:
                $sausageCounter = $sausageCounter + 1;
                echo "<p>On the " . $i . " of the month sausage rolls are available.</p>";
                break;
        }
        $i = $i + 1;
    }
echo "No more goods are available this month";
echo "<br>";echo "<br>";
$partial=substr($myage,1,2);
print $partial;
echo "<br>";echo "<br>";
$round=round(M_PI,2);
print $round;
echo "<br>";
print rand(1,5);
echo "<br>";
$favPlayers=array();
array_push($favPlayers,strtoupper("Giovanni")." Silva de Oliveira");
array_push($favPlayers,"Vitor Borba Fereira ". strtoupper("Rivaldo"));
array_push($favPlayers,"Neri ".strtoupper("Castillo"));
foreach ($favPlayers as $z){
    print "<p>$z<p>";
}
print count($favPlayers);
echo "<br>";
sort($favPlayers);
print join(", ",$favPlayers);
echo "<br>";
$entriesCompetition=array("John","George","Michael","Mike","Peter","Helen","Ken","Jeremy");
sort($entriesCompetition);
$todaysWinner = rand(0, count($entriesCompetition)-1);
echo "<p>And the winner iiiiiiis ".strtoupper($entriesCompetition[$todaysWinner]).". Bravo! All specs are yours!</p>";
unset($entriesCompetition[$todaysWinner]);
echo count($entriesCompetition);
$todaysWinner = rand(0,count($entriesCompetition)-1);
echo "<p>Next winner iiiiiiis ".strtoupper($entriesCompetition[$todaysWinner]).". Bravo! All mugs are yours!</p>";
unset($entriesCompetition[$todaysWinner]);
$todaysWinner = rand(0, count($entriesCompetition)-1);
echo "<p>The final winner iiiiiiis ".strtoupper($entriesCompetition[$todaysWinner]).". Bravo! All sausages are yours!</p>";
/*foreach ($entriesCompetition as $z){
    print "<p>$z<p>";
}
print count($entriesCompetition);*/

?>