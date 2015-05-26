<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("users", $con);

$sql="INSERT INTO user (id, passwd, email, iPhone)
VALUES
('$_POST[name]','$_POST[password]','$_POST[email]', '$_POST[iPhone]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>