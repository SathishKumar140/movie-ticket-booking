
<?
$d=list_files('images/movieimage');
function list_files($dir)
{
  if(is_dir($dir))
  {
    if($handle = opendir($dir))
    {
      while(($file = readdir($handle)) !== false)
      {
        if($file != "." && $file != ".." && $file != "Thumbs.db")
        {
			
      Print $file;
      Print "<img src='$dir/$file'/>"; 
        }
      }
	  	closedir($handle);
    }
  }
}
?>