<?php
include_once '../../config/dbconfig.php';

$now1 = $_GET['now'];

$query = "SELECT jam from waktu_nikah WHERE jam NOT IN (SELECT penjadwalan.wkt_nikah FROM penjadwalan WHERE penjadwalan.tgl_nikah = '$now1');";
$get =  mysqli_query($koneksi,$query);
$option = '';
while ($a = mysqli_fetch_assoc($get)) {
  $option .= '<option value = "'.$a['jam'].'">'.substr($a['jam'],0,5).'</option>';
}
 ?>


 <select class="form-control" name="wkt_menikah" id="wkt_menikah">
   <?php echo $option; ?>
 </select>
