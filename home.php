<!DOCTYPE html>
<html>
<head><title> Membuat Form Login dengan Javascript</title>
<link rel ="stylesheet" type = "text/css"href="style.css">
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.jsS"></script>
<body>
</br>
<br/>
<center><h2>FORM LOGIN</h2></center>
<br/>
<center>
<div class ="login">
<br/>
<form action ="/pkl/event/index.php" method = "post" onSubmit = "return validasi()">
<div>
<label>Username: </label>
<input type ="text"name ="username"id ="username"/>
</div>
<div>
<label>Password: </label>
<input type ="Password" name="password" id ="password"/>
</div>
<div>
<input type="submit"value ="Login"class = "tombol"/>
</div>
</center>
</form>
</div>
</body>
<script type ="text/javascript">
function validasi(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if(username!=""&&password!=""){
		return true;
	} else {
		alert('Username dan Password harus diisi!');
return false;}}
</script>
</html>