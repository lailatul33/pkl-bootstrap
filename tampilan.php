<?php
 include ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Peserta</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
	<h2>peserta yang sudah terdaftar</h2>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tanggal lahir</th>
			<th>Alamat</th>
		</tr>
		
		<?php 
		$sql = "SELECT * FROM masuk";
		$query = mysqli_query($db,$sql);

while ($masuk = mysqli_fetch_array($query)) {
	echo "<tr>";

	echo "<td>".$masuk['id_masuk']."</td>";
	echo "<td>".$masuk['nama']."</td>";
	echo "<td>".$masuk['email']."</td>";
	echo "<td>".$masuk['tanggal_lahir']."</td>";
	echo "<td>".$masuk'alamat']."</td>";

	echo "<td>";
	echo "<a href = 'edit.php?id=".$masuk['id_masuk']."'>Edit</a> | ";
	echo "<a href = 'hapus.php?id=".$masuk['id_masuk']."'>Hapus</a>  ";
	echo "</td>";

	echo "</tr>";	
}
?>
</table>
	<p>Total: <?php echo mysqli_num_rows($query)?>                     
	<a href="index.php"> Home </a>
		</p>
</body>
</html>