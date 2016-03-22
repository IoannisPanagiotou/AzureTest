<html>
<head>
    <meta charset="utf-8">
    <title>Superhero System</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>The Superhero System</h1>
<h2>Create a superhero</h2>
<?php
include("dbconnect.php");
?>
<form action="displaySuperheros.php" method="post">
    <label>First Name</label><input type="text" name="firstname">
    <label>Last Name</label><input type="text" name="lastname">
    <label>Main power</label><input type="text" name="superpower">
    <input type="submit" value="Submit">
</form>

</body>
</html>