<?php
session_start();
$cur_user=$_SESSION['user'];
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PROFILE</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="header">
	<div id="logo">
		<h1><a href="#">FINDING YOUR RHYTHM</a> </h1>
	</div>

	<div id="menu">
		<ul>
			<li><a href="popular.php?user=">Trending </a></li>
			<li><a href="generic.php">About us </a></li>
			<li><a href="fi.php#contact">contact</a></li>
			<li><a href="upload.php">Upload</a></li>
		<li><a href="view.php">View_Playlist</a></li>	
	<li><a href="fi.php">Signout</a></li>
		</ul>
	</div>
</div>

	<h3><p align=center >   Welcome<?php echo "   $cur_user"; ?> </p></h3>
<!-- start page -->
<div id="page">
	<!-- start sidebar1 -->
	<div id="sidebar1" class="sidebar">
		<ul>
			<li id="search">
				<h2>Search</h2>
				
				
				<form id="searchform" method="post" action="search.php">
					<div>
						<input type="text" name="s" id="s" size="15" />
						<br />
						
					  <input type="radio" name="choice" value="by name" checked>By Name
                       <br>
					   <br>
                       <input type="radio" name="choice" value="by artists">By Artists
                        <BR>
						<br>
                           <input  type="submit" name="submit" value="Search" />
					</div>
				</form>



				</li>
			
			<li id="categories-1">
				<h2> Genre Categories</h2>
				<ul>
					
					<li><a href="genrewise.php?gen=rock" title="View all posts filed under ROCK">ROCK</a>  </li>
					<li><a href="genrewise.php?gen=pop" title="View all posts filed under POP">POP</a> </li>
					<li><a href="genrewise.php?gen=country" title="View all posts filed under COUNTRY">COUNTRY</a> </li>
		            <li><a href="genrewise.php?gen=heavymetal" title="View all posts filed under HEAVY METAL">HEAVY METAL</a>  </li>
					<li><a href="genrewise.php?gen=hiphop" title="View all posts filed under HIPHOP">HIPHOP</a></li>
				</ul>
			</li>
			
		</ul>
	</div>
	
	
	
	<!-- end sidebar1 -->
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"><a href="#" rel="bookmark" title="Recommended Songs">Recommended Songs</a></h1>
			<div class="list-group">
			<br>
			<?php
			include "conn.php";


$que="select * from history where user_id='$cur_user'";
$ret=mysql_query($que);
$row = mysql_fetch_array($ret, MYSQL_NUM);
$maxg=max($row[1],$row[2],$row[3],$row[4],$row[5]);
for($i=1;$i<6;$i++)
{
	if($row[$i]==$maxg)
	{
		$midx=$i;
		break;
	}
}
$secmaxg=0;
$sidx=0;
for($i=1;$i<6;$i++)
{
	if($row[$i]>=$secmaxg&&$row[$i]<=$maxg&&$i!=$midx)
	{
		$secmaxg=$row[$i];
		$sidx=$i;
	}
}
$tidx;
$thirdmaxg=0;
for($i=1;$i<6;$i++)
{
	if($row[$i]>=$thirdmaxg&&$row[$i]<=$maxg&&$row[$i]<=$secmaxg&&$i!=$midx&&$i!=$sidx)
	{
		$tidx=$i;
		$thirdmaxg=$row[$i];
	}
}
echo $midx.$sidx.$tidx;
switch($midx)
{
	case 1:
	$que="select * from music where genre='rock' order by views";break;
	case 2:
	$que="select * from music where genre='pop' order by views";break;
	case 3:
	$que="select * from music where genre='hiphop' order by views";break;
	case 4:
	$que="select * from music where genre='heavymetal' order by views";break;
	case 5:
	$que="select * from music where genre='country' order by views";break;
}
$ret=mysql_query($que);
for($i=0;$i<5;$i++)
{
	$row=mysql_fetch_array($ret,MYSQL_NUM);
	echo "<a href=\"play.php?id=$row[4]&name=$row[1]&user=$cur_user&gen=$row[3]\">$row[1]</a><br>";
    echo " by: ".$row[2];
	echo '<br><br>';
}
switch($sidx)
{
	case 1:
	$que="select * from music where genre='rock' order by views";break;
	case 2:
	$que="select * from music where genre='pop' order by views";break;
	case 3:
	$que="select * from music where genre='hiphop' order by views";break;
	case 4:
	$que="select * from music where genre='heavymetal' order by views";break;
	case 5:
	$que="select * from music where genre='country' order by views";break;
}
$ret=mysql_query($que);
for($i=0;$i<2;$i++)
{
	$row=mysql_fetch_array($ret,MYSQL_NUM);
	echo "<a href=\"play.php?id=$row[4]&name=$row[1]&user=$cur_user&gen=$row[3]\">$row[1]</a><br>";
	echo " by: ".$row[2];
echo '<br><br>';
}
switch($tidx)
{
	case 1:
	$que="select * from music where genre='rock' order by views";break;
	case 2:
	$que="select * from music where genre='pop' order by views";break;
	case 3:
	$que="select * from music where genre='hiphop' order by views";break;
	case 4:
	$que="select * from music where genre='heavymetal' order by views";break;
	case 5:
	$que="select * from music where genre='country' order by views";break;
}
$ret=mysql_query($que);
for($i=0;$i<1;$i++)
{
	$row=mysql_fetch_array($ret,MYSQL_NUM);
	echo "<a href=\"play.php?id=$row[4]&name=$row[1]&user=$cur_user&gen=$row[3]\">$row[1]</a><br>";
	echo " by: ".$row[2];
	echo '<br><br>';
}
   //echo "<a href=\"play.php?id=$row[4]&name=$row[1]&user=$cur_user&gen=$row[3]\">$row[1]</a><br> class=\"list-group-item\">$row[1]</a><br><br>";
   //echo"haha";
    //echo"<p class=\"list-group-item active\">$row[2]</p><br><br>";
	
	 //echo "<p class=\"list-group-item active\">$row[3]</p><br><br>";
  ?>
  
</div>
			</div>
		</div>
	</div>
	<!-- end content -->
	
	
	
	
	
	

	<!-- end sidebar2 -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->


<div id="footer">
	
</div>
</body>
</html>
