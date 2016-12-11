<head>
</head>
<body>
<?php 


@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("reward points") or die("<p>Unable to connect to database");

mysql_query("SELECT * FROM feedback") or die("unable to enter the details into the database");


$result= mysql_query("SELECT * FROM feedback");

?>


<table border=1>


<?php


while($row=mysql_fetch_row($result))
{
echo "<tr><td>$row[0]<td>"; 

echo "<td>$row[1]<td></tr>";
}
?>

</table>
<h1>

</h1>
</body>
</html>