<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="images/ITB-RESMI-MINI-removebg-preview.png">
<link type="text/css" href="style.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!--melakukan validasai terhadap inputan data menggunakan JavaScript -->
<script type="text/javascript">
function cek_form(frm){	
	if(frm.nim.value==""){
		alert("Silahkan lengkapi kolom User NIM");
		frm.nim.focus();
		return false;
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
<body class="body-tambah">
<div class="col-10 m-auto" style="padding: 100px 0 0 0;"></div>
    <h2 class="text-center fw-bold">Tambah Data Mahasiswa</h2>
        <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
            <!--input data akan diproses pada halaman nim-save.php-->
            <form name="form1" action="nim-save.php" method="post" onSubmit="return cek_form(this)" enctype="multipart/form-data">
                <!--method:POST -> ID/pengenal yg akan diparsing adalah atribut "name" pada masing-masing control-->
                <!--enctype="multipart/form-data" digunakan untuk kebutuhan upload file-->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nim</label>
                    <input name="nim" type="text" class="form-control" id="exampleFormControlInput1" maxlength="15">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" maxlength="50">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlInput1" maxlength="50"></textarea>
                </div>
                <div class="mb-3">
                    <p>Jenis Kelamin</p>
                        <input type="radio" name="jenis_kelamin" class="radio" checked>
                        <label for="genderInput" class="form-label">Laki-Laki</label>
                        <input type="radio" name="jenis_kelamin" class="radio">
                        <label for="genderInput" class="form-label">Perempuan</label>
                    </td>
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

    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
