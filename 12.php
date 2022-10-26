<html>
<body>
<form action="" method="post">
Enter limit :<input type="text" name="limit" /><br>
<input type="submit" value="Fib" /><br>
</form>
</body>
</html>
<?php
if($_POST)
{
$n=$_POST['limit'];
$a=0;
$b=1;
while($a<=$n)
{
echo "$a <br>";
$c=$a+$b;
$a=$b;
$b=$c;
}
}
?>
