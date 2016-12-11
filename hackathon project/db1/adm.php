<html>
<head>
</head>
<body>
<?php

$username=$_GET['username'];
$password=$_GET['password'];
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("reward points") or die("<p>Unable to connect to database");

mysql_query("SELECT `username`, `password` FROM `admin` WHERE" username="+name+"and password="+password+") or die("username or password is incorrect");

?>
<?php
header('Location: Adminpage.html');
?>
</body>
</html>