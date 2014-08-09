<?php

// Inialize session
session_start();

// Include database connection settings

include'config.php';
$userid = $_POST['name']; //Set UserName
$password = $_POST['pass']; //Set Password

if(isset($userid, $password)) {

    $myuserid = mysql_real_escape_string(strip_tags(trim($userid)));
    $mypassword = mysql_real_escape_string(strip_tags(trim($password)));

    $result=mysql_query("SELECT * FROM admintable WHERE username='{$myuserid}' AND password='{$mypassword}'",$db) or die(mysql_error());
 
    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
        $_SESSION['username']= $myuserid;
        $_SESSION['rand']=rand(10000,99999);
        header("location:movie.php");
    }
   else
   {
     header("location:index.php?msg=please valid password or email");
   }
}
?>

