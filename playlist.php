<?php
include 'conn.php';
extract($_POST);
session_start();
$cur_u=$_SESSION['user'];
echo $cur_u;
$q="insert into playlist(user_id,video_name,video_link,genre) values('$cur_u','$sname','$slink','$genre')";
mysql_query($q);
$que="insert into music(video_link,video_name,genre) values('$slink','$sname','$genre')";
mysql_query($que);
//mysql_close($conn);
echo"<a href=\"profile.php\">GO to profile page</a>";
?>