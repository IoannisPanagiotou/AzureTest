<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 11/04/2016
 * Time: 09:37
 */
$username = "Yanis";
$password = "mypassword";
if ($username=="username" && $password=="password")
{
    setcookie('access_level','standarduser');
}
header('Location: homepage.php')
?>