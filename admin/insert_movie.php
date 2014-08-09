<?
include'config.php';
 
$film_name=$_POST['film_name'];
$status=$_POST['status'];
$movie_id=$_POST['movie_id'];
$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
 if($ext=='JPG' || $ext=='png' || $ext=='gif'|| $ext=='tif'|| $ext=='jpg')
{
$target = "images/movie/"; 
$target = $target . basename( $_FILES['image']['name']); 
$pic=($_FILES['image']['name']);
$insert = "INSERT INTO movie(film_name,image,status,movies)VALUES('$film_name','$pic','$status','$movie_id')";
mysql_query($insert) or die( "Error in Query: " . mysql_error());

	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
     { 
	header("location:movie.php");
     }
	 
	 
}

