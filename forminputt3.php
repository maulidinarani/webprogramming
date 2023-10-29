<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widrh=device-widrh, initial-scale=1.0">
    <title>Form Registarasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-20 col-sm-20">
        <h1 class="text-center">Form Registrasi</h1>
        <hr>
        Isi Data dibawah ini:<br>
        <form action="formt3.php" method="POST" enctype="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label> 
                <input type="text" class="form-control" name="nama" id="nama" 
                placeholder="Nama anda" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label> 
                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat Lahir</label> 
                <input type="text" class="form-control" name="tempat" id="tempat" 
                placeholder="Tempat Lahir" required>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Lahir</label> 
                <input type="date" class="form-control" name="tanggal" id="tanggal" 
                placeholder="Tanggal Lahir" required>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis Kelamin</label>
            </div>
            <div class="mb-3">
                <label class="radio-inline">
                <input type="radio" name="jenis" id="jenis" value="Laki-Laki" required data-fv-notempty-message="Tidak boleh kosong"> Laki-laki
                </label>
                <label class="radio-inline">
                <input type="radio" name="jenis" id="jenis" value="Perempuan" required data-fv-notempty-message="Tidak boleh kosong"> Perempuan
                </label>
            </div>

            <div class="mb-3">
                <label for="pendidikan" name="pendidikan" id="pendidikan" >Pendidikan</label>
                <select class="form-select" name="pendidikan" aria-label="Default select example">
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                </select>
            </div>
 
            <div align="center";>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="cancel" class="btn btn-default">Cancel</button>
            </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
