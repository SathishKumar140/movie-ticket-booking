<link rel="stylesheet" type="text/css" href="style.css">
<header>
<div >
	<div class="logo"><img src="images/logo.png"/></div>
	
<?


if (!isset($_SESSION['username']))
 {
header("location:index.php");
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
</header>
