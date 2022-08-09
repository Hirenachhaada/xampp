<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_sample_db_3";
$con=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
if(!$con)
{
    die("failed to connect");
}?>
