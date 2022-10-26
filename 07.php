<html>
<head>
<title>sum of digit</title>
</head>
<body>
<script>
var sum=0;
var digit=new Array();
var n= prompt('Enter no.of values : ');
for(i=0;i<n;i++)
{
digit[i] = Number(prompt('Enter the digit : '));
}
for(i=0;i<n;i++)
{
sum = sum+digit[i];
}
alert("Sum of elements "+sum);
</script>
</body>
</html>
