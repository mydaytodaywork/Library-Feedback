<head>
<title>Login</title>
</head>
<style>
body{
	margin:0;
	padding:0;	
}
.inp{
	height:50px;
	width:300px;	
	border-radius:10px;
	outline:none;
	border:none;
	padding:2%;
	font-size:14px;
}
form{
	margin-top:3%;
	width:400px;
	height:300px;
	background-color:#CCC;	
}
#user{
	margin-top:10%;	
}
#pass{
	margin-top:3%;	
}
#login{
	margin-top:4%;
	background-color:#F90;	
}
</style>

<body>
<?php
	session_start();
	include('includes/header.php');
	
	
	if(isset($_SESSION['feedback_email'])){
		header("location:feedback.php");
		exit();	
	}
	include('publicNavBar.php');
?>
<center>
<h3><u>ADMIN LOGIN</u></h3>
<form target="_self" action="feedback.php"  method="post">
    <input id="user" type="email" name="email" class="inp" placeholder="Email"/>
    <br/>
    <input id="pass" type="password" name="password" class="inp" placeholder="Password" />
    <br/>
    <input type="submit" class="inp" value="Login" name='login' id="login">
    
</form>
</center>
</body>