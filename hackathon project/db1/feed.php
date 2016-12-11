<head>
</head>
<body>
<?php 

$username = $_POST['username'];
$feedback=$_POST['feedback'];
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("reward points") or die("<p>Unable to connect to database");

mysql_query("INSERT INTO feedback VALUES('$username','$feedback')") or die("unable to enter the details into the database");
echo " feed back sent successfull";


?>





<?php



?>


<h1>

</h1>
</body>
</html>