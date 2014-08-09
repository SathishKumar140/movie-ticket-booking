<link rel="stylesheet" type="text/css" href="style.css">
<?
include'config.php';
?>
<body>
	<div class="cen">
		<div class="topic"> 
		<h2> Vormarsch</h2>
		<p>Admin panel</p>
	</div>
      <form action="sign_in_action.php" method="post">
      	<p><input type="text" name="name"  value="Your Name"  onblur="if (this.value == ''){this.value = 'Your Name'; }" onfocus="if (this.value == 'Your Name') {this.value = '';}" /></p>
        <p><input type="password" name="pass" value="Password"  onblur="if (this.value == ''){this.value = 'Password'; }" onfocus="if (this.value == 'Password') {this.value = '';}" /></p>
        <p><input type="submit" name="submit" value="LOGIN" class="button" /></p>
      </form>
  </div>
</body>