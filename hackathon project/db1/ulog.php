<html>
<head>
</head>
<body>
<?php

@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("reward points") or die("<p>Unable to connect to database");

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$username=$_POST['username'];
$password=$_POST['password'];
mysql_query("SELECT FROM registration WHERE username='$username' and password='$password'");
$result=mysql_query("SELECT * FROM registration");
$row=mysql_fetch_array($result);

$count=mysql_num_rows($result);

if($count==1)
{

$_SESSION['login_user']=$username;

header('Location:userpage.html');

}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>


</body>
</html>