<?php
include "conn.php";
include "log.php";
session_start();
$cur_user=$_SESSION['user'];
$que="select * from history where user_id=$cur_user";
$ret=mysql_query($que);
if(! $ret )
{
	die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($ret, MYSQL_NUM);
$maxg=max($row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
for($i=1;$i<7;$i++)
{
	if($row[$i]==$maxg)
	{
		$midx=$i;
		break;
	}
}
$secmaxg=0;
for($i=1;$i<7;$i++)
{
	if($row[$i]>$secmaxg&&$row[$i]<$maxg)
	{
		$secmaxg=$row[$i];
		$sidx=$i;
	}
}
$thirdmaxg=0;
for($i=1;$i<7;$i++)
{
	if($row[$i]>=$thirdmaxg&&$row[$i]<$maxg&&$row[$i]<$secmaxg)
	{
		$tidx=$i;
		$thirdmaxg=$row[i];
	}
}
$que="SELECT * FROM sys.columns WHERE object_id = OBJECT_ID('dbo.history')";
$ret=mysql_query($que,$conn);
$row=mysql_fetch_array($ret,MYSQL_NUM);
if(! $retval )
{
	die('Could not get data: ' . mysql_error());
}
$que="select * from music where genre=$row[$midx]";
$ret=mysql_query($que,$conn);
if(! $ret )
{
	die('Could not get data: ' . mysql_error());
}
foreach($row as $element)
{
	echo"$element\n";
}
$que="select * from music where genre=$row[$sidx]";
$ret=mysql_query($que,$conn);
if(! $ret )
{
	die('Could not get data: ' . mysql_error());
}
foreach($row as $element)
{
	echo"$element\n";
}
$que="select * from music where genre=$row[$tidx]";
$ret=mysql_query($que,$conn);
if(! $ret )
{
	die('Could not get data: ' . mysql_error());
}
foreach($row as $element)
{
	echo"$element\n";
}
/*switch case for inidces*/
mysql_close($conn);
?>