<?php
	session_start();
	include("connection.php");
	if(!(isset($_SESSION['feedback_user'])))
		header("location:../login.php");	
	
	
	if(isset($_POST['feedback'])){
		$mydate=getdate(date("U"));
		$date = date ("Y-m-d H:i:s");
		echo $date;
		$email=$_SESSION['feedback_email'];
		$feedback=$_POST['feedback'];
		$type=$_POST['type'];
		$query="insert into `feedback` (`email`,`feedback_type`,`feed`,`date_sub`) 
		values ('".$email."','".$type."','".$feedback."','".$date."')";
		echo $query;
		$result=mysqli_query($connection,$query);
		header("location:../feedback.php?result=Feedback Successfully Submitted");
	}
?>