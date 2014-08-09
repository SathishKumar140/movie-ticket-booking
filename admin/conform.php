<?
include'config.php';
session_start();
$name=$_SESSION['username'];
$rand=$_SESSION['rand'];
mysql_query("UPDATE  book SET status='1' where username='$name' and conform='$rand' and status='2'")or die(mysql_error());
header("location:seat_select.php");
?>