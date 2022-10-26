<html>
<head><title>country capital</title>
</head>
<body>
<h1>Country and its capital</h1>
<select id="country" onchange="capital()">
<option value="China">China</option>
<option value="India">India</option>
<option value="Italy">Italy</option>
<option value="Japan">Japan</option>
<option value="Nepal">Nepal</option>
</select>
<input type="text" id="demo" size="30"></p>
<script>
function capital()
{
var x = document.getElementById('country').value;
if(x=='China')
document.getElementById("demo").value = "Capital of China is Beijing";
else if(x=='India')
document.getElementById("demo").value = "Capital of India is New Delhi";
else if(x=='Italy')
document.getElementById("demo").value = "Capital of Italy is Rome";
else if(x=='Japan')
document.getElementById("demo").value = "Capital of Japan is Tokyo";
else if(x=='Nepal')
document.getElementById("demo").value = "Capital of Nepal is Kathmandu";
}
</script>
</body>
</html>