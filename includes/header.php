<?php function customError($errno, $errstr) {
  		echo "<b>Error:</b> [$errno] $errstr<br>";
  		echo "Sorry! Something Went Wrong.";
  		die();
	}
	set_error_handler("customError");
?>
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="icon" 
      type="image/jpg" 
      href="images/favicon.jpg">
</head>
<style>
body{
	margin:0;
	padding:0;	
}
#img1{
	height100%;
	width:20%;
	display:inline-block;	
	float:left;
}
#img2{
	height:100px;
	width:100%;
}
#head1{
	margin-top:0%;
	color:black;
}
#hr1{
	border:2px solid black;	
}
</style>
<body>
	<img src="images/header.jpg" id="img2"/>
</body>
</html>