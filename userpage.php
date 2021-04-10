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
<br><br>
<center>
<?php
		
session_start();
		
if($_SESSION['logged'] == true){ //from http://stackoverflow.com/questions/20654848/html-php-display-username-after-success-login /
}

		
?>
     
  
<div id="ThreeButton">


    
<h3>Welcome <?php echo $_SESSION["login_user"]; ?> in Onlin Resturant system  </h3>
 <a href="booking.php">Booking Resturant Onlin</a> 

<br><br>

<input type="button" id="P1" value=" Logout" style="width:90px;"onclick="window.location.href='/onlineResturant/logout.php'" />
</div>
</center>
</body></html>