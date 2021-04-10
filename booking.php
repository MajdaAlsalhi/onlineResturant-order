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

$dbConn = mysqli_connect("localhost","root","");				
$db_selected = mysqli_select_db($dbConn, "onlinerestaurant"); 


$w = "SELECT * FROM booking";
$result=mysqli_query($dbConn,$w);


}

		
?>
      <center>
<h1>Welcome <?php echo $_SESSION["login_user"]; ?> in Onlin Resturant system  </h1>
<div id="ThreeButton" style="width:350px;">
Booking
 <FORM  action="order.php" method='post'>

 

<?php
echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='black'>id</font></th>
<th><font color='black'>RestaurantName</font></th>
<th><font color='black'>place</font></th>
<th><font color='black'>Time</font></th>

<th><font color='black'>Select</font></th>
</tr>";

echo "<tr>";
while($row = mysqli_fetch_array( $result,MYSQLI_ASSOC)){

echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['resturantN'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['place'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['time'] . '</font></b></td>';
?>
<td><INPUT TYPE="CHECKBOX"  value="<?php echo $row['resturantN'];?>" name="check[]" id="check"> </td>
<?php
echo "</tr>";
}

echo "</table>";

?>
<input  type="SUBMIT" name="submit" value="Order" id="P1" " style="width:90px;">

<input type="button" id="P1" value=" Logout" style="width:90px;"onclick="window.location.href='/onlineResturant/logout.php'" />
	
</FORM>	

</div>

</center>
</body>
</html>