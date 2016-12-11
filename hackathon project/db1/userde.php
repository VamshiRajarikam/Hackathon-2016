<html>
<head>
</head>
<body>
<?php 

$username = $_GET['username'];
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("reward points") or die("<p>Unable to connect to database");

mysql_query("SELECT  * FROM registration WHERE username='$username'") or die("unable to view details from the database");
$result=mysql_query("SELECT * FROM points");

?>
<table border=1>
<?php
while($row=mysql_fetch_row($result))
{
echo "<tr><td>$row[0]<td>"; 

echo "<td>$row[1]<td>";
echo "<td>$row[2]<td>";
echo "<td>$row[3]<td></tr>";


}
?>
</table>
<h1>

</h1>
</body>
