<?php
//This page is used for register.
//If one wants to register, it has to query the database and get the returned value.
//Database is MySQL-takeout.
//Table is user.
//Zixuan Wang
//2015-6-9


//Connect to the SQL.
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//Select database.
mysql_select_db("takeout", $con);

//Insert the value.
$sql="INSERT INTO user (id, passwd, email, iPhone)
VALUES
('$_POST[name]','$_POST[password]','$_POST[email]', '$_POST[iPhone]')";

//Return query.
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

//Close mySQL.
//Don't forget this!!!
mysql_close($con);


//Return echo to the page.
echo '<script> alert("你好"); history.back();</script>';   
 echo ' <script>window.location="../checkin.html";</script>';
exit;   


?>