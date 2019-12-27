<?php
include_once '.././config/dbconfig.php';

$tgl = date('Y-m-d');

$query = "SELECT id_penjadwalan, wkt_nikah ,nama_s ,nama_i  FROM penjadwalan INNER JOIN pendaftaran ON penjadwalan.id_pendaftaran = pendaftaran.id_pendaftaran
INNER JOIN pendaftar ON pendaftar.id_pendaftar = pendaftaran.id_pendaftar INNER JOIN suami ON pendaftar.NIK_suami = suami.NIK INNER JOIN istri ON istri.NIK = pendaftar.NIK_istri WHERE tgl_nikah = '$tgl'";
$jadwal = mysqli_query($koneksi, $query);

 ?>
