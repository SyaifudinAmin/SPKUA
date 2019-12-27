<?php
include_once '../../config/dbconfig.php';

$tgl = $_GET['tgl'];

$query = "SELECT id_penjadwalan, wkt_nikah ,nama_s ,nama_i  FROM penjadwalan INNER JOIN pendaftaran ON penjadwalan.id_pendaftaran = pendaftaran.id_pendaftaran
INNER JOIN pendaftar ON pendaftar.id_pendaftar = pendaftaran.id_pendaftar INNER JOIN suami ON pendaftar.NIK_suami = suami.NIK INNER JOIN istri ON istri.NIK = pendaftar.NIK_istri WHERE tgl_nikah = '$tgl'";
$jadwal = mysqli_query($koneksi, $query);

while ($a = mysqli_fetch_object($jadwal)) {

?>
<tr>
  <td><?php echo $a->id_penjadwalan ?></td>
  <td><?php echo substr($a->wkt_nikah,0,5) ?></td>
  <td><?php echo $a->nama_s ?></td>
  <td><?php echo $a->nama_i ?></td>
</tr>
<?php
}
 ?>
