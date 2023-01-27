<?php
require "koneksi.php";

//data dari halaman nim-add.php dimasukkan ke dalam variable dgn method POST
$nim=$_POST['nim']; //input name="NIM" 
$nama=$_POST['nama']; //input name="nama"
$alamat=$_POST['alamat']; //input name="alamat"
$jenis_kelamin=$_POST['jenis_kelamin']; //input name="jenis kelamin"
$nama_file = $_FILES['foto']['name']; //menyimpan nama file pada tabel
$asal_file = $_FILES['foto']['tmp_name']; //digunakan untuk upload file ke server

//directory lokasi Foto Profile pada server
//$_SERVER['DOCUMENT_ROOT'] -> Foder HTDOCS -> localhost
$tujuan_file = $_SERVER['DOCUMENT_ROOT'] . "/uas_210030533/images/".$_FILES['foto']['name']; //htdocs > 210030533 > images

$jns=1; //nilai default/statis (dibentuk secara manual)

//cek apakah NIM sudah ada dalam tabel mahasiswa
$sql ="select * from mahasiswa where (nim = '$nim')";
$hasil = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

if (mysqli_num_rows($hasil) > 0) {
	//mahasiswa sudah ada, tampilkan messagebox dan redirect kembali ke halaman nim-add.php
	echo "<script>alert('Mahasiswa dengan NIM tersebut sudah ada, silahkan gunakan NIM lainnya.');
		document.location='nim-add.php'</script>";}

else {
//mahasiswa belum ada (melanjutkan simpan data baru)
//query insert data ke tabel mahasiswa
$sql="insert into mahasiswa (nim, nama, alamat, jenis_kelamin, foto)
values ('$nim', '$nama', '$alamat', '$jenis_kelamin', '$nama_file');";

//eksekusi perintah insert into
$save = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

if ($save){
	$copy=copy($asal_file, $tujuan_file); //copy file ke server
	////kembali ke halaman home, tanpa message box
	//header("location:home.php"); 
	
	//tampilkan messagebox berhasil simpan dan redirect ke halaman home.php
	echo "<script>alert('Mahasiswa telah berhasil disimpan.'); document.location='home.php'</script>";
} 
else {
	//echo mysqli_error($save);
	echo "<h1>Mahasiswa gagal disimpan!"; 
	echo "<a href=\"nim-add.php\">Ulangi Kembali</a>";}
}

//menutup koneksi
mysqli_close($koneksi);

?>