<?php
    require 'koneksi.php';
    $nisn = $_GET['nisn'];
    // var_dump($nisn);
    $query = mysqli_query($koneksi, "select * from siswa where nisn='$nisn'");
    $query2 = mysqli_fetch_object($query);
    // var_dump($query2->alamat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<?php foreach ($query as $result): ?>

<?php endforeach ?>
    <form action="update.php" method="post">
        <input type="hidden" name="nisnId" value="<?= $query2->nisn ?>">
        <label for="nisn">NISN</label>
        <input type="text" name="nisn" id="nisn" value="<?= $query2->nisn; ?>">
        <br>
        <label for="nis">NIS</label>
        <input type="text" name="nis" id="nis" value="<?= $query2->nis; ?>">
        <br>
        <label for="nama">NAMA</label>
        <input type="text" name="nama" id="nama" value="<?= $query2->nama; ?>">
        <br>
        <label for="id_kelas">ID KELAS</label>
        <input type="text" name="id_kelas" id="id_kelas" value="<?= $query2->id_kelas; ?>">
        <br>
        <label for="alamat">ALAMAT</label>
        <input type="text" name="alamat" id="alamat" value="<?= $query2->alamat; ?>">
        <br>
        <label for="no_telp">NO TELP</label>
        <input type="text" name="no_telp" id="no_telp" value="<?= $query2->no_telp; ?>">
        <br>
        <label for="id_spp">ID SPP</label>
        <input type="text" name="id_spp" id="id_spp" value="<?= $query2->id_spp; ?>">
        <br>
        <button type="submit">KIRIM</button>
    </form>
</body>
</html>