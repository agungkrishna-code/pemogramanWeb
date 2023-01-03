<?php
  include './config/koneksi.php';

  $nama     = $_POST['nama'];
  $nim      = $_POST['nim'];
  $gender   = $_POST['gender'];
  $email    = $_POST['emial'];
  $alamat   = $_POST['alamat'];
  $whatsapp = $_POST['whatsapp'];

$query = "INSERT INTO mahasiswa (nama,nim,jenis_kelamin,email,alamat,whatsapp) VALUES ('$nama','$nim','$gender','$email','$alamat','$whatsapp')";
$result = mysqli_query($koneksi, $query);

if ($result) {
  header('location: index.php');
} else {
  echo "data gagal ditambahkan";
}
?>