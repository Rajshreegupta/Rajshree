<?php session_start();?>
<!DOCTYPE html>
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
.button2 {background-color: #f44336;}
</style>
</head>
<body>
<script>
function myfunc(){
document.getElementById("n1").value="";
document.getElementById("num1").value=null;
}
</script>
<div style="background-color:black" align="center" >
	<h2><font color="white">PHONE DIRECTORY</font></h2>
</div>
<button class="button"><a href="raj1.php">ADD</a></button>

<table id="t1">
<tr>
    <th>NAME</th>
    <th>PHONE</th>
    <th>_</th>
</tr>

<tr>
	<td><input type="text" name="name" id="n1" value="<?php echo $_POST["name"]; ?>"></td>
	<td><input type="number" name="num" id="num1" value="<?php echo $_POST["num"]; ?>"></td>

	<td><button class="button button2" onclick="myfunc()">DELETE</button></td>

</tr>

</table>
</body>
</html>