<?php
	if(isset($_POST['download'])){
		include("download.php");
		die();
	}
?><head>
<title>All Feedbacks</title>
</head>

<style>
a:link{
	color:blue;
}
a:hover{
	color:blue;	
}
a:active{
	color:blue;	
}
a:visited{
	color:blue;	
}
td{
	max-width:200px;	
}
#search{
	height:40px;
	border-radius:10px;
	outline:none;
	width:200px;	
}
.opt{
	height:40px;
	font-size:18px;
	line-height:20px;	
}
#search-btn{
	margin-left:20px;
	height:40px;
	width:80px;
	border-radius:10px;
	outline:none;
	background-color:#0CF;;
	border:none;
	color:white;	
}
#form{	
	margin-top:20px;
}
th{
	background-color:#F60;
	color:white;
	text-align:center;	
}
.logout{
	float:right;
	background-color:#09F;
	color:white;
	padding:10px;
	height:40px;
	border-radius:10px;
	width:100px;
	text-align:center;
	font-size:20px;	
}

</style>

<?php
	include('includes/header.php');
	include('includes/headerfiles.php');
	//include('includes/resubmission.php');
	session_start();
	//ob_start();
	
	if(!isset($_SESSION['feedback_user_type'])){
		header("location:login.php");
		exit();	
	}
	else if($_SESSION['feedback_user_type']!=0){
		header("location:feedback.php");
		exit();	
	}
	include("publicNavBar.php");
	include("includes/connection.php");
	
	
	echo "<a href='logout.php' target='_self' class='logout'>Logout</a>";
	if(isset($_GET['id']) && isset($_POST['reply'])){
		$id=$_GET['id'];
		$reply=$_POST['reply'];
		$query="update feedback set reply='".$reply."' where slno=".$id;
		$result=mysqli_query($connection,$query);
		
		include("includes/email.php");
	}
	
	
	
	
	
	?>
    <center>
	<form target='_self' action="viewfeedbacks.php" method="post" id='form'>
        <select name='search' id='search'>
            <?php   
                $query="select * from feed_type;";
                $result=mysqli_query($connection,$query);
                while($row=mysqli_fetch_row($result)){
                    echo "<option class='opt' value='".$row[0]."'>".$row[0]."</option>";
                }
            
            ?>
            <option class="opt" value="all">All</option>;
        </select>        
        <input type="submit" value="Search" name="search-btn" id="search-btn"/>
        <input type="submit" value="Download" name="download" id="search-btn"/>
        
    </form>
    </center>
    <center>
	<?php echo "<table class='table table-striped table-bordered'>
    <thead>
      <tr>
        <th>Sl.No</th>
        <th>Username</th>
        <th>Feedback Type</th>
		<th>Feedback</th>
		<th>Reply</th>
		<th>DateTime</th>
		<th>Remove</th>
      </tr>
    </thead><tbody>";
	
	$query="select * from feedback order by date_sub desc";
	if(isset($_POST['search-btn'])){
		$searchby=$_POST['search'];
		if($searchby!="all")
			$query="select * from feedback where feedback_type='".$searchby."' order by date_sub desc";
	}
	
	
	$result=mysqli_query($connection,$query);
	if(!$result)
		die("<center><b>No results Found</b></center>");
	while($row=mysqli_fetch_row($result)){
		$reply=$row[4];
		if($reply==NULL){
			$reply="<a target='_self' href='reply.php?id=".$row[0]."'>Reply</a>";
		}
		echo "<tr>
			<td class='col1'>".$row[0].
			"</td><td class='col2'>".$row[1].
			"</td><td class='col3'>".$row[2].
			"</td><td class='col4'>".$row[3].
			"</td><td class='col5'>".$reply.
			"</td><td class='col5'>".$row[5].
			"</td><td class='rmv'><a  target='_self' href='reply.php?rmv=1&id=".$row[0]."'>Remove</a></td>
		<tr/>";
	}
	echo "</tbody></table>";
?>
</center>