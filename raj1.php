<?php session_start();?>
<DOCTYPE html>
<html>
<head>
<style>
.button{
background-color:#4CAF50;
border: none;
color: white;
text-align: center;
text-decoration: none;
border-radius: 10px;
cursor: pointer;
}
</style>
</head>
<body>
<button type="button"><a href="rajshree.php">BACK</a></button><br>

<form action="rajshree.php" method="post">

Name:<br>

<input type="text" name="name" id="name" oninput="myfunc1()"><br>
Phone:<br>

<input type="number" name="num" id="number" oninput="myfunc2()"><br><br>

<button class="button" type="submit">ADD</button>
</form>

<p><b>Subscriber to be added:</b></p>
<p id="d1"></p>
<p id="d2"></p>

<script>
function myfunc1(){
	var x=document.getElementById("name").value;
	document.getElementById("d1").innerHTML="Name: "+x;
}
function myfunc2(){
	var y=document.getElementById("number").value;
	document.getElementById("d2").innerHTML="Phone: "+y;
}
</script>
</body>
</html>