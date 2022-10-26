</head>
<body>
<h1>REGISTRATION FORM</h1>
USERNAME :<input type="text" id="uname"><br>
PASSWORD :<input type="password" id="pass1"><br>
RE-ENTER PASSWORD :<input type="password" id="pass2"><br>
<button onclick="validate()">Submit</button>
<script>
function validate()
{
var pass1 = document.getElementById('pass1').value;
var pass2 = document.getElementById('pass2').value;
if(pass1 != pass2)
{
alert("password must be same");
}
if(pass1.length <= 8)
{
alert("password length must be greater than 8 characters");
}
}
</script>
</body>
</html>