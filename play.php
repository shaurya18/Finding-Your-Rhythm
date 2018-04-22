<html>
<head> 

<title>Play music</title>
</head>
<body background="img\projects\photography-guitar-music-wallpaper-2560x1600.jpg">

<?php
include "conn.php";
$link=$_GET['id'];
$sname=$_GET['name'];
$gen=$_GET['gen'];
echo "<center><h3>\"$gen\"</h3></center>";
echo  "<center><h3>\"$link\"</h3></center>";
echo  "<center><h3>\"$sname\"<h3></center>";
$cur_user_id=$_GET['user'];
echo $cur_user_id;
echo $gen;
$a=substr($link,0,24);
$b=substr($link,32);
$link=$a.'embed/'.$b;
$que="update music set views=views+1 where video_name='$sname'";
mysql_query($que);
$que="update history set $gen=$gen+1 where user_id='$cur_user_id'";
mysql_query($que);
echo " <center><iframe width=\"560\" height=\"315\" src='$link' frameborder=\"0\" allowfullscreen></iframe></center>";  
mysql_close($conn);
?>
</body>
</html>