<?php

include_once '../../config/dbconfig.php';

//menghapus data yang waktunya lebih kecil 48 jam dari sekarang
$query = "DELETE FROM pendaftaran WHERE tgl_pendaftaran < DATE_SUB(NOW(), INTERVAL 48 HOUR) AND status = 'INVALID'";
$exe = mysqli_query($koneksi, $query);
 ?>
