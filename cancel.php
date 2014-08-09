<?
include'config.php';
session_start();
$name=$_SESSION['username'];
$rand=$_SESSION['rand'];
mysql_query("DELETE  FROM Monday_booking WHERE username='$name' and conform='$rand' and status='2'")or die(mysql_error());
header("location:index.php");
?>