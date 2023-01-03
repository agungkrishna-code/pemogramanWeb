<?php
  include './config/koneksi.php';

  $id       = $_POST['id'];
  $nama     = $_POST['nama'];
  $nim      = $_POST['nim'];
  $gender   = $_POST['gender'];
  $email    = $_POST['email'];
  $alamat   = $_POST['alamat'];
  $whatsapp = $_POST['whatsapp'];

$query = "UPDATE mahasiswa SET
      nama          = '$nama',
      nim           = '$nim',
      jenis_kelamin = '$gender',
      email         = '$email',
      alamat        = '$alamat',
      whatsapp      = '$whatsapp'
      WHERE id      = $id";

$result = mysqli_query($koneksi, $query);

if ($result) {
  header('location: index.php');
} else {
  echo "data gagal ditambahkan";
}
?>