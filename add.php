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
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
  </head>

  <body>
           
         <form action="addDB.php" method="post" name="submitAccount" >
								<div id="login" class="animate w3layouts agileits form">
								<div class="ferry ferry-from">
                                     <fieldset>
<legend><h3><center>Add new row </center></h3></legend>
										<label>id</label>
										<input type="number" name="id" placeholder="id"  id="id" required=" ">
									
									<div class="ferry ferry-from">
										<label>resturantName</label>
										<input type="text" name="resturantN"  id="resturantN" placeholder="resturantName"  title="Must Enter resturantName" required=" ">
									</div>
									
									<div class="ferry ferry-from">
										<label>place</label>
										<input type="text" name="place"  id="place" placeholder="place"  title="Must Enter place" required=" ">
									</div>
									<div class="ferry ferry-from">
										<label>time</label>
										
										<input type="text" name="time" placeholder="time"  id="time"  required=" ">
									</div>
										<div class="clear"></div>
									
									<div class="wthreesubmitaits">
                                   <input type="submit" name="submitAccount" value="Add">
									</div>
                                    </fieldset>
             </div><br><br><br>
             </div>
            
            </form>
          </div>
								

        </div>
      </header>

  </body>

</html>
