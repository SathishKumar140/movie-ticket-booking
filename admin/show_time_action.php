<?
include'config.php';
$screen_name=$_POST['screen_name'];
$show_time=$_POST['show_time'];
$movie_name=$_POST['movie_name'];
$day=$_POST['day'];

switch ($screen_name) {
	case 'screen 1':
	$screen_id=1;
		break;
	case 'screen 2':
	$screen_id=2;
		break;
	case 'screen 3':
	$screen_id=3;
		break;
		case 'screen 4':
	$screen_id=4;
		break;
	
	}
$insert="INSERT INTO show_avail (screen_id,screen_name,movie,status,show_time,day)VALUES('$screen_id','$screen_name','$movie_name','open','$show_time','$day')";
mysql_query($insert)or die(mysql_error());
header("location:admin_home.php");
?>
