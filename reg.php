



<html>
<head> 

<title>signed</title>
</head>
<body background="img\projects\15140912.jpg">
<?php 
include 'conn.php';
$usr_email = $_POST['email'];//2
$usr_pw = $_POST['pwd'];//1
$usr_tel = $_POST['tel'];//3
$usr_add = $_POST['add']; //4
$query = "INSERT INTO user VALUES('$usr_email','$usr_pw','$usr_tel','$usr_add');";
mysql_query($query);
//$query="insert into history(user_id) values('$usr_email')";
//mysql_query($query);

echo '<br><center><h1>Registration Succesful</center></h1>';

echo "<center><h1><a href=\"fi.php\">Go to home</a></center></h1>";
mysql_close();
?>
</body>
</html>

