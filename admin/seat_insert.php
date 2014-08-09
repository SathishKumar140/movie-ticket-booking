<?
session_start();
$name=$_SESSION['username'];
$content = $_POST['content'];
$rand=$_SESSION['rand'];
if (isset($_SESSION['username'])) 
{
include'config.php';
$query=mysql_query("SELECT * FROM book WHERE username='$name' and conform='$rand' and no_book='$content'and status='2' ")or die(mysql_error());
$count=mysql_num_rows($query);
if ($count==1) 
{
	mysql_query("DELETE  FROM book WHERE username='$name' and conform='$rand' and no_book='$content'")or die(mysql_error());
}
else
{
	mysql_query("INSERT INTO book(username,conform,no_book,status)VALUES('$name','$rand','$content','2')")or die(mysql_error());
}
$qu=mysql_query("SELECT * FROM book WHERE username='$name' and conform='$rand' and status='2' ")or die(mysql_error());
$count=mysql_num_rows($qu);
?><table>
  <tr><td><?echo 'Seat Selected';?></td><td>:<?while($info1=mysql_fetch_array($qu))
{ $ech=$info1['no_book']; echo $ech;}?></td></tr>
  <tr><td><?echo 'No of seats';?></td><td>:<?echo $count; ?></td></tr>
  <tr> <td><?echo 'Screen Name';?></td><td>:</td></tr>
  <tr><td><?echo 'Show Time';?></td><td>:</td></tr>
</table>

<?

}
else
{
	header("location:index.php");
}
?>