<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Hello!</h1>
<?php  //echo $_GET["username"];
include ("dbconnect.php");
echo "<br>";
$sql2="SELECT username FROM users";
$result2=mysqli_query($db,$sql2);
while($row = $result2->fetch_array()) {
    $users=$row['username'];
    echo $users;
}
?>
</body>
</html>