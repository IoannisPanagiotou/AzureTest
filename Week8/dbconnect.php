<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 22/03/2016
 * Time: 09:32
 */
$db = new mysqli("ap-cdbr-azure-east-c.cloudapp.net","b336c6b0794e0b","2c4fe3e4","IoannisPanagiotou");
if ($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}