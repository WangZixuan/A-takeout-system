<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("takeout", $con);


$i=$_POST['id'];
$p=$_POST['password'];

$sql = "SELECT * FROM user WHERE id = '$i' AND passwd='$p'";

$result = mysql_query($sql);

global $login; 


if(mysql_num_rows($result)==0)
  {



echo '<script>alert("ID error or PWD error");history.back();</script>'; 

  }


$row = mysql_fetch_array($result);

session_start();

$_SESSION["login"]=$row['id']; 

  if($row['id']=='123'){
 echo '<script>alert("Success!");</script>';
   echo ' <script>window.location="../management.html";</script>';
}
else{
   echo '<script>alert("Success!");</script>';
   echo ' <script>window.location="../allRestaurants.php";</script>';
}
mysql_close($con);



//echo ' <script>window.location="../register.html"</script>';
?>