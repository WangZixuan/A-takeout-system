<?php
session_start();
$_SESSION["login"]=null;
echo '<script>history.back()</script>'
?>