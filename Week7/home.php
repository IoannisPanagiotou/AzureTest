<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Hello!</h1>
<?php  echo $_GET["username"];

$sql2="SELECT * FROM users";
$result2=mysqli_query($db,$sql2);
?>
</body>
</html>