<?php
include_once '.././config/dbconfig.php';
$kode = "SELECT max(id_nikah) as kode FROM nikah";
// $id = "SELECT max(id_berobat) as id FROM pasien_berobat";

$carikode = mysqli_query($koneksi,$kode);
// $carikode2 = mysqli_query($koneksi,$id);
$tm_cari = mysqli_fetch_array($carikode);
// $tm_cari2 = mysqli_fetch_array($carikode2);
$kd=substr($tm_cari['kode'],3,6);
$tambah=$kd+1;
if($tambah<10){
  $idnkh="NKH00000".$tambah;
}else{
  $idnkh="NKH0000".$tambah;
}
// $id = $tm_cari2['id']+=1;
// date_default_timezone_set("Asia/Jakarta");
// $tanggal = date("Y-m-d");
?>
