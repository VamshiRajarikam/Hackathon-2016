<head>
</head>
<body>
<?php 

$username = $_POST['username'];
$points=$_POST['points'];
$gifts=$_POST['gifts'];
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("reward points") or die("<p>Unable to connect to database");

mysql_query("UPDATE points SET points='$points',gifts='$gifts' WHERE username='$username'") or die("unable to update the details into the database");
echo " details successfully edited";


?>





<?php




?>


<h1>

</h1>
</body>
</html>