<html>
<head> 

<title>logged</title>
</head>
<body background="img\projects\15140912.jpg">
<?php
include'conn.php';
session_start();
$cur_usr = $_POST['Email'];//username entered from form
$_SESSION['user']=$cur_usr;
$pw = $_POST['Password'];//password entered from form
$chk = 0;
$query = "SELECT email,password FROM user";//REPLACE TABLE WITH TABLE NAME IN DATABASE
if($source = mysql_query($query)){
	while($row = mysql_fetch_assoc($source)){
		if($row['email']==$cur_usr && $row['password']==$pw){
			$chk = 1;
			break;
		}
	}
}
//echo "$chk";
if($chk==1)
{
	echo "<br>.<br>.<br>.<br>";
	echo"<h1><center><a href=\"profile.php\">Go to your profile</a></center></h1>";
}
else
{
	echo "<br>.<br>.<br>.<br>";
	echo "<h1><center>Invalid username or password<br></center></h1>";
	echo"<h1><center><a href=\"login.php\">Login again</a></center></h1>";
	
}
mysql_close();
?>

</body>
</html>