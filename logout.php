<?php
	session_start();
	if(isset($_SESSION['feedback_email'])){
		session_destroy();
	}
	header("location:login.php?message=You have successfully logged out!");
?>