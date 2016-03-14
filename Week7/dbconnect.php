<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 14/03/2016
 * Time: 10:04
 */
define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','b336c6b0794e0b');
define('DB_PASSWORD','2c4fe3e4');
define('DB_DATABASE','IoannisPanagiotou');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);