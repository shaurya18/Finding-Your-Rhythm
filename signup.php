<html>
	<head>
		<title>SIGN UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<script type="text/javascript">
		function validate()
		{
			var mob = document.Myform.tel.value;
			var chk = 1;

			if(mob.length!=10)
			{ 
				alert("Enter valid phone number"); return false;
			}
			else
			{
				for(var i = 0;i<mob.length; ++i)
				{
					if(mob[i]>='0' && mob[i]<='9') chk = 1;
					else 
					{
						alert("Enter valid phone number ");
						return false;
					}
				}
			}
			var p = document.Myform.pwd.value;
			if(p.length<6) 
			{
				alert("Password too small");
				return false;
			}
			else
			{
				var spcnt = 0;
				var digcnt = 0;
				var lowercnt = 0;
				var uppercnt = 0;
				for(var i = 0;i<p.length;++i)
				{
					if(p[i]>='0' && p[i]<='9') digcnt++;
					else if(p[i]>='a' && p[i]<='z') lowercnt ++;
					else if(p[i]>='A' && p[i]<='Z') uppercnt++;
					else spcnt ++;
				}
				if(spcnt == 0 || digcnt == 0 || lowercnt == 0 || uppercnt == 0)
				{ 
					alert("Your password must contain at least a special character,a digit, a lower case character and an Uppercase character ");
				    return false;
				}
			}

			
             

			return true;
		}
		</script>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="#">MODERNO</a></h1>
			
			</header>

			<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>SIGN UP</h2>
					</header>

					<a href="#" class="image fit"><img src="img\projects\d73d2d93-a34c-464b-89aa-fb147f4f25ab.jpg" alt="" /></a>
					
					
	<form tag="Create Logon" onsubmit = "return validate()" name ="Myform" action="reg.php" method="post">
		
			Email : <input type="email" name="email" required>
 
			Password : <input type="password" name="pwd" required>
 
			
 
			Telephone: <input type="text" name="tel" required>
 
			Address : <input type="text" name="add" required>
 
       		<input type="submit" value="Submit" />
		
	</form>
		
		
		
		
		
		
		
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					
					<ul class="copyright">
						<li>	
	<p>&copy; 2015 </p>
                      </li>
			
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>