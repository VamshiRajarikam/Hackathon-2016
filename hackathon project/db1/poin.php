<?php
 
$username=$_POST['username'];
$points=$_POST['points'];
$duration=$_POST['duration'];
$gifts=$_POST['gifts'];
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("reward points") or die("<p>Unable to connect to database");

mysql_query("INSERT INTO points VALUES('$username','$points','$duration','$gifts')") or die("unable to enter the details into the database ");
echo " sucessfully stored";

?>


<?php


?>

<h1>

</h1>
</body>
</html>