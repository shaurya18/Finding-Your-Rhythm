<?php
include "conn.php";
session_start();
$cur_user=$_SESSION['user'];
$que="select * from music order by views";
$ret=mysql_query($que);
for($k=0;$k<10;$k++)
{
	$row=mysql_fetch_array($ret,MYSQL_NUM);
	echo "<a href=\"play.php?id=$row[4]&name=$row[1]&user=$cur_user&gen=$row[3]\">$row[1]</a><br>";
}
mysql_close($conn);

?>