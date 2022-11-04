<html>
<body>
<h1> <b>Login form</b></h1>
<br><br>
<form action="" method="POST">
<pre>
User Name <input type="text" name="user"><br>
Password <input type="password" name="pass"><br>
<input type="checkbox" name="remember">Remember me
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit"
name="submit" value="login">
</pre>
</form>
<?php
if(isset($_POST['submit']))
{
$user = $_POST['user'];
$pass = $_POST['pass'];
if($user=="bhc"&& $pass==123)
{
echo "Login successful";
}
else
{
    echo "Wrong Username/Password.";
}
}
?>
</body>
</html>