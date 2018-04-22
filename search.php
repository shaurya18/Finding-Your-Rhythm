<?php
include 'conn.php';
extract($_POST);
session_start();
$cur_user=$_SESSION['user'];
//echo $s;
//$row;
if($choice=='by name')
{
	$que="select * from music where video_name like '%$s%'";
	$ret=mysql_query($que);
	$row=mysql_fetch_array($ret,MYSQL_NUM);
	if($row)
	{
		while($row)
		{
			echo "<a href=\"play.php?id=$row[4]&name=$row[1]&user=$cur_user&gen=$row[3]\">$row[1]</a><br>";
			$row=mysql_fetch_array($ret,MYSQL_NUM);
		}
	}
	else{
		echo "<br><br>No search results<br>";
	}
}
else
{
	$que="select * from music where artists like '%$s%'";
	$ret=mysql_query($que);
	$row=mysql_fetch_array($ret,MYSQL_NUM);
if($row)
{	
	while($row)
	{
		echo "<a href=\"play.php?id=$row[4]&name=$row[1]&user=$cur_user&gen=$row[3]\">$row[1]</a><br>";
		$row=mysql_fetch_array($ret,MYSQL_NUM);
	}
}	
	else{
		echo "<br><br>No search results<br>";
	}
}
?>