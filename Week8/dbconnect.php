<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 22/03/2016
 * Time: 09:32
 */
$db = new mysqli("","","","");
if ($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}