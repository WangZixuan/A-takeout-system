<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("takeout", $con);

$sql="INSERT INTO user (id, passwd, email, iPhone)
VALUES
('$_POST[name]','$_POST[password]','$_POST[email]', '$_POST[iPhone]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

echo '<script> alert("你好"); history.back();</script>';   
 echo ' <script>window.location="../allRestaurants.html";</script>';
exit;   



?>