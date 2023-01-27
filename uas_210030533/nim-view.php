<?php
require "koneksi.php";
?>

<!doctype html>
<html>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="images/ITB-RESMI-MINI-removebg-preview.png">
<link type="text/css" href="style.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!--melakukan validasai terhadap inputan data menggunakan JavaScript -->
<script type="text/javascript">
function cek_form(frm){	
	if(frm.nim.value==""){
		// alert("Silahkan lengkapi kolom User NIM");
		// frm.nim.focus();
		// return false;
	}else if(frm.nama.value==""){
		alert("Silahkan lengkapi kolom Nama");
		frm.nama.focus();
		return false;
	}else if(frm.alamat.value==""){
		alert("Silahkan lengkapi kolom Alamat");
		frm.alamat.focus();
		return false;
    }else if(frm.jenis_kelamin.value==""){
		alert("Silahkan pilih jenis Kelamin");
		frm.jenis_kelamin.focus();
		return false;
	}else if(frm.foto.value==""){
		alert("Silahkan pilih file Foto Profile");
		frm.foto.focus();
		return false;
	}else return true;
}
</script>
</head>
<body class="body-ubah">
	<!-- <h1 class="p-5" style="text-align:center;">UBAH DATA MAHASISWA</h1> -->
<?php
//data dari halaman home.php dimasukkan ke dalam variable dgn method GET
$nim=$_GET['id']; 

//load data mahasiswa sesuai dengan NIM
$sql ="select * from mahasiswa where (nim = '$nim')";

//eksekusi query
$hasil = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

//jika record ditemukan
if (mysqli_num_rows($hasil) > 0) {
	
//Menampilkan data mahasiswa pada script HTML
$data = mysqli_fetch_array($hasil);
?>

<!--input data akan diproses pada halaman nim-save.php-->
<div class="col-10 m-auto" style="padding: 100px 0 0 0;"></div>
    <h2 class="text-center fw-bold">Ubah Data Mahasiswa</h2>
    <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
        <form name="form1" action="nim-update.php" method="post" onSubmit="return cek_form(this)" enctype="multipart/form-data">
        <!--method:POST -> ID/pengenal yg akan diparsing adalah atribut "name" pada masing-masing control-->
        <!--enctype="multipart/form-data" digunakan untuk kebutuhan upload file -->
        <!--menyisipkan kode PHP pada script HTML-->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nim</label>
            <input type="text" name="nim" class="form-control" id="exampleFormControlInput1" maxlength="15" value="<?php echo "$data[nim]"; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" maxlength="50" value="<?php echo "$data[nama]"; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" maxlength="50" value="<?php echo "$data[alamat]"; ?>">
        </div>
        <div class="mb-3">
            <p>Jenis Kelamin</p>
            <input name="jenis_kelamin" type="radio" id="jns" value="1" <?php if($data['jenis_kelamin']==1){ echo "checked=checked";}  ?>/> Laki-laki
            <input name="jenis_kelamin" type="radio" id="jns" value="0" <?php if($data['jenis_kelamin']==0){ echo "checked=checked";}  ?>/> Perempuan
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto Profil</label>
            <input name="foto" class="form-control" type="file" id="formFile">
        </div>
        <button type="submit" class="btn btn-success" value="Simpan">Submit</button>
        <button type="reset" class="btn btn-secondary" value="Reset">Reset</button>
        <a class="btn btn-primary" style="color: white; text-decoration: none;" href="home.php">Kembali</a>
        </form>
    </div>

<?php
}
else {//tidak ada mahasiswa dengan nama yg digunakan 
	echo "<script>alert('Data mahasiswa tidak ditemukan.');
	document.location='home.php'</script>";
}
?>

<!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
