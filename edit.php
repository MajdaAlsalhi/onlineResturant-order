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

       $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "onlinerestaurant";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);
session_start();
   ?>

<?php
include_once 'database1.php';
$result = mysqli_query($conn,"SELECT * FROM booking WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>





<form  method="post" action="form2.php">


id 

<input type="text" name="id" value="<?php echo $row['id']; ?>">
<br>
resturantName <br>
<input type="text" name="resturantN"  value="<?php echo $row['resturantN']; ?>">
<br>
place:<br>
<input type="text" name="place"  value="<?php echo $row['place']; ?>">
<br>
time<br>
<input type="text" name="time"  value="<?php echo $row['time']; ?>">
<br>
<input type="submit" name="submit" value="Edit" id="P1">
<input type="button" id="P1" value=" Logout" style="width:90px;"onclick="window.location.href='/onlineResturant/logout.php'" />
	
</form>
		    
	 
                                    </fieldset>
                                    </div>
             
          
        </center>
      
        
  </body>

</html>
