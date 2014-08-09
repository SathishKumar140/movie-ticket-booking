
<?
$time=$_POST['content'];
echo $time;
include'config.php';
$film=mysql_query("SELECT * FROM movie WHERE movies='movies1'")or die(mysql_error());
$film_info=mysql_fetch_array($film);
$film_name=$film_info['film_name'];
$res1=mysql_query("SELECT * FROM show_avail WHERE movie='$film_name'and day='$time'")or die(mysql_error());
while($info1=mysql_fetch_array($res1))
{
$time=$info1['show_time'];
$screen_name1=$info1['screen_name'];
?>
<div class="button">
<form action="<?echo $screen_name1?>.php" method="post">
<input type="submit" name="seat" value="<? echo $time; ?>"/>
</form>
</div>
<?
}
?>