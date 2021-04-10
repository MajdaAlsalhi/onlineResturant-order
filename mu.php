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
<div id="ThreeButton" style="width:400px;">
<?php
/* http://www.c-sharpcorner.com/UploadFile/satyapriyanayak/how-to-insert-edit-and-delete-in-php/ */

$dbConn = mysqli_connect("localhost","root","");				
$db_selected = mysqli_select_db($dbConn, "onlinerestaurant"); 

session_start();

$w = "SELECT * FROM booking";
$result=mysqli_query($dbConn,$w);


echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='black'>id</font></th>
<th><font color='black'>RestaurantName</font></th>
<th><font color='black'>place</font></th>
<th><font color='black'>Time</font></th>

<th><font color='black'>Action</font></th>

</tr>";

while($row = mysqli_fetch_array( $result,MYSQLI_ASSOC)){

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['resturantN'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['place'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['time'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['id'] . '">Edit</a>\<a href="delete1.php?id=' . $row['id'] . '">Delete</a></font></b></td>';

echo "</tr>";

}

echo "</table>";
?>


<br>
<input type="button" id="P1" value=" Add" onclick="window.location.href='add.php'" />
  <input type="submit" name="logout" value="logout" id="P1" />





</div>


</div>


 </div>
</body>
</html>