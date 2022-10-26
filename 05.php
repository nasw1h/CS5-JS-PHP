<html>
<head>
<title>color</title>
</head>
<body>
<h1>Change background color</h1>
<button onclick="change()">click here</button>
<script>
function change()
{
var color=["blue","red","orange","yellow","green","violet"];
var i=Math.floor(Math.random()*10);
document.bgColor = color[i];
}
</script>
</body>
</html>
