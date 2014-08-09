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
<div class="box">
<form method="post" action="sign_in_action.php" >
  <input type="text" name="name"  value="user Name" id="name" onblur="if (this.value == ''){this.value = 'user Name'; }" onfocus="if (this.value == 'user Name') {this.value = '';}" /></br>
   <input type="password" name="pass"  value="password" id="name" onblur="if (this.value == ''){this.value = 'password'; }" onfocus="if (this.value == 'password') {this.value = '';}" />
   </br>
 <input type="submit" name="submit" value="Login" class="butt" />
</form> 

</div>
<div class="close">
  <a onmousedown="toggleOverlay()" href="#"><img src="images/close.png"/></a>
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
</header>
