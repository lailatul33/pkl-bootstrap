<?php
include ("koneksi.php");
if (isset($_GET['id_masuk'])){
	$title ="Edit";
	$url ="proses_edit.php";
	$id_admin = $_GET['id_masuk'];
    //buat query untuk ambil data dari database
    $sql ="SELECT * FROM masuk WHERE id_masuk= $id_masuk";
	$query = mysqli_query ($koneksi,$sql);
	$masuk = mysqli_fetch_assoc ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) <1){
		die("data tidak ditemukan...");}
		//url jika edit data
	}else{
		$title ="Add";
		//url jika tambah data
		$url='proses_pendaftaran.php';

	}
	?>
	<html> 
	<head><title>Formulir Editn</title></head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<body>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<body>
	<form action ="proses_edit.php" method = "POST">
	<fieldset>
	<legend><h2>Form Edit </h2></legend>
	<div>
		<label for ='id_masuk'>Id :</label><br>
		<input type ="text" name ="id_masuk" value =" <?php if (isset($_GET['id_masuk']))
		{echo $masuk['id_masuk'];} ?> "/>
	</div>
	<div>
		<label for ='nama'>Nama :</label><br>
		<input type ="text" name ="nama" value =" <?php if (isset($_GET['id_masuk']))
		{echo $masuk['nama'];} ?> "/>
	</div>
	<div>
	<label for ='email'>Email :</label><br>
		<input type ="text" name ="email" value =" <?php if (isset($_GET['id_masuk'])) 
		{echo $masuk['email'];} ?> "/>
	</div>
	<div>
	<label for ='tanggal_lahir'>Tanggal Lahir: </label><br>
	<input type ="date" name ="tanggal_lahir" value ="<?php if (isset($_GET['id_masuk'])) 
	{echo $masuk['tanggal_lahir'];}?>"/>
	<div>
	<label for ="alamat">Alamat: </label><br>
	<input type = "text" name ="alamat" value ="<?php if (isset($_GET['id_masuk']))
		{echo $masuk['alamat'];}?>"/>
	</div>
	<hr>
	<div>
	<input type ="submit" value ="simpan" name ="simpan"/>
	</div>
	</fieldset>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</form></body></html>