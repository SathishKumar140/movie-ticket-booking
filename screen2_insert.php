<?
session_start();
$name=$_SESSION['username'];
$content = $_POST['content'];
$rand=$_SESSION['rand'];
$time=$_SESSION['show_time'];
$day=$_SESSION['time'];
$mov=$_SESSION['mov'];
if (isset($_SESSION['username'])) 
{
include'config.php';
$query=mysql_query("SELECT * FROM Monday_booking WHERE username='$name' and conform='$rand' and no_book='$content'and status='2' and screen='screen2'and time='$time' and day='$day'and movie='$mov' ")or die(mysql_error());
$count=mysql_num_rows($query);
if ($count==1) 
{
	mysql_query("DELETE  FROM Monday_booking WHERE username='$name' and conform='$rand' and no_book='$content' and screen='screen2'and time='$time' and day='$day'and movie='$mov'")or die(mysql_error());
}
else
{
	mysql_query("INSERT INTO Monday_booking(username,conform,no_book,status,screen,time,day,movie)VALUES('$name','$rand','$content','2','screen2','$time','$day','$mov')")or die(mysql_error());
}
$qu=mysql_query("SELECT * FROM Monday_booking WHERE username='$name' and conform='$rand' and status='2' and screen='screen2'and time='$time' and day='$day'and movie='$mov' ")or die(mysql_error());
$count=mysql_num_rows($qu);
?><table>
  <tr><td><?echo 'Seat Selected';?></td><td>:<?while($info1=mysql_fetch_array($qu))
{ $ech=$info1['no_book']; echo $ech;}?></td></tr>
  <tr><td><?echo 'No of seats';?></td><td>:<?echo $count; ?></td></tr>
  <tr> <td><?echo 'Screen Name';?></td><td>:Screen2</td></tr>
   <tr><td><?echo 'Date';?></td><td>:<?echo $day?></td></tr>
  <tr><td><?echo 'Show Time';?></td><td>:<?echo $time?></td></tr>
</table>

<?

}
else
{
	header("location:index.php");
}
?>