<html>
<head>
    <meta charset="utf-8">
    <title>Superhero System</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>The Superhero System</h1>
<h2>Display all superheroes</h2>
<?php  //echo $_GET["username"];
include ("dbconnect.php");
echo "<br>";
$sql="SELECT * FROM superheros";
$result=mysqli_query($db,$sql);
while($row = $result->fetch_array()) {
    $firstname=$row['firstName'];
    $lastname=$row['lastName'];
    $superpower=$row['mainSuperpower'];
    echo "<p>" .$firstname."  ".$lastname. "  ".$superpower."</p>";
}
?>


</body>
</html>