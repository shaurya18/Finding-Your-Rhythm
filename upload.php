<?php
session_start();
?>
<html>

<head>
<title>upload</title>
</head>

<body background="img\projects\photography-guitar-music-wallpaper-2560x1600.jpg">
<center><h1>Upload Your Song</h1></center>

<br>
<br>
<br>
<br>
<br>
<br>

<center>
<form tag="Create Logon" name ="Myform" action="playlist.php" method="post">
		

 
			song name : <input type="text" name="sname" required>	<br><br>

		
 
			song link: <input type="text" name="slink" required><br><br>


 
			genre : <input type="text" name="genre" required><br><br>


 
       		<input type="submit" value="Submit" ><br>

		
	</form>
<center>

</body>
</html>