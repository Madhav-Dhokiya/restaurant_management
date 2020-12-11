<?php
	session_start();
	unset($_SESSION['admin']);
	session_destroy();
	header("Location:Admin_Login.php");
?>