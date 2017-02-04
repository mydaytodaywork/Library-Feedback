<head>
<title>Feedback</title>
</head>

<style>
	body{
		padding:0;
		margin:0;	
	}
	#submit-feedback{
		width:200px;
		height:40px;
		background-color:#F60;
		border:none;
		color:white;
		border-radius:10px;	
	}
	form{
		margin-top:3%;	
	}
	#logdet{
		float:right;
		font-size:20px;	
	}
	#type{
		height:30px;	
	}
	label{
		margin-left:0px;
	}
	.opt{
		height:30px;
	}
	#feed_detail{
		font-weight:bold;
		font-size:16px;	
	}
	#container{
		margin-left:40px;	
	}
	textarea{
		resize:none;	
	}
	#status{
		font-size:26px;	
	}
	#logout{
		background-color:#09F;
		color:white;
		text-align:center;
		height:32px;
		width:100px;
		padding:5px;
		border-radius:10px;
			
	}
	a{
		text-decoration:none;	
	}
	#logouti:hover{
		text-decoration:none;	
	}
	#previous_feed{
		background-color:#09F;
		color:white;
		text-align:center;
		height:40px;
		float:left;
		margin-left:10px;
		width:100px;
		padding:5px;
		border-radius:10px;
	}
	.allfeed{
		background-color:#09F;
		color:white;
		border-radius:10px;
		padding:10px;
		float:left;
	}
</style>

<script>
	function feed_label(){
		var str=document.getElementById("type").value;
		str=str.toUpperCase(str);
		document.getElementById("feed_detail").innerHTML="FEEDBACK FOR "+str+" :";
	}
</script>


<?php
	session_start();
	include('includes/resubmission.php');
	include('includes/header.php');
	include('includes/headerfiles.php');
	
	include('includes/connection.php');
	
	
	if(isset($_GET['result'])=='Done')
		echo "<div id='status'><center><b>".$_GET['result']."</b></center></div>";
	
	if(isset($_POST['email']) && isset($_POST['password']) && $_POST['login']){
		$email=$_POST['email'];
		$pass=md5($_POST['password']);
		$query="select password,user_type from login where email='".$email."'";
		$result=mysqli_query($connection,$query);
		$row=mysqli_fetch_row($result);
		if($pass!=$row[0]){
			header("location:login.php?error=Wrong Password");
			exit();
		}
		else{
			$_SESSION['feedback_email']=$email;	
			$_SESSION['feedback_user_type']=$row[1];
		}
	}else if(!(isset($_SESSION['feedback_email']))){
		header("location:login.php?error=Please Login");
		exit();
	}
	
	if(isset($_SESSION['feedback_user_type']) && $_SESSION['feedback_user_type']==0){
		header("location:viewfeedbacks.php");	
	}
	include('publicNavBar.php');
?>

<div id="logdet">
<?php 
	if(isset($_SESSION['feedback_username']))
		echo $_SESSION['feedback_username'];
	else if(isset($_SESSION['feedback_email']))
		echo $_SESSION['feedback_email'];
	
	
	echo "<a id='logouti' target='_self' href='logout.php'><div id='logout'>Logout</div></a>"; 
?>
</div>
<div id="container">
<center>
<form target="_self" action="includes/insert.php" method="post">
 		Feedback Type: <select name="type" id="type" onchange="feed_label()">
		<?php
		
			$query="select * from feed_type;";
			$result=mysqli_query($connection,$query);
			while($row=mysqli_fetch_row($result)){
				echo "<option class='opt' value='".$row[0]."'>".$row[0]."</option>";
			}
		
		?> 
    	</select><br/><br/><br/>
    <div id="feed_detail">
    	FEEDBACK FOR ARRANGEMENT OF BOOKS:
    </div>
    <br/><br/>
	
    <textarea style='padding:10px;' rows=13 cols=80 name="feedback"></textarea><br/><br/>
    <input type="submit" id="submit-feedback"/>
    
</form>
</center>
</div>