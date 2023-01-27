<?php
require "koneksi.php";

//data dari halaman nim-view.php dimasukkan ke dalam variable dgn method POST
$nim=$_POST['nim']; //input name="NIM" 
$nama=$_POST['nama']; //input name="nama"
$alamat=$_POST['alamat']; //input name="alamat"
$jenis_kelamin=$_POST['jenis_kelamin']; //input name="jenis kelamin"
$nama_file = $_FILES['foto']['name']; //menyimpan nama file pada tabel
$asal_file = $_FILES['foto']['tmp_name']; //digunakan untuk upload file ke server

//directory lokasi Foto Profile pada server
//$_SERVER['DOCUMENT_ROOT'] -> Foder HTDOCS -> localhost
$tujuan_file = $_SERVER['DOCUMENT_ROOT'] . "/uas_210030533/images/".$_FILES['foto']['name']; //htdocs > 210030533 > images

//membuat variable untuk concate query sql dgn kondisi tertentu
$x="";
$y="";

//query basic
$x="update mahasiswa set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin'";

if ($nama_file != "") { //merubah foto jika ada file yg diupload
	$y=", foto='$nama_file' ";
}

//menggabungkan ketiga query dan menambahkan klausa where
$sql = $x . $y . " where (nim = '$nim')";

//eksekusi perintah update
$update = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

//data berhasil di-update
if ($update){
	
	if ($nama_file != "") { //ada file yg diupload
	$copy=copy($asal_file, $tujuan_file);} //copy file foto ke server

	//tampilkan messagebox berhasil update dan redirect ke halaman home.php
	echo "<script>alert('Mahasiswa telah berhasil di-update.'); document.location='home.php'</script>";
} 
else {
	echo "<script>alert('Mahasiswa gagal di-update. Silahkan ulangi kembali.'); document.location='nim-view.php?id=$nim'</script>";}

//menutup koneksi
mysqli_close($koneksi);

?>