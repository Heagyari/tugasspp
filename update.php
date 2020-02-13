<?php
    $nisnId = $_POST['nisnId'];
require 'koneksi.php';
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_spp = $_POST['id_spp'];

    mysqli_query($koneksi, "UPDATE `siswa` SET `nisn` = '$nisn', `nis` = '$nis', `nama` = '$nama', `id_kelas` = '$id_kelas', `alamat` = '$alamat', `no_telp` = '$no_telp', `id_spp` = '$id_spp' WHERE `siswa`.`nisn` = '$nisnId'");

    // Redirect

    header('location:index.php');
?>