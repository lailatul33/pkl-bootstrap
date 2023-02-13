<?php
include("koneksi.php");
if (isset($_GET['id_masuk'])){
	$title ="Edit";
	$url ="proses_edit.php";
	$id = $GET['id_masuk'];
    //buat query untuk ambil data dari database
    $sql ="SELECT * FROM id_masuk WHERE id_masuk = $id";
	$query = mysqli_query ($koneksi,$sql);
	$masuk= mysqli_fetch_assoc ($query);
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
	<head><title> Formulir daftar  </title></head>
	<body>
	<header><h3> Formulir Daftar</h3></header>
	<form action ="proses_pendaftaran.php" method = "POST">
	<fieldset>
	<legend><h2>Form Daftar </h2></legend>
	<div>
	<label for ='id_masuk'>Id: </label><br>
	<input type ="text" name ="id_masuk" value =" <?php if (isset($_GET['id_masuk']))
	{echo $masuk['id_masuk'];} ?> "/>
	</div>
	<div>
	<label for ='nama'>Nama: </label><br>
	<input type ="text" name ="nama" value =" <?php if (isset($_GET['id_masuk'])) 
	{echo $masuk['nama'];} ?> "/>
	</div><div>
	<label for = 'email'>Email: </label><br>
	<textarea name ="email" row = "5"> <?php if (isset($_GET['id_masuk']))
	{echo $masuk['email'];} ?> </textarea>
	</div>
	<div>
	<label for ='tanggal_lahir'>Tanggal lahir: </label><br>
	<input name = "tanggal_lahir" row="5" type ="Date"
	<?php if (isset($_GET['id_masuk'])) {echo $masuk['tanggal_lahir'];?> />"
	<?php } ?>
	</div><div>
	<label for ="alamat">Alamat: </label><br>
	<textarea name ="alamat" row = "5"> <?php if (isset($_GET['id_masuk']))
	{echo $masuk['alamat'];} ?> </textarea>
	</div>
	</div>
	<hr>
	<div>
	<input type ="submit" value ="simpan" name = "simpan" name ="simpan"/>
	</div>
	</fieldset>
	</form></body></html>