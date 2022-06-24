<?php

$user='root';
$pass='';
$db='employee';

$con=mysqli_connect('localhost',$user,$pass,$db) or 
die("connection failed".mysqli_connect_error());

echo "successful";










?>