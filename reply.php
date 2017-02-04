<head>
<title>Reply</title>
</head>
<style>
textarea{
	resize:none;	
}
form{
	margin-left:6%;	
}
#submit{
	width:200px;
	height:40px;
	background-color:#F60;
	font-size:22px;
	border-radius:5px;
	border:none;
}
th{
	background-color:#F60;
	color:white;
	text-align:center;	
}
</style>
<?php
	session_start();
	ob_start();
	include("includes/header.php");
	include("includes/headerfiles.php");
	include("includes/connection.php");
	include("publicNavBar.php");
	if(!isset($_SESSION['feedback_user_type'])){
		header("location:login.php");	
	}
	else if($_SESSION['feedback_user_type']!=0){
		header("location:feedback.php");	
	}
	

	if(!isset($_GET['id'])){
		header("location:viewfeedbacks.php");
	}
	else if(isset($_GET['rmv']) && $_GET['rmv']==1 && $_GET['id']){
		$id=$_GET['id'];
		$query="delete from feedback where slno=".$id;
		$result=mysqli_query($connection,$query);
		header("location:viewfeedbacks.php");	
	}
	$id=$_GET['id'];
	
	echo "<table class='table table-bordered table-striped'>
    <thead>
      <tr>
        <th>Sl.No</th>
        <th>Username</th>
        <th>Feedback Type</th>
		<th>Feedback</th>
		<th>DateTime</th>
      </tr>
    </thead><tbody>";
	$query="select * from feedback where slno=$id;";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_row($result)){
		echo "<tr>
			<td class='col1'>".$row[0].
			"</td><td class='col2'>".$row[1].
			"</td><td class='col3'>".$row[2].
			"</td><td class='col4'>".$row[3].
			"</td><td class='col5'>".$row[5]."</td>
		<tr/>";
	}

	echo "</tbody></table>";
	$url="viewfeedbacks.php?id=".$id;
	echo "<center><form target='_self' method='post' action='".$url."'>
	<br/><br/><h2>Reply:</h2>
	<br/><br/><textarea rows='10' style='padding:10px;' cols='80' name='reply'></textarea><br/><br/>
	<input id='submit' type='submit' value='Reply'/>
	</form></center>";
?>