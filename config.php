<?
$host='localhost';
$username='root';
$password='';
$database='ticket';
$db=mysql_connect("$host","$username","$password") or die(mysql_error());
mysql_select_db("$database");
?>