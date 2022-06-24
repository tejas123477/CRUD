<?php

include("connection.php");
$sql = "CREATE TABLE table1 (user varchar(20), password
varchar(50))";
if(mysqli_query($con,$sql))
{
echo "<h1 align='center'>Table Successfully 
Created!!</h1>";
}
else
{
echo "Table Not Created!!" . mysqli_error($con);
}



















?>