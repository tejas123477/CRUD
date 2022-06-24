<?php


include("connection.php");

$sql="INSERT INTO table1 VALUES('tejas rai','hello')";

if(mysqli_query($con,$sql))
{
    echo "value inserted succesfully";
}















?>