<?php
include_once '.././config/dbconfig.php';

$query = 'SELECT count(id_pendaftaran) AS jmldftr FROM pendaftaran';
$pendaftaran = mysqli_query($koneksi, $query);

$query2 = 'SELECT count(id_nikah) AS jmlnkh FROM nikah';
$pernikahan = mysqli_query($koneksi, $query2);

$query1 = 'SELECT count(id_penjadwalan) AS jmljadwal FROM penjadwalan';
$penjadwalan = mysqli_query($koneksi, $query1);

$query3 = 'SELECT count(id_pendaftaran) AS indftr FROM pendaftaran where pendaftaran.status = "INVALID"';
$inpendaftaran = mysqli_query($koneksi, $query3);

$query31 = 'SELECT count(id_pendaftaran) AS indftr1 FROM pendaftaran where pendaftaran.status = "INVALID"';
$inpendaftaran1 = mysqli_query($koneksi, $query31);

$datenow1 = date('Y-m-d');
$query4 = "SELECT count(id_penjadwalan) AS jadwalnow FROM penjadwalan WHERE tgl_nikah = '$datenow1'";
$jdwl = mysqli_query($koneksi,$query4);

$datenow = date('Y-m-d');
$query41 = "SELECT count(id_penjadwalan) AS jadwalnow1 FROM penjadwalan WHERE tgl_nikah = '$datenow' AND penjadwalan.wkt_nikah >= CURRENT_TIME()";
$jdwl1 = mysqli_query($koneksi,$query41);

 ?>
