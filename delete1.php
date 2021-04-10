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
/* http://www.c-sharpcorner.com/UploadFile/satyapriyanayak/how-to-insert-edit-and-delete-in-php/ */
$sDbHost = 'localhost';
$sDbName = 'onlinerestaurant';
$sDbUser = 'root';
$sDbPwd = '';

$dbConn = mysqli_connect("localhost","root","");				
$db_selected = mysqli_select_db($dbConn, "onlinerestaurant"); 

session_start();

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$w = "DELETE FROM booking WHERE id=$id";
$result=mysqli_query($dbConn,$w);


header("Location: mu.php");
}
else

{
header("Location: mu.php");
}
?>