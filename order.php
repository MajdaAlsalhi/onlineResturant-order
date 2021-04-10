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

<br><br>

<center>
<div id="ThreeButton">

<?php 
	

echo'<h3> Thank you for ordering</h3>';

 if(isset($_POST["submit"])) {
 if(!empty($_POST["check"])){
	foreach($_POST["check"] as $item){
			
			echo $item . "<br>";	
				} }
 }

?>
<a href="index.html" id="P1" style="text-decoration:none; ">Logout</a>
	
</div>

</center>
</body>
</html>
