<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/elegant-press.js" type="text/javascript"></script>
<script src="js/lib/prototype.js" type="text/javascript"></script>
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
function moveNumbers(num) 
{
 document.getElementById("res").value=num;
}
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
          new Ajax.Updater('mainAreaInternal', 'ajaxmenu.php', {method: 'post', postBody:'content='+ id +''});
          finishLoading();

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
<div>

<div class="main-title"><span>Now Showing</span></div>

<div class="movies_showing">
<div class="topic">MOVIES NOW SHOWING</div>
      <div class="fli">
      <form method="post" action="#">
      <div class="fl">
</div>
</form>
</div>
<div class="now">
	<ul><?
  for ($i=1; $i < 5 ; $i++) { 
   include'config.php';
  $movie='movies'.$i;
  $link='movie'.$i;
  $mov=mysql_query("SELECT * FROM movie WHERE movies='$movie'")or die(mysql_error());
  $mov_info=mysql_fetch_array($mov);
  $mov_name=$mov_info['film_name'];
  $movie_result=mysql_query("SELECT * FROM movie WHERE film_name='$mov_name'")or die(mysql_error());
  $movie_info=mysql_fetch_array($movie_result);
  $movie_image=$movie_info['image'];
 ?>
 <li><a id="<? echo $link;?>" href="# " onClick="list(this.id)"  ><img src="admin/images/movie/<?echo $movie_image;?>" width="200" height="120"/></a><li>
<? }?>
    	</ul>
 </div>
</div>
<div class="seat_avail">
<div class="topic">SHOW TIMINGS</div>
<div>

<p id="mainAreaInternal" class="seats" >
sdfdsf
<p id="mainAreaLoading"  sty="display: none">
</div>
<div id="movie1" class="panel" >


sadsfad
</div>

        <!-- /MOVIE1 -->


</section>

<div>
<?include'footer.php';?>
</div>
</body>