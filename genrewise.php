<?php
include "conn.php";
$g=$_GET['gen'];
session_start();
$cur_user=$_SESSION['user'];
echo $g;
$que="select * from music where genre=\"$g\" order by rand()";
$ret=mysql_query($que);
$k=1;
$row=mysql_fetch_array($ret,MYSQL_NUM);
while($k <20)
{	
	echo $k;
	$k++;
	echo "<a href=\"play.php?id=$row[4]&name=$row[1]&user=$cur_user&gen=$row[3]\">$row[1]</a><br>";
	$row=mysql_fetch_array($ret,MYSQL_NUM);
}//while()problem skipping evens
mysql_close($conn);
?>