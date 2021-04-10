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

<form action="new.php" method="POST"  name="myForm">
Add a new user<br>
ID &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="id" name="id"  required  placeholder="ID number"   />
Username<input type="text" name="username"  placeholder="Username" required />
Password&nbsp;<input type="password" name="password" placeholder="Password" required   />
Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"  id="email address" type="email" size="20" maxLingth="30" placeholder="username@gmail.com"  required pattern=".+@gmail.com" title="please enter email" />
Gender:&nbsp;
<lable><input type="radio" name="gender" value="F" checked />F</lable>
<lable><input type="radio" name="gender" value="M" checked />M</lable><br><br>
<input type="submit" id="Button" value="submit"/>

</form>
</div>
</center>
</body>
</html>