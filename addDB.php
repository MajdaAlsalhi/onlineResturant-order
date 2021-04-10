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
		// to connect to DB /
		$con = mysqli_connect("localhost","root","");
		if(!$con){ // to check if its connected or not /
		die("Sorry, we can not complete your registration process.<br> Please try again later.");
		}
		else{
		$db_selected = mysqli_select_db($con, "onlinerestaurant"); //select the DB to use /
			if(!$db_selected){
			die("Can not use book, It's not found: ");
		}
		}
		
$id= htmlentities($_POST['id']);
$resturantN= htmlentities($_POST['resturantN']);
$place= htmlentities($_POST['place']);
$time= htmlentities($_POST['time']);
         $query ="SELECT * FROM booking where id='$id'";
		$rs = mysqli_query($con,$query);
		$numrow = mysqli_num_rows($rs); 
            if($numrow >0){
                echo "ID already exist";
            }
             else{
		$query = "INSERT INTO booking(id,resturantN,place,time) VALUES('$id','$resturantN','$place','$time')";
		$rs = mysqli_query($con, $query);
				echo " <big> Thank you <br/>You added one row </big> <br>";
 mysqli_close($con);
		}
		?>
         
            <?php

echo'<script>alert("Add  Successfully")</script>'; 
echo '<ul>';
echo '<br>';
echo  '<li><a href="mu.php"><h5>check table</h5></a></li>';
echo '</ul>';


?> 
          </div>
			</div>					
</div>
        </div>
		</div>
      </header>

  </body>

</html>
