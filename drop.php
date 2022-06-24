<?php

include("connection.php");

$sql="DROP DATABASE employee";

if(mysqli_query($con,$sql))
{
    echo"database dropped";
}
?>