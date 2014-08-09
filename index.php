<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="slider/nivo/nivo-slider.css" />
<link rel="stylesheet" href="slider/nivo/nivo-style.css" />
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" href="css/style.css" />

<script src="js/jquery-1.7.1.min.js"></script>

<script src="slider/nivo/jquery.nivo.slider.pack.js"></script>
<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/default.js"></script>

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


<body>
<?session_start();
	 include'header_other.php';
	 ?>

<section>
	<div class="main-title"><span>Upcoming movies</span></div>


<div class="works">
<ul>
<?

   include'config.php';
  $mov1=mysql_query("SELECT * FROM movie WHERE status='Up_coming'")or die(mysql_error());
  while($mov_info1=mysql_fetch_array($mov1))
  {
  $mov_name1=$mov_info1['image'];
  
?>
<li><a href="#" ><img src="admin/images/movie/<? echo $mov_name1;?>" width="210" height="150"/></a><li>
<?}?>
</ul>
</div>
<div class="main-title"><span>Now Showing</span></div>

<div class="fli">
<form method="post" action="#">
<div class="hidden"><?
$tt=$_POST['time'];

?></div><?
for($i=0;$i<=6;$i++)
{ 

  $var=  date('D d',strtotime('+'.$i.'day'));
 
  if($tt==$var)
  {
    $inp='inp1';
  }else
  {
    $inp='inp';
  }
?>
<li >
  <input type="text" name="in_day" value="<?echo $var1?>" class="hidden"/>
<input class="<?echo $inp; ?>" type="submit" name="time" value="<?echo $var;?>"/></li>
<?
}
?>
</div>
</form>
</div>
<div>




<div class="movies_showing">
<div class="topic">MOVIES NOW SHOWING</div>
  <div class="now">
	<ul><?
  for ($i=1; $i < 5 ; $i++) { 
   include'config.php';
  $movie='movies'.$i;
  $link='#movie'.$i;
  $mov=mysql_query("SELECT * FROM movie WHERE movies='$movie'")or die(mysql_error());
  $mov_info=mysql_fetch_array($mov);
  $mov_name=$mov_info['film_name'];
  $movie_result=mysql_query("SELECT * FROM movie WHERE film_name='$mov_name'")or die(mysql_error());
  $movie_info=mysql_fetch_array($movie_result);
  $movie_image=$movie_info['image'];
 ?>
    <li><a href="<? echo $link;?> "  ><img src="admin/images/movie/<?echo $movie_image;?>" width="200" height="120"/></a><li>
<? }?>
    	</ul>
 </div>
</div>
<div class="seat_avail">
<div class="topic">SHOW TIMINGS</div>

<div id="movie1" class="panel" >
<?
if(isset($_POST['time']))
{
$time=$_POST['time'];
$_SESSION['time']=$time;
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
<input type="text" class="hidden" name="moviename" value="<?echo $film_name?>"/>
<input type="submit" name="seat" value="<? echo $time; ?>"/>
</form>
</div>
<?
}
}
?>

</div>
        <!-- /MOVIE1 -->
        
        <!-- MOVIE2 -->
        <div id="movie2" class="panel" >
<?
if(isset($_POST['time']))
{
$time=$_POST['time'];
$_SESSION['time']=$time;
include'config.php';
$film=mysql_query("SELECT * FROM movie WHERE movies='movies2'")or die(mysql_error());
$film_info=mysql_fetch_array($film);
$film_name=$film_info['film_name'];
$res1=mysql_query("SELECT * FROM show_avail WHERE movie='$film_name'and day='$time'")or die(mysql_error());
while($info1=mysql_fetch_array($res1))
{
$time=$info1['show_time'];
$_SESSION['st']=$time;
$screen_name=$info1['screen_name'];
?>
<div class="button">
<form action="<?echo $screen_name?>.php" method="post">
<input type="text" class="hidden" name="moviename" value="<?echo $film_name?>"/>
<input type="submit" name="seat" value="<? echo $time; ?>"/>
</form>
</div>
<?
}
}
?>

</div>
        <!-- /MOVIE2 -->
        
        <!-- MOVIE3 -->
        <div id="movie3" class="panel" >
<?
if(isset($_POST['time']))
{
$time=$_POST['time'];
$_SESSION['time']=$time;
include'config.php';
$film=mysql_query("SELECT * FROM movie WHERE movies='movies3'")or die(mysql_error());
$film_info=mysql_fetch_array($film);
$film_name=$film_info['film_name'];
$res1=mysql_query("SELECT * FROM show_avail WHERE movie='$film_name'and day='$time'")or die(mysql_error());
while($info=mysql_fetch_array($res1))
{
$time=$info['show_time'];
$_SESSION['st']=$time;
$screen_name=$info['screen_name'];
?>
<div class="button">
<form action="<?echo $screen_name?>.php" method="post">
<input type="text" class="hidden" name="moviename" value="<?echo $film_name?>"/>
<input type="submit" name="seat" value="<? echo $time; ?>"/>
</form>
</div>
<?
}
}
?>
</div>
        <!-- /MOVIE3 -->
        
        <!-- MOVIE4 -->
<div id="movie4" class="panel" >
<?
if(isset($_POST['time']))
{
$time=$_POST['time'];
$_SESSION['time']=$time;
include'config.php';
$film=mysql_query("SELECT * FROM movie WHERE movies='movies4'")or die(mysql_error());
$film_info=mysql_fetch_array($film);
$film_name=$film_info['film_name'];
$res1=mysql_query("SELECT * FROM show_avail WHERE movie='$film_name'and day='$time'")or die(mysql_error());
while($info1=mysql_fetch_array($res1))
{
$time=$info1['show_time'];
$_SESSION['st']=$time;
$screen_name1=$info1['screen_name'];
?>
<div class="button">
<form action="<?echo $screen_name1?>.php" method="post">
<input type="text" class="hidden" name="moviename" value="<?echo $film_name?>"/>
<input type="submit" name="seat" value="<? echo $time; ?>"/>
</form>
</div>
<?
}
}
?>
</div>
</div>



</section>

<div>
<?include'footer.php';?>
</div>
</body>