<form method="post" action="sign_in_action.php" >
  <input type="text" name="name"  value="user Name" id="name" onblur="if (this.value == ''){this.value = 'user Name'; }" onfocus="if (this.value == 'user Name') {this.value = '';}" />
   <input type="password" name="pass"  value="password" id="name" onblur="if (this.value == ''){this.value = 'password'; }" onfocus="if (this.value == 'password') {this.value = '';}" />
   <input type="submit" value="Login"/>
</form> 
