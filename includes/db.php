<?php

ob_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'osama');
define('DB_PASS', 'anewpassword');
define('DB_NAME', 'cms');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection)
{
    die ("Connection failed " . mysqli_error());
}


?>