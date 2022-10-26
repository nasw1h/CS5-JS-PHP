<html>
<head>
<title>Palindrome</title>
</head>
<body>
<script>
function check(string)
{
var len = string.length;
if(string=='')
alert("Enter a string");
else
{
for (var i = 0; i < len / 2; i++)
{
if (string[i] !== string[len - 1 - i])
return 'It is not a palindrome';
}
return 'It is a palindrome';
}
}
const string = prompt('Enter a string: ');
const value=check(string);
alert(value);
</script>
</body>
</html>