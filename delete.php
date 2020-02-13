<?php
require 'koneksi.php';
    $nisnId = $_GET['nisn'];
    // var_dump($nisnId);

    $query = mysqli_query($koneksi, "DELETE FROM `siswa` WHERE `siswa`.`nisn` = '$nisnId'");

    // redirect

    header('location:index.php');
?>