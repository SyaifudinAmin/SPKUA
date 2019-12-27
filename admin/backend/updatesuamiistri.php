<?php
include_once '../../config/dbconfig.php';

$pdf = $_POST['pdf'];
$idkar = $_POST['idkar'];
$niksuami = $_POST['niks1'];
$nm_s = $_POST['namas'];
$tmptlahir_s = $_POST['tmptlhrs'];
$tgllahir_s = $_POST['tgllhrs'];
$almt_s = $_POST['almts'];

$rt_s = $_POST['rts'];
$rw_s = $_POST['rws'];
$kel_s = $_POST['kels'];
$kec_s = $_POST['kecs'];
$kab_s = $_POST['kabs'];
$prov_s = $_POST['provs'];
$kd_s = $_POST['kds'];

$wrgngr_s = $_POST['wrgngrs'];
$pkrjaan_s = $_POST['pekerjaans'];
$agm_s = $_POST['agms'];
$pddakhir_s = $_POST['pnddkns'];

$nikistri = $_POST['niki1'];
$nm_i = $_POST['namai'];
$tmptlahir_i = $_POST['tmptlhri'];
$tgllahir_i = $_POST['tgllhri'];
$almt_i = $_POST['almti'];

$rt_i = $_POST['rti'];
$rw_i = $_POST['rwi'];
$kel_i = $_POST['keli'];
$kec_i = $_POST['keci'];
$kab_i = $_POST['kabi'];
$prov_i = $_POST['provi'];
$kd_i = $_POST['kdi'];

$wrgngr_i = $_POST['wrgngri'];
$pkrjaan_i = $_POST['pekerjaani'];
$agm_i = $_POST['agmi'];
$pddakhir_i = $_POST['pnddkni'];

$query12="UPDATE Pendaftaran SET pendaftaran.id_karyawan ='$idkar', pendaftaran.status='VALID' WHERE pendaftaran.id_pendaftaran = '$pdf' ";
$update12 = mysqli_query($koneksi,$query12);


$query="UPDATE suami SET suami.nama_s='$nm_s', suami.tmpt_lhr='$tmptlahir_s' , suami.tgl_lhr='$tgllahir_s',
 suami.alamat='$almt_s', suami.rt ='$rt_s', suami.rw ='$rw_s', suami.kelurahan = '$kel_s', suami.kecamatan = '$kec_s',
 suami.kabupaten = '$kab_s', suami.provinsi ='$prov_s', suami.kdpos = '$kd_s',
  suami.wrgngr='$wrgngr_s', suami.pekerjaan='$pkrjaan_s', suami.agama='$agm_s',
  suami.pnddkn_akhir='$pddakhir_s' WHERE suami.NIK ='$niksuami'";
  $input=mysqli_query($koneksi,$query);

$query1 = "UPDATE istri SET istri.nama_i ='$nm_i', istri.tmpt_lhr='$tmptlahir_i', istri.tgl_lhr='$tgllahir_i',
istri.alamat='$almt_i', istri.rt ='$rt_i', istri.rw ='$rw_i', istri.kelurahan = '$kel_i', istri.kecamatan = '$kec_i',
istri.kabupaten = '$kab_i', istri.provinsi ='$prov_i', istri.kdpos = '$kd_i',
istri.wrgngr='$wrgngr_i', istri.pekerjaan='$pkrjaan_i',istri.agama='$agm_i',
istri.pnddkn_akhir='$pddakhir_i' WHERE istri.NIK='$nikistri'";
$input1 = mysqli_query($koneksi,$query1);

if ($input1) {
  echo "<div id='status'>sukses</div>";
} else {
  echo "<div id='status'>gagal</div>";
  echo "<div id='pesan'>".$error."</div>";
}


 ?>
