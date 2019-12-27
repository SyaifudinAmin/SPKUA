<?php
include_once '../../config/dbconfig.php';
// $idjwl = $_POST['idjdwal'];
$idjwl = $_POST['idjdwal'];
$idpen1 = $_POST['pdf1'];
$idkar1 = $_POST['idkar1'];
$tglnkh = $_POST['tgl_menikah'];
$wktnkh = $_POST['wkt_menikah'];


$query ="INSERT INTO penjadwalan VALUES ('$idjwl','$idpen1','$idkar1','$tglnkh','$wktnkh')";
$input = mysqli_query($koneksi,$query);
$error = mysqli_error($koneksi);


if ($input) {
  echo "<div id='status'>sukses</div>";
  echo "<div id='idjadwal1'></div>";
} else {
  echo "<div id='status'>gagal</div>";
  echo "<div id='pesan'>".$error."</div>";
  echo "<div id='rtr'>".$wktnkh."</div>";
}
?>
