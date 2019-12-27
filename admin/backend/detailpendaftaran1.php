
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_kua');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$idpendaftaran = $_GET['id_pendaftaran'];
$query = "SELECT suami.NIK AS 'niks', suami.nama_s, suami.tmpt_lhr AS
 'tpts', suami.tgl_lhr AS 'tgls', suami.alamat AS 'almts', suami.rt AS 'rts', suami.rw AS 'rws', suami.kelurahan AS 'kels',
 suami.kecamatan AS 'kecs', suami.kabupaten AS 'kabs', suami.provinsi AS 'provs', suami.kdpos AS 'kds', suami.wrgngr AS
 'wrgs',suami.pekerjaan AS 'pkrs',suami.agama 'agms', suami.pnddkn_akhir AS
 'pdds',istri.NIK AS 'niki', istri.nama_i, istri.tmpt_lhr AS
 'tpti', istri.tgl_lhr AS 'tgli', istri.alamat AS 'almti', istri.rt AS 'rti', istri.rw AS 'rwi', istri.kelurahan AS 'keli',
 istri.kecamatan AS 'keci', istri.kabupaten AS 'kabi', istri.provinsi AS 'provi', istri.kdpos AS 'kdi', istri.wrgngr AS
  'wrgi', istri.pekerjaan AS 'pkri', istri.agama AS
   'agmi', istri.pnddkn_akhir AS 'pddi'
FROM pendaftaran INNER JOIN pendaftar ON
 pendaftaran.id_pendaftar = pendaftar.id_pendaftar INNER JOIN suami ON
  pendaftar.NIK_suami = suami.NIK INNER JOIN istri ON
   pendaftar.NIK_istri = istri.NIK WHERE id_pendaftaran = '$idpendaftaran'";
$data = mysqli_query($koneksi,$query);
$login =mysqli_fetch_object($data);
 ?>

<!-- <div id = "idlabel"><?php ?></div> -->
<!-- <div id="status"><?php  ?></div> -->
<!-- <div id = "idlabel"><?php ?></div> -->
<div id="idpernikahan"><?php echo $idpendaftaran ?></div>

<div id="niks"><?php echo $login->niks ?></div>
<div id="namas"><?php echo $login->nama_s ?></div>
<div id="tmpts"><?php echo $login->tpts ?></div>
<div id="tgls"><?php echo $login->tgls ?></div>
<div id="almts"><?php echo $login->almts ?></div>
<div id="rts"><?php echo $login->rts ?></div>
<div id="rws"><?php echo $login->rws ?></div>
<div id="kels"><?php echo $login->kels ?></div>
<div id="kecs"><?php echo $login->kecs ?></div>
<div id="kabs"><?php echo $login->kabs ?></div>
<div id="provs"><?php echo $login->provs ?></div>
<div id="kds"><?php echo $login->kds ?></div>
<div id="wrgas"><?php echo $login->wrgs ?></div>
<div id="pekers"><?php echo $login->pkrs ?></div>
<div id="agms"><?php echo $login->agms ?></div>
<div id="pdds"><?php echo $login->pdds ?></div>

<div id="niki"><?php echo $login->niki ?></div>
<div id="namai"><?php echo $login->nama_i ?></div>
<div id="tmpti"><?php echo $login->tpti ?></div>
<div id="tgli"><?php echo $login->tgli ?></div>
<div id="almti"><?php echo $login->almti ?></div>
<div id="rti"><?php echo $login->rti ?></div>
<div id="rwi"><?php echo $login->rwi ?></div>
<div id="keli"><?php echo $login->keli ?></div>
<div id="keci"><?php echo $login->keci ?></div>
<div id="kabi"><?php echo $login->kabi ?></div>
<div id="provi"><?php echo $login->provi ?></div>
<div id="kdi"><?php echo $login->kdi ?></div>
<div id="wrgai"><?php echo $login->wrgi ?></div>
<div id="pekeri"><?php echo $login->pkri ?></div>
<div id="agmi"><?php echo $login->agmi ?></div>
<div id="pddi"><?php echo $login->pddi ?></div>
