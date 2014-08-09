<form action="2.php" method="post">
Movie_id<select name="movie_id">
<option>Choose Id</option>
<option>movies1</option>
<option>movies2</option>
<option>movies3</option>
<option>movies4</option>
<option>No_id</option>
</select>
film_name<select name="film_name">
<? 
include'config.php';
$result=mysql_query("SELECT * FROM movie where status='Now_showing' ")or die(mysql_error());
while($info=mysql_fetch_array($result))
{ 
$movie=$info['film_name'];
?>
<option><? echo $movie;?>
</option>	
<?
}
?>

</select>

<input type="submit"/>
</form>
