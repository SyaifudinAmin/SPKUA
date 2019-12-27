<?php
include_once '../../config/dbconfig.php';

$idpernikahan1 = $_POST['idprnkhn1'];
$idnkh1 = $_POST['idnkh1'];

$niks1 = $_POST['nik_saksi1'];
$nm_s1 = $_POST['nama_saksi1'];
// $tgllahir_s1 = $_POST['tgllhr_saksi1'];
$almt_s1 = $_POST['alamat_saksi1'];
$rt_s1 = $_POST['rt_saksi1'];
$rw_s1 = $_POST['rw_saksi1'];
$kel_s1 = $_POST['kel_saksi1'];
$kec_s1 = $_POST['kec_saksi1'];
$kab_s1 = $_POST['kab_saksi1'];
$prov_s1 = $_POST['prov_saksi1'];
$kd_s1 = $_POST['kd_saksi1'];
$wrgngr_s1 = $_POST['wrgngr_saksi1'];
$pkrjaan_s1 = $_POST['pkrjaan_saksi1'];
$agm_s1 = $_POST['agm_saksi1'];
$umr1 = $_POST['thun1'];

$niks2 = $_POST['nik_saksi2'];
$nm_s2 = $_POST['nama_saksi2'];
// $tgllahir_s2 = $_POST['tgllhr_saksi2'];
$almt_s2 = $_POST['alamat_saksi2'];
$rt_s2 = $_POST['rt_saksi2'];
$rw_s2 = $_POST['rw_saksi2'];
$kel_s2 = $_POST['kel_saksi2'];
$kec_s2 = $_POST['kec_saksi2'];
$kab_s2 = $_POST['kab_saksi2'];
$prov_s2 = $_POST['prov_saksi2'];
$kd_s2 = $_POST['kd_saksi2'];
$wrgngr_s2 = $_POST['wrgngr_saksi2'];
$pkrjaan_s2 = $_POST['pkrjaan_saksi2'];
$agm_s2 = $_POST['agm_saksi2'];
$umr2 = $_POST['thun2'];

$query = " INSERT INTO saksi VALUES ('$niks1','$nm_s1','$almt_s1','$rt_s1','$rw_s1','$kel_s1','$kec_s1','$kab_s1','$prov_s1','$kd_s1', '$agm_s1','$pkrjaan_s1','$wrgngr_s1','$umr1')";
$input = mysqli_query($koneksi,$query);
$error = mysqli_error($koneksi);

if ($input) {
  $query1 = " INSERT INTO saksi VALUES ('$niks2','$nm_s2','$almt_s2','$rt_s2','$rw_s2','$kel_s2','$kec_s2','$kab_s2','$prov_s2','$kd_s2', '$agm_s2','$pkrjaan_s2','$wrgngr_s2','$umr2')";
  $input1 = mysqli_query($koneksi,$query1);
  $error1 = mysqli_error($koneksi);
  if ($input1) {

    $query2 = " INSERT INTO nikah VALUES ('$idnkh1','$idpernikahan1','$niks1','$niks2')";
    $input2 = mysqli_query($koneksi,$query2);
    $error2 = mysqli_error($koneksi);
    if ($input2) {
      echo "<div id='status'>sukses</div>";
      echo "<div id='idnikah'></div>";
    }else {
      echo "<div id='status'>gagal</div>";
      echo "<div id='pesan'>".$error2."</div>";  // code...
    }

  }else {
    echo "<div id='status'>gagal</div>";
    echo "<div id='pesan'>".$error1."</div>";  // code...
  }

} else {
  echo "<div id='status'>gagal</div>";
  echo "<div id='pesan'>".$error."</div>";
}


?>
