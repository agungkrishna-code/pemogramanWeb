<!--
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@%%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@%%(
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*@@@%%%.
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@**,@@%%%%(
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@***@@@%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@****@@@%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*****@@@%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@#@@******@@@%%%%%%%*
@@@@@@@@@@@@@@@@@@@@@@@@@@%##@@******,@@@%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@@####@@*******@@@%%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@#####(@@*******@@@*%%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@######%@@.*******@@@%%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@@#######@@@*******%@@@%%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@%@@@########@@&*******@@@%%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@%%%@@@@#######@@/******@@@%%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@%%%%%%#@@@@@@###@@******@@@%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@%%%%%%%%%%%#@@@*@@.****@@@%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@#%%%%%%%%%%%%%%%%@@@@.***@@@%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@&@/%%%%%%%%%%%%%%%@@@**@@@(%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@%%%%%%%%%%%%%%%%(@@*@@@%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@%%%%%%%%%%%%%@@*%%%%%%%%%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@%(@#%%%%%%%%%%%%%%%%%%&*%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@,%%@@.%%%%%%%%(@%%%
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&@@@/%
Nama  : Dewa Gede Agung Krishnananda Sudewa
Nim   : 210030533
Kelas : BC213
-->

<?php
	require "koneksi.php"; //require digunakan untuk menyisipkan sebuah file php ke dalam file php lainnya.
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link type="text/css" href="style.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="images/ITB-RESMI-MINI-removebg-preview.png">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="home">
<?php
//query menampilkan seluruh data pada tabel mahasiswa
$sql="SELECT * FROM mahasiswa";

//menjalankan query ke database
$hasil = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

//result set lebih > 0 (query mengahasilkan record data)
if (mysqli_num_rows($hasil) > 0) {
	echo "<h1 style=\"text-align:center;\">DAFTAR MAHASISWA</h1>"; //caption
	//menampilkan jumlah data
	echo "<h2 style=\"text-align:center; color:red;\">Jumlah data: ". mysqli_num_rows($hasil)."</h2>";
	
	$counter = 1; //membuat nomor urut data
	//menampilkan record ke web (bentuk tabel)
	//membuat header tabel
	echo "<table class=\"table table-bordered\" border=\"1\">
		<tr class=\"table-dark\">
			<th>No</th>
			<th>NIM</th>
			<th>Nama User</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Foto</th>
			<th>Action</th>
		</tr>";
			
			//membuat isi tabel dalam perulangan / looping
	while($data = mysqli_fetch_array($hasil)) { //fungsi dari PHP yang digunakan untuk mengambil setiap baris dari hasil yang dikembalikan oleh perintah SQL yang dieksekusi menggunakan objek koneksi MySQL.
		$jns_sts = "1";
			$sts = "Laki-Laki";
			if ($data["jenis_kelamin"] == 0) {
		$jns_sts="0";
			$sts = "Perempuan";}
		echo "<tr class=\"table-primary\">
			<td>$counter</td>
			<td>$data[nim]</td>
			<td>$data[nama]</td>
			<td>$data[alamat]</td>
			<td>$sts</td>
			<td><img src=\"images/$data[foto]\" alt=\"$data[nim]\" width=\"64px\"/></td> 
			</td> 
			<td>
				<a class=\"btn btn-warning\" href=\"nim-view.php?id=$data[nim]\">Ubah</a> 
				<a class=\"btn btn-danger\"href=\"nim-del.php?id=$data[nim]\">Hapus</a>
			</td>
		</tr>";
		$counter++;//increment,menambah 1 di setiap perulangan 
	}
	echo "</table>";

} else {
	echo "<h3>Data tidak tersedia!</h3>";	
}

//menutup koneksi
mysqli_close($koneksi);	//fungsi untuk menutup koneksi ke database MySQL yang dibuka dengan mysqli_connect.
?>
<div class="text-center">
	<h2><a class="btn btn-primary" href="nim-add.php">Tambah Mahasiswa</a></h2>
</div>
<!-- Bootstrap Javascript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>