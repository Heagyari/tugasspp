<?php
    require 'koneksi.php';
    $query = mysqli_query($koneksi, 'select * from siswa');
    $no = 1;
    // $results = mysqli_fetch_assoc($query);
    // var_dump($results);
?>
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
        <div class="row justify-content-center">
            <div class="col">
                <h2 class="text-center">CRUD DATA SISWA = Aplikasi Pembayaran SPP</h2>
                <br>
                <a href="tambah.php" class="float-right btn btn-sm btn-outline-success mb-2">+ Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover shadow">
                        <tr>
                            <th class="text-center">NO</th>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>NAMA</th>
                            <th>ID KELAS</th>
                            <th>ALAMAT</th>
                            <th>NO TELEPON</th>
                            <th class="text-center">ID SPP</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                        <?php foreach ($query as $result): ?>
                            <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $result['nisn'] ?></td>
                            <td><?= $result['nis'] ?></td>
                            <td><?= $result['nama'] ?></td>
                            <td><?= $result['id_kelas'] ?></td>
                            <td><?= $result['alamat'] ?></td>
                            <td><?= $result['no_telp'] ?></td>
                            <td class="text-center"><?= $result['id_spp'] ?></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success mx-1 my-1">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger mx-1 my-1">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>