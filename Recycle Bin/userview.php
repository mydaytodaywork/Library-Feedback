<head>
<title>User's Feedback</title>
</head>

<style>
td{
	max-width:200px;	
}
</style>
<?php
	session_start();
	include('includes/header.php');
	include('includes/headerfiles.php');
	include('includes/connection.php');
	include("publicNavBar.php");
	if(!isset($_SESSION['email'])){
		header("login.php");
		exit();	
	}
	
	echo "<center><div class='container'><table class='table table-striped table-bordered'>
    <thead>
      <tr>
        <th>Sl.No</th>
        <th>Feedback Type</th>
		<th>Feedback</th>
		<th>Reply</th>
		<th>DateTime</th>
      </tr>
    </thead><tbody>";
	
	$query="select slno,feedback_type,feed,reply,date_sub from feedback where email='".$_SESSION['email']."' order by date_sub desc";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_row($result)){
		$reply=$row[3];
		echo "<tr>
			<td class='col1'>".$row[0].
			"</td><td class='col2'>".$row[1].
			"</td><td class='col3'>".$row[2].
			"</td><td class='col5'>".$reply.
			"</td><td class='col4'>".$row[4].
			"</td>
		<tr/>";
	}
	echo "</tbody></table></div></center>";
?>