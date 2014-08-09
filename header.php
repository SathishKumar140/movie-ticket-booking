<header>

<div >
	<div class="logo"><img src="images/logo.png"/></div>
	<div id="wrapper">
<?


if (!isset($_SESSION['username'])) {
?>
<a onmousedown="toggleOverlay()" href="sign_in.php">LOGIN</a>
<a href="#">REGISTER</a>
<?
}
else
{
	$name=$_SESSION['username'];
	echo 'Welcome ';
	echo $name ;
	?></br>
<a href="sign_out.php">SIGN OUT</a>
<?
}
?>
</div>
</div>
<div id="overlay"></div>
<div id="specialBox">
<div class="close">
  <a onmousedown="toggleOverlay()" href="#"><img src="images/close.png"/></a>
</div>
<div class="box">
<form method="post" action="sign_in_action.php" >
  <input type="text" name="name"  value="user Name" id="name" onblur="if (this.value == ''){this.value = 'user Name'; }" onfocus="if (this.value == 'user Name') {this.value = '';}" /></br></br>
   <input type="password" name="pass"  value="password" id="name" onblur="if (this.value == ''){this.value = 'password'; }" onfocus="if (this.value == 'password') {this.value = '';}" />
   </br>
   </br>
 <input type="submit" name="submit" value="Login" class="butt" />
</form> 

</div>

</div>
<div class="navigation">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="seat_select.php">Booking</a></li>
		<li><a href="#">About us</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
</div>
<div>
<div class="wrap"><!-- BEGIN SLIDER, TESTIMONIALS AND SERVICES -->
	
		<div class="slider-wrapper"><!-- begin slider -->
			<div id="slider" class="nivoSlider">
				<img src="images/slider/img01.jpg" />
				<img src="images/slider/img02.jpg"  />
				<img src="images/slider/img03.jpg"  />
				<img src="images/slider/img04.jpg" /></a>
			</div>
		</div>
		</div>
</div>

</header>
