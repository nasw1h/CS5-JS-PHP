<html>
<head>
<title>Area and Circumference</title>
</head>
<body>
<form>
Enter the radius : <input type="number" id="radius">
<button onclick="calculate()"> Submit </button>
</form>
<script>
function calculate()
{
var pi=3.14;
var r=document.getElementById("radius").value;
var a=pi*r*r;
var c=2*pi*r;
document.write("Area = " +a);
document.write("<br>Circumference = " +c);
}
</script>
</body>
</html>