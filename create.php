<?php
include("connection.php");

$sql="CREATE DATABASE office";

if(mysqli_query($con,$sql))
{
    echo"created database succesfully";
}

?>