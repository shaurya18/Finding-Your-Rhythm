<?php 
include 'conn.php';
$usr_email = $_POST['mail'];//2
$usr_name = $_POST['name'];//1
$usr_mes = $_POST['message'];//3

$query = "INSERT INTO feedback VALUES('$usr_email','$usr_name','$usr_mes');";

mysql_query($query);

echo '<br>Submitted Succesfully';
echo "<a href=\"fi.php\">Go to home</a>";
mysql_close();
?>