<?php
include_once '.././config/dbconfig.php';

$query = 'SELECT nikah.id_nikah, istri.nama_i, suami.nama_s, penjadwalan.tgl_nikah FROM nikah INNER JOIN pernikahan ON nikah.id_pernikahan = pernikahan.id_pernikahan INNER JOIN penjadwalan ON pernikahan.id_jadwal = penjadwalan.id_penjadwalan INNER JOIN pendaftaran ON penjadwalan.id_pendaftaran = pendaftaran.id_pendaftaran INNER JOIN pendaftar ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN suami ON pendaftar.NIK_suami = suami.NIK INNER JOIN istri ON pendaftar.NIK_istri=istri.NIK;';
$nikah = mysqli_query($koneksi, $query);

 ?>
