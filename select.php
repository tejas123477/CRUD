<?php

include("connection.php");

$sql = "SELECT * FROM table1";
$res = mysqli_query($con,$sql);
echo "<table border = 1px solid black>";
echo "<tr>";
echo "<td>" . "Username" . "</td>";
echo "<td>" . "Password" . "</td>";
echo "</tr>";
if(mysqli_num_rows($res) > 0)
{
echo "<tr>";
while($row = mysqli_fetch_assoc($res))
{
echo "<td>" . $row['user'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
else
{
echo "No rows found!!";
}

?>