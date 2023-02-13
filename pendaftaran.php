<?php
include("koneksi.php");
session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Data Peserta</title></head>
<center><h2>Data Peserta</h2></center>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
<body>
	<center><nav><a href="v_form.php"><button>Tambah Baru</button>
	</a></nav></center>
	<br>
	<table border="1" cellpadding="8" align="center" bgcolor="white">
	<thread>
    <tr>
    	<th>Id</th>
     	<th>Nama</th>
    	<th>Email</th>
    	<th>Tanggal lahir</th>
    	<th>Alamat</th>
    	<th>Tindakan</th>
    </tr>
</thread>
<body>
<?php 
   $sql = "SELECT * FROM masuk ";
   $query = mysqli_query($koneksi,$sql);
   while ($masuk =  mysqli_fetch_array($query)){
   	echo "<tr>";
   	echo "<td>".$masuk['id_masuk']."</td>";
   	echo "<td>".$masuk['nama']."</td>";
   	echo "<td>".$masuk['email']."</td>";
   	echo "<td>".$masuk['tanggal_lahir']."</td>";
   	echo "<td>".$masuk['alamat']."</td>";
   	echo "<td><a href ='edit.php?id =".$masuk['id_masuk']."'>Edit</a>|";
    echo "<a href = 'hapus.php?id =".$masuk['id_masuk']."'>Hapus</a>|</td>";  	
  
  }
 ?>
</body>
	</table>
	<p>Total :
		<?php echo mysqli_num_rows($query)?>
		<br>
		<center><nav><a href="/pkl bootstrap/"><button>Logout</button>
		</a></nav></center>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
