<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="p-3">
    <h2>CRUD DATA SISWA = Aplikasi Pembayaran SPP</h2>
    <br>
    <a href="tambah.pphp">+ Tambah Data Siswa</a>
    <br> <br>
    <table class="table table-bordered table-hover">
        <tr>
            <th>NO</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>ID KELAS</th>
            <th>ALAMAT</th>
            <th>NO TELEPON</th>
            <th>ID SPP</th>
            <th>ACTION</th>
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, 'select * from siswa');
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $d['nisn']; ?></td>
                    <td><?php echo $d['nis']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td class="text-center"><?php echo $d['id_kelas']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_telp']; ?></td>
                    <td class="text-center"><?php echo $d['id_spp']; ?></td>
                    <td class="text-center">
                        <a href="edit.php?id=<?php echo$d['id']; ?>" class="text-decoration-none">EDIT</a>
                        <a href="hapus.php?id=<?php echo$d['id']; ?>" class="text-decoration-none">HAPUS</a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>