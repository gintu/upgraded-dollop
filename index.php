<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
header("Location: home.php");
}
if(isset($_POST['login_btn']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email='$email'";

$response = mysql_query($query);
$row = mysql_fetch_array($response);

if($row['password'] == $password)
{
$_SESSION['user'] = $row['u_name'];
header("Location: home.php");
}
else{
echo("Wrong Credentials");
}

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tutorial - 01</title>
</head>
<body>
<center>
<div>
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="login_btn">Sign In</button></td>
</tr>
<tr>
<td><a href="signup.php">Sign Up</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
