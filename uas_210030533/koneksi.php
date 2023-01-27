<?php
$host="localhost";
$username="root";
$password="";
$database="uas";

//membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database); // fungsi PHP yang digunakan untuk menghubungkan ke server MySQL.

//cek koneksi
if (!$koneksi) {
	//error
	die("Koneksi gagal: " .  mysqli_connect_error ()); // adalah fungsi PHP yang digunakan untuk mengecek kesalahan saat mencoba menghubungkan ke server MySQL menggunakan fungsi mysqli_connect()
}
?>