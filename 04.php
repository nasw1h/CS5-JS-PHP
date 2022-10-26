<html>
<head>
<title>Arithmetic operation</title>
</head>
<body>
<form>
<h1>Arithmetic operation</h1>
Enter the number1 :<input type="number" id="num1"><br>
Enter the number2 :<input type="number" id="num2"><br>
<button onClick="add()">Add</button>
<button onClick="sub()">Subtract</button>
<button onClick="multi()">Multiply</button>
<button onClick="div()">Divide</button>
</form>
<script>
function add()
{
var num1 = parseInt(document.getElementById("num1").value);
var num2 = parseInt(document.getElementById("num2").value);
document.write("Sum = " +(num1+num2));
}
function sub()
{
var num1 = parseInt(document.getElementById("num1").value);
var num2 = parseInt(document.getElementById("num2").value);
document.write("Difference = "+(num1-num2));
}
function multi()
{
var num1 = parseInt(document.getElementById("num1").value);
var num2 = parseInt(document.getElementById("num2").value);
document.write("Product = " +(num1*num2));
}
function div()
{
var num1 = parseInt(document.getElementById("num1").value);
var num2 = parseInt(document.getElementById("num2").value);
document.write("Quotient = " +(num1/num2));
}
</script>
</body>
</html>