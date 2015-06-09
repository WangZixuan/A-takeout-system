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



if(mysql_num_rows($result)==0)
  {
echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
echo '<script>alert("ID error or PWD error");history.back();</script>'; 

  }
else{
  
   echo '<script>alert("Success!");</script>';
   echo ' <script>window.location="../allRestaurants.html";</script>';
}
mysql_close($con);



//echo ' <script>window.location="../register.html"</script>';
?>