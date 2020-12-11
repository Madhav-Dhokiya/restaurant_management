<?php
	session_start();
	if(! isset($_SESSION['admin']))
	{
		header("location:Admin_Login.php");
	}
?>
<html>
	<head>
		<title>ADMIN-PANEL</title>
		<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.nav{
			padding-left: 20px;
			font-size: 20px;
			border: 2px rgb(135,206,235);
			width: 100%;
			margin: 20px auto;
			background-color: rgb(135,206,235);
			height: 6%;
			padding-top: 19px;
			padding-bottom: 12px;
		}
		.menu1{
			text-decoration: none;
			padding-left: 30px; 
			color: rgb(0,0,139);
		}
		.title{
			text-align: center;
			font-size: 40px;
			margin-top: 10px;
			color: rgb(65,105,225);
			text-decoration: underline;
		}
		</style>
	</head>
	<body>
        <div class="title">
            Admin Panel        
   	 	</div>
		<div class="nav">
			<a href="view.php" class="menu1">View Menu</a>
			<a href="admin_logout.php" class="menu1">Logout</a>
			<a href="change_password.php" class="menu1">Change Password</a>
			<a href="admin_table_display.php" class="menu1">Table Bookings</a>
		</div>
	</body>
</html>