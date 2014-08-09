<?php
  $content = $_POST['content'];

  switch($content) 
  {
    case 1:
      echo include("seat_select.php");
      break;
    case 2:
      echo include("insert_movie.php");
      break;
	case 3:
		echo include("movie.php");
		break;


  }
?>