<?
include'config.php';
$movie_id=$_POST['movie_id'];
$film_name=$_POST['film_name'];

$insert="INSERT INTO now_showing (movies,film_name)VALUES('$movie_id','$film_name')";
mysql_query($insert)or die(mysql_error());
header("location:1.php");
?>
