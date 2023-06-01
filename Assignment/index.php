<?php session_start(); ?>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="header">
		Welcome to my page!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("dbconn.php");					
		$result = mysqli_query($conn, "SELECT * FROM login");
	?>
				
		<p>Welcome <?php echo $_SESSION['name'] ?>!<p> <button><a href='logout.php'>Logout</a></button><br/>
		<br/>
		<button><a href='main.php'>View and Add Clients</a></button>
		<br/><br/>
	<?php	
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<button><a href='login.php'>Login</a></button>  <button><a href='registration.php'>Register</a></button>";
	}
	?>
</body>
</html>