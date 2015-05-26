<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("users", $con);

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

$i=$_POST['id'];
$p=$_POST['password'];

$sql = "SELECT * FROM user WHERE id = '$i' AND passwd='$p'";

$result = mysql_query($sql);



if(mysql_num_rows($result)==0)
  {
echo "<script charset='utf-8' type='text/javascript'>alert('’À∫≈ªÚ√‹¬Î¥ÌŒÛ');history.back();</script>"; 
  echo ' <script>history.back();</script>';
  }
else{
  echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
   echo '<script>window.alert("µ«¬Ω≥…π¶");</script>';
}



//echo ' <script>window.location="../register.html"</script>';
?>