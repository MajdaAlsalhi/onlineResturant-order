`<!DOCTYPE >
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


<?php
		
session_start();
		
if($_SESSION['logged'] == true){ //from http://stackoverflow.com/questions/20654848/html-php-display-username-after-success-login /
}

		
?>
      <center>
<h1>Welcome <?php echo $_SESSION["login_user"]; ?> in Onlin Resturant system  </h1>
<div id="ThreeButton" >
 <FORM  action="order.php" method='post'>

<table border="1" >
Booking
<th>ID</th><th>Restaurant Name</th><th>Place </th><th>Time</th><th>Select</th>
<tr><td>1</td><td>KFC</td><td>Sohar</td><td>9Am</td><td><INPUT TYPE='CHECKBOX'  name="check[KFC]"></td>
<tr><td>2</td><td>Macdonald</td><td>Barka</td><td>11Pm</td><td><INPUT TYPE='CHECKBOX'  name="check[Macdonald]"></td>
<tr><td>3</td><td>Barista Cafah</td><td>Alswaiq</td><td>1Pm</td><td><INPUT TYPE='CHECKBOX'  name="check[Barista Cafah]"></td>
<tr><td>4</td><td>Sadaf</td><td>Muscat</td><td>7Am</td><td><INPUT TYPE='CHECKBOX'  name="check[Sadaf]"></td>
</table>

<input  type="SUBMIT" name="submit" value="Order" id="P1" " style="width:90px;">

<input type="button" id="P1" value=" Logout" style="width:90px;"onclick="window.location.href='/onlineResturant/logout.php'" />
	
</FORM>	

</div>

</center>
</body>
</html>