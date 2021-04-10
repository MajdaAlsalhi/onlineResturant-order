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
		if(!$con){ 
		die;
		}
		else{
		$db_selected = mysqli_select_db($con, "onlinerestaurant"); 
			if(!$db_selected){
			die;
		
		}

		
		$username = htmlentities($_POST['username']);      
		$id = htmlentities($_POST['id']);
		$password = htmlentities($_POST['password']);
		$email = htmlentities($_POST['email']);
		$gender= htmlentities($_POST['gender']);

		

	// count the rows with matched username, to check if there is a duplicate username and the id uniqe /
		$query = "SELECT * FROM users WHERE username='$username'";
		$rs = mysqli_query($con,$query);
		$numrow = mysqli_num_rows($rs);

        $q = "SELECT * FROM users WHERE id='$id'";
		$r = mysqli_query($con,$q);
		$numr= mysqli_num_rows($r);		
		if ($numrow >0){
		echo " <script> alert('WE APOLOGIZE! The username Already Exists choose another'); window.history.back(); </script>"; 
		}
if ($numr >0){
		echo " <script> alert(' The id Already Exists choose another'); window.history.back(); </script>"; 
		}
		else{
		$query = "INSERT INTO users VALUES('$id','$username' ,'$password','$email','$gender')";
		$rs = mysqli_query($con, $query);
		echo " <big> Hello </big> <br>";
		echo "  $username :   Your register Created Sucessfully <br> <br>";
		echo " GO and login System <br><br><br>"; 
		echo "<br /><a href=userlogin.html> LOGIN</a>";
		mysqli_close($con);
		}
		}
		?>
		</div>
		</center>
		</body>
		
		</html>