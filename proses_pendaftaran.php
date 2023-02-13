<?php 
include ( "koneksi.php");
//cek apakah tombol simpan sudah diklik atau belum
if($_SERVER['REQUEST_METHOD']=="POST"){
	//ambil data dari form
	$id = $_POST['id_masuk'];
	$nama =$_POST['nama'];
	$email =$_POST['email'];
	$tgl_lahir =$_POST['tanggal_lahir'];
	$alamat =$_POST['alamat'];
	//buat query
	$sql = "INSERT INTO masuk(id_masuk, nama,email,tanggal_lahir,alamat) VALUE ('$id','$nama','$email','$tgl_lahir','$alamat')";
	$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	//apakah query update berhasil
	if ($query){
	//kalau berhasil,alihkan ke hlaman index.php dengan status = sukses
	header('location:pendaftaran.php?status=sukses');
	}elseif (header('location:pendaftaran.php?status=gagal')) {
	//kalau gagal,alihkan ke halaman index.php dengan status = gagal
	}
}else{
	die("Akses dilarang...");
}
?>