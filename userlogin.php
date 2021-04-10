<!DOCTYPE >
<html >

<head>
 <link rel="stylesheet" href="style.css">

<link rel="stylesheet" type="text/css" href="myStyle.css">


</head>

<body class="jj">

<div id="header" border="3px">
 <center>
<img src="logo2.gif" id="logo" width="200px">

</center>
  
	
</div>
<header>

<nav >
<ul id="nav">
<li><a class="blue"  href="index.html"> HOME </a></li>
<li><a class="blue"  href="newUserPage.php">SIGN UP </a></li>
<li><a class="blue"   href="logadmin.html"> ADMIN </a></li>
<li><a class="blue"  href="userlogin.html"> USER LOGIN </a></li>

</ul>
</nav>

</header>

<br><br><br><br>

<center>
<div id="ThreeButton">


<?php
			
			
$con = mysqli_connect("localhost","root","");
if(!$con){ 
die("Sorry, we can not complete your registration process.<br> Please try again later.");
}
				
$db_selected = mysqli_select_db($con, "onlinerestaurant"); 

session_start();
$username = htmlentities($_POST['username']);
$password = htmlentities($_POST['password']);

$sql = "SELECT username FROM users WHERE username = '$username' AND password = '$password'";
$rs=mysqli_query($con,$sql);

if($rs === FALSE) { 
die("error".mysql_error()); 
}

$row = mysqli_fetch_array($rs,MYSQLI_ASSOC);
$username = $row['username'];

$numrow = mysqli_num_rows($rs);
if($numrow == 1) {
 $_SESSION['login_user'] = $username;
$_SESSION["logged"] = true; 
header("location: userpage.php");
    			
  } else {
$_SESSION["logged"] = false; 
			
echo "<script> alert('Your Login Name or Password is invalid, try again please'); window.history.back(); </script>";
			
 }
			
?>
			
</div>
</center>
</body>

</html>