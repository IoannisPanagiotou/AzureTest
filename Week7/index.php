<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 14/03/2016
 * Time: 10:24
 */
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" /><br><br>
        <input type="submit" name="submit" value="login" />
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
</div>
</body>
</html>