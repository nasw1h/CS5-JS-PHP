<html>
<body>
<h3>Enter the Number</h3><br>
<input type="text" id="number"/>
<button onclick="number()"> Submit </button>
<script>
function number()
{
var no=document.getElementById("number").value;
var sum=0;
var i;
for(i=1;i<no;i++)
{
if(no%i == 0)
sum = sum + i;
}
if(sum == no )
alert("Perfect Number");
else if(sum > no)
alert("Abundant Number");
else
alert("Deficient Number");
}
</script>
</body>
</html>