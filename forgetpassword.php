<?php
session_start();


//Connect to database

$connection=mysqli_connect("localhost","root","","onlinerestaurant");
        
$username = $_POST['username'];
$password = $_POST['password'];
//jest I bring code of update remaning by my self..
//https://stackoverflow.com/questions/17270787/changing-a-mysql-user-password-by-using-php
$query = "SELECT * FROM users WHERE username='$username'";
		$rs = mysqli_query($connection,$query);
		$numrow = mysqli_num_rows($rs);
		
		if ($numrow == 0){
		echo " <script> alert('uncorrect user name: User Name not found'); window.history.back(); </script>"; 
		}
         else{
        $sql = "UPDATE users SET password = '$password' WHERE username='$username'";
        $result = mysqli_query($connection, $sql);
        if($result){
            echo "<script> alert('Thank You. Your Password has been successfully changed.'); window.history.back(); </script>";
        }
		else{
           echo "<script> alert('No Changed'); window.history.back(); </script>";
        }
   
		 }
?>

