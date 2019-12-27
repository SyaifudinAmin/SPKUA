<?php
include_once '.././config/dbconfig.php';

$tgl = $_GET['tgl_menikah'];
$query ='SELECT penjadwalan.wkt_nikah FROM penjadwalan
WHERE penjadwalan.wkt_nikah NOT IN(
SELECT penjadwalan.wkt_nikah FROM penjadwalan) AND penjadwalan.tgl_nikah = ".$tgl"';

 ?>
