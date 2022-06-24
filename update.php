<?php


include("connection.php");

$sql="UPDATE table1 set password='1234' where user='tejas rai'";

if(mysqli_query($con,$sql))
{
    echo "updated succesfully";
}
?>