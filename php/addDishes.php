<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("takeout", $con);

$getmax = "select id from dishes order by id desc limit 1";
$result = mysql_query($getmax, $con);
$nextline = 1+mysql_result($result, 0);

$sql="INSERT INTO dishes (id, name, price, class, explains, image)
VALUES
($nextline, '$_POST[name]', '$_POST[price]', '$_POST[classes]', '$_POST[explain]', 'null')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>