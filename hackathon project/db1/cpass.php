<head>
</head>
<body>
<?php 
$username=$_POST['username'];
$password = $_POST['password'];
$newpassword=$_POST['newpassword'];
$password=$newpassword;
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("reward points") or die("<p>Unable to connect to database");

mysql_query("UPDATE registration SET  password='$newpassword' WHERE username='$username'") or die("unable to enter the details into the database");
echo " your password changed successfully";


?>





<?php




?>


<h1>

</h1>
</body>
</html>