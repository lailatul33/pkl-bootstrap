<?php
include("koneksi.php");
//cek apakah tombol simpan sudah diklik atau belum
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form
	$id = $_POST['id_masuk'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	//buat query upda
	$sql ="UPDATE masuk SET id='$id_masuk',nama='$nama',email='$email', tanggal_lahir='$tanggal_lahir', alamat='$alamat' WHERE id_masuk= $id";
	 $query =mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	 //apakah query update berhasil
	 if ($query) { 
	 //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
	 header ('location:home.php?status=sukses');
	 }else{ header ('location:home.php?status=gagal'); 
	 //kalau gagal, alihkan  ke halaman index.php dengan status=gagal
	 
	 }
	 }
	?>
