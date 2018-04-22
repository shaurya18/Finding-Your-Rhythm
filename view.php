<html>
<head> 

<title>view</title>
</head>

<body background="img\projects\photography-guitar-music-wallpaper-2560x1600.jpg">


</body>
</html>
<?php
include 'conn.php';
session_start();
$cur_u=$_SESSION['user'];
$que="select * from playlist where user_id='$cur_u'";
$ret=mysql_query($que);
while($row=mysql_fetch_array($ret,MYSQL_NUM))
{
	echo "<h1><center><a href=\"play.php?id=$row[2]&name=$row[1]&user=$cur_u&gen=$row[3]\">$row[1]</a></h1></center><br>";
}
?>