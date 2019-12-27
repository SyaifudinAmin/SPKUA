<?php
include_once '.././config/dbconfig.php';

$query = 'SELECT id_karyawan,username,password,nama_jabatan FROM karyawan inner join hak_akses on hak_akses.id_hak = karyawan.jabatan';
$karyawan = mysqli_query($koneksi, $query);

 ?>
