
 
<div style="margin-top:5%; margin-left:5%;"><?php
$servername='localhost';
$username='root';
$password='';
$dbname = "onlinerestaurant";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?>

