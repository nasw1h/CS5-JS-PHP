<html>
<head>
</head>
<body>
<form action="" method="POST">
Username:<input type="text" name="usr"><br><br>
Password:<input type="password" name="pass"><br><br><br>
<input type="submit" value="login">
</form>
</body>
</html>
<?php
if($_POST)
{
$usr1=$_POST['usr'];
$paswd=$_POST['pass'];
$con=pg_connect("host=localhost dbname=college user=postgres password=root");
if($con)
{
echo "Successfully Connected ......";
$qry="select username,password from login where username='$usr1' and
password='$paswd' ";
$result=pg_query($con,$qry);
$nos=pg_num_rows($result);
if($nos)
echo " <br> $usr1, You are Logged Successfully ..";
else
echo "Login Denied";
}
}
?>