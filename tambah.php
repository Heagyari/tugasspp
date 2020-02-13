<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Tambah Data</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 shadow">
                <form action="tambah_aksi.php" method="post">
                    <div class="form-group">
                        <label for="nisn">NISN :</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Isi NISN">
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS :</label>
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="Isi nis">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isi nama">
                    </div>
                    <div class="form-group">
                        <label for="id_kelas">ID Kelas :</label>
                        <input type="number" class="form-control" id="id_kelas" name="id_kelas" placeholder="Isi ID KELAS">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telp :</label>
                        <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Isi No Telp">
                    </div>
                    <div class="form-group">
                        <label for="id_spp">ID SPP :</label>
                        <input type="number" class="form-control" id="id_spp" name="id_spp" placeholder="Isi ID SPP">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-sm btn-success btn-block">Kirim</button>
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-block mb-3">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>