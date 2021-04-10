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
<h5><center>Thank you for your updating </center></h5>
<?php



$server="localhost";
$username="root";
$password="";

$dbConn = mysqli_connect("localhost","root","");				
$db_selected = mysqli_select_db($dbConn, "onlinerestaurant"); 

session_start();

$w = "SELECT * FROM booking";
$result=mysqli_query($dbConn,$w);

$i=0;

while($row = mysqli_fetch_array( $result,MYSQLI_ASSOC))
if(isset($_POST['submit']))
{

$id=$_POST["id"];
$resturantN=$_POST["resturantN"];
$place=$_POST["place"];
$time=$_POST["time"];
 
$query2 = "UPDATE booking SET id='$id',resturantN='$resturantN',
place='$place',time='$time'
WHERE id='$id'";

$result2=mysqli_query($dbConn,$query2);


}
?>
<br>
<?php

echo'<script>alert("Update  Successfully")</script>'; 
echo '<ul>';
echo '<br>';
echo  '<li><a href="mu.php"><h5>check table</h5></a></li>';
echo '</ul>';


?> 
	
            </fieldset>
          </div>
        
	</center>

            
            