<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/lib/prototype.js" type="text/javascript"></script>
<script type="text/javascript">
	function startLoading() {
	  Element.show('mainAreaLoading');
	  Element.hide('mainAreaInternal');
	}
	function finishLoading() {
	  Element.show('mainAreaInternal');
	  setTimeout("Effect.toggle('mainAreaLoading');", 1000);
	}

	function list(id)
	{        
	        startLoading();
	        new Ajax.Updater('mainAreaInternal', 'screen1_insert.php', {method: 'post', postBody:'content='+ id +''});
	        finishLoading();
		
			if(document.getElementById(id).style.backgroundColor=='blue')
			{
				document.getElementById(id).style.backgroundColor='green';
			}
			else
			{
				document.getElementById(id).style.backgroundColor='blue';
			}
		
	}
</script>
</head>
<body>
<?
session_start();
if (!isset($_SESSION['username']))
 {
header("location:index.php");
}
include'header_other.php';
$time=$_POST['seat'];
$_SESSION['show_time']=$time;
$name=$_SESSION['username'];
$rand=$_SESSION['rand'];
$mov=$_POST['moviename'];
$_SESSION['mov']=$mov;
$day=$_SESSION['time'];
include'config.php';
?>
<section>
<div >
<p id="mainAreaInternal" class="seats" >
<table>
  <tr><tr><td>Seat Selected</td><td>:</td></tr>
  <tr><td>No of seats</td><td>:</td></tr>
  <td>Screen Name</td><td>:</td></tr>
   <td>Date</td><td>:</td></tr>
  <tr><td>Show Time</td><td>:</td></tr>
 </table>
<p id="mainAreaLoading"  sty="display: none">
</div>
<div class="widt">
<div class="book">
<table><tr><?
for ($i=1; $i < 11; $i++) 
{ 
for ($j=1; $j < 11; $j++) 
{
$k='a'.$i.'-'.$j;
$result=mysql_query("SELECT * FROM Monday_booking WHERE  status='1'and no_book='$k' and screen='screen1'and time='$time' and day='$day'and movie='$mov' ")or die(mysql_error());
$info=mysql_num_rows($result);
if ($info==1) 
{
	$seat='seat1';
}
else
{
	$seat='seat';
}
?>
<td class="back1">
<div class="<?echo $seat;?>">
<?	$l='a'.$i.'-'.$j; ?>
<li id="<? echo $l ?>" onclick="list(this.id)" >
<?	$h='a'.$i.'-'.$j; ?>
<a id="<? echo $h ?>"  onclick="loadContent(this.id);" href="#"><? echo $j;?></a>
</li></div></td><?}?>
<td class="al"><?
	echo 'a'.$i;?>
</td><tr><?}?></tr>
</table>
</div>
<div class="boo">
<table><tr><?
for ($i=1; $i < 11; $i++) 
{ 
for ($j=1; $j < 11; $j++) 
{
$k='b'.$i.'-'.$j;
$result=mysql_query("SELECT * FROM Monday_booking WHERE username='$name' and conform='$rand' and status='1'and no_book='$k'and screen='screen1'and time='$time' and day='$day'and movie='$mov' ")or die(mysql_error());
$info=mysql_num_rows($result);
if ($info==1) 
{
	$seat='seat1';
}
else
{
	$seat='seat';
}
?>
<td class="back1">
<div class="<?echo $seat;?>">
<?	$l='b'.$i.'-'.$j; ?>
<li id="<? echo $l ?>" onclick="list(this.id)" >
<?	$h='b'.$i.'-'.$j; ?>
<a id="<? echo $h ?>"  onclick="loadContent(this.id);" href="#"><? echo $j;?></a>
</li></div></td><?}?>
<td class="al"><?
	echo 'b'.$i;?>
</td><tr><?}?></tr>
</table>
</div>
<div class="screen">
	<img src="images/screen.png" widht="300" height="20"></img>
</div>
</div>
<div>
	<form class="confor" action="conform1.php" method="post">

		<input type="submit" name="screen1" value="Conform"/>
	</form> 
	<form class="cancel" action="cancel.php" method="post">
		<input type="submit" value="Cancel"/>
	</form> 
</div>
</section>
<div class="divv">
<?
include'footer.php'
?>
</div>
</body>