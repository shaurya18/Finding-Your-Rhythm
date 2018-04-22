<?php
$hostname = "localhost";
$username = "root";
$password = "";
$conn= mysql_connect($hostname, $username, $password) ;
if (!$conn){ die('Could not connect: '. mysql_error());}
echo 'Connected successfully';
mysql_select_db("beats",$conn);

?>