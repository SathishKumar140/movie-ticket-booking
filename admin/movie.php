<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
function toggleOverlay(){
  var overlay = document.getElementById('overlay');
  var specialBox = document.getElementById('specialBox');
  overlay.style.opacity = .8;
  if(overlay.style.display == "block"){
    overlay.style.display = "none";
    specialBox.style.display = "none";
  } else {
    overlay.style.display = "block";
    specialBox.style.display = "block";
  }
}
</script>
<?php
include 'config.php';
session_start();
include'admin_header.php';
error_reporting(E_ALL ^ E_NOTICE);
$select = mysql_query("SELECT * from movie");
if(isset($_POST['submit']))
{
	for($i=1;$i<=$_POST['hidden'];$i++)
	{
		
		$query2 = mysql_query("SELECT image from movie WHERE film_id = ' ".$_POST["hioddenid$i"]." ' ");
		while($file = mysql_fetch_array($query2))
		{
		$unlink = unlink('images/movie/'.$file['image']);
		if($unlink)
		{
		$query1 = mysql_query("DELETE from movie WHERE film_id = ' ".$_POST["hioddenid$i"]." ' ");
	
		header("refresh: 3 movie.php");
		}
		else
		{
		echo 'Not deleted';
		}
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Movies</title>
</head>

<body>
	<section>
		<div id="overlay"></div>
<div id="specialBox">
<div class="close">
  <a onmousedown="toggleOverlay()" href="#"><img src="images/close.png"/></a>
</div>
<div class="image_up">
	<form action="insert_movie.php" ENCTYPE="multipart/form-data" method="post">
	<input type="text" name="film_name" value="Movie Name"  onblur="if (this.value == ''){this.value = 'Movie Name'; }" onfocus="if (this.value == 'Movie Name') {this.value = '';}" /> 	</br>
	<input type="file" name="image"/></br>
	<select name="status">
		<option>Choose Status</option>
		<option>Now_showing</option>
		<option>Up_coming</option>
	</select>
<select name="movie_id">
<option>Choose Id</option>
<option>movies1</option>
<option>movies2</option>
<option>movies3</option>
<option>movies4</option>
<option>No_id</option>
</select>
	<input type="submit" name="sub" value="Update Movie" class="button"/>	
</form>
</div>
</div>
<form class="formclass" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<table align="center" cellspacing="15">
	<tr align="center">

	<div class="fl">
	
		<ul>
			<li><a href="#"><img src="images/102.png" width="70" height="70"/></a></li>
			<li><a onmousedown="toggleOverlay()" href="#"><img src="images/add.png" width="70px" height="70px"/></a></li>
	<li><a href="seat_select.php"><img src="images/110.png" width="70" height="70"/></a></li>
<li><a href="admin_home.php"><img src="images/38.png" width="70" height="70"/></a></li>

</ul>
</div>

</tr>
<tr>
	<th align="left">Action</th>
	<th align="left">Movie Name</th>
	<th align="left">Picture</th>
	<th align="left">Status</th>
	<th align="left">Movie_Id</th>
	<th align="left">Delete</th>
</tr>
<?php
$i = 0;
while($row = mysql_fetch_array($select))
{
$i = $i + 1;
?>
<tr>
	<td><input type="checkbox" name="hioddenid<?php echo $i; ?>" value="<?php echo $row['film_id']; ?>" /></td>
	<td><?php echo $row['film_name']; ?></td>
	<td><img src="images/movie/<?php echo $row['image'];?>" height="80" width="100"/></td>
	<td > <?echo $row['status'] ?></td>
	<td > <?echo $row['movies'] ?></td>
    <input type="hidden" name="hidden" value="<?php echo $i; ?>" />
	<td colspan="3" align="center"><input type="submit" name="submit"  value="Delete"/></td>
	<input type="hidden" name="image<?php echo $i; ?>" value="<?php echo $row['picture'];?>" />
</tr>
<?php
}
?>

</table>
</form>
</section>
<?
include'footer.php';
?>
</body>
</html>
