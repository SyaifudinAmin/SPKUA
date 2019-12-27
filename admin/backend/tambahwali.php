<?php
include_once '../../config/dbconfig.php';

$jdwl1 = $_POST['jdwl1'];
$idpernikahan1 = $_POST['idpernikahan1'];
$nikwali = $_POST['nik_wali'];
$nm_wali = $_POST['nama_wali'];
$tgllahir_wali = $_POST['tgllhr_wali'];
$almt_wali = $_POST['almat_wali'];
$rt_wali = $_POST['rt_wali'];
$rw_wali = $_POST['rw_wali'];
$kel_wali = $_POST['kel_wali'];
$kec_wali = $_POST['kec_wali'];
$kab_wali = $_POST['kab_wali'];
$prov_wali = $_POST['prov_wali'];
$kd_wali = $_POST['kd_wali'];
$wrgngr_wali = $_POST['wrgngr_wali'];
$pkrjaan_wali = $_POST['pkrjaan_wali'];
$agm_wali = $_POST['agm_wali'];

$query = " INSERT INTO wali VALUES ('$nikwali','$nm_wali','$almt_wali','$rt_wali','$rw_wali','$kel_wali','$kec_wali','$kab_wali','$prov_wali','$kd_wali','$agm_wali','$pkrjaan_wali','$wrgngr_wali','$tgllahir_wali')";
$input = mysqli_query($koneksi,$query);

$query1 = "INSERT INTO pernikahan VALUES ('$idpernikahan1','$jdwl1','$nikwali')";
$input1 = mysqli_query($koneksi,$query1);

if ($input1) {
  echo "<div id='status'>sukses</div>";
  echo "<div id='idpernikahan'></div>";
} else {
  echo "<div id='status'>gagal</div>";
  echo "<div id='pesan'>".$error."</div>";
}

?>
