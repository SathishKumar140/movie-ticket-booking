<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?session_start();
include'admin_header.php';
?>
<section>
<div class="fl">
<ul>
	<li><a href="movie.php"><img src="images/102.png" width="70" height="70"/></a></li>
	<li><a onmousedown="toggleOverlay()" href="#"><img src="images/add.png" width="70px" height="70px"/></a></li>
	<li><a href="seat_select.php"><img src="images/110.png" width="70" height="70"/></a></li>
    <li><a href="#.php"><img src="images/38.png" width="70" height="70"/></a></li>
</ul>
</div>
<div class="up">
	<table border="10" >
<tr>
<form action="show_time_action.php" method="post">
<td>Screen_Name</td><td><select name="screen_name">
<option>screen1</option>
<option>screen2</option>
<option>screen3</option>
</select></td></tr><tr><td>
Movie_name</td><td><select name="movie_name">
<? 
include'config.php';
$result=mysql_query("SELECT * FROM movie ")or die(mysql_error());
while($info=mysql_fetch_array($result))
{ 
$movie=$info['film_name'];
?>
<option><? echo $movie;?>
</option>	
<?
}
?>
</select></td></tr><tr><td>
show_time</td><td><select name="show_time">
<option>11.00AM</option>
<option>12.00PM</option>
<option>1.00PM</option>
<option>2.00PM</option>
<option>3.00PM</option>
<option>4.00PM</option>
<option>5.00PM</option>
<option>7.00PM</option>
<option>8.00PM</option>
<option>9.00PM</option>
<option>10.00PM</option>
</select></td></tr><tr><td>
Day</td><td><select name="day">
<?
for($i=-1;$i<=5;$i++)
{?>
  <option><? echo date('D d',strtotime('+'.$i.'day'));?></option> />
  <?
}
?>
</select></td>
</tr>
</table>
<input class="sub" type="submit"/>
</form>
</div>
</section>
<?
include'footer.php';
?>
</body>
</html>