<?php
include_once '.././config/dbconfig.php';

$query = 'SELECT id_pendaftaran , nama_s, nama_i, tgl_pendaftaran FROM pendaftaran INNER JOIN pendaftar ON pendaftaran.id_pendaftar = pendaftar.id_pendaftar
INNER JOIN suami ON pendaftar.NIK_suami = suami.NIK INNER JOIN istri ON istri.NIK = pendaftar.NIK_istri WHERE pendaftaran.status = "INVALID"';
$pendaftaran1 = mysqli_query($koneksi, $query);

 ?>
