
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_kua');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$idpernikahan = $_GET['id_nikah'];
$query = "SELECT nikah.id_nikah,penjadwalan.tgl_nikah,penjadwalan.wkt_nikah,
istri.NIK AS 'nik_i',istri.nama_i,istri.alamat AS 'almt_i', istri.rt AS 'almt_rt_i', istri.rw AS 'almt_rw_i', istri.kelurahan AS 'almt_kel_i',
istri.kecamatan AS 'almt_kec_i', istri.kabupaten AS 'almt_kab_i', istri.provinsi AS 'almt_prov_i', istri.kdpos AS 'almt_kd_i',
istri.tmpt_lhr AS 'tmptlhr_i',istri.tgl_lhr AS 'tgllhr_i',istri.wrgngr AS
  'wrgngr_i',istri.pekerjaan AS 'peker_i',istri.agama AS
   'agm_i',istri.pnddkn_akhir AS 'pdd_i', suami.NIK AS 'nik_s' ,
   suami.nama_s, suami.alamat AS 'almt_s', suami.rt AS 'almt_rt_s', suami.rw AS 'almt_rw_s', suami.kelurahan AS 'almt_kel_s',
   suami.kecamatan AS 'almt_kec_s', suami.kabupaten AS 'almt_kab_s', suami.provinsi AS 'almt_prov_s', suami.kdpos AS 'almt_kd_s',
    suami.tmpt_lhr AS 'tmptlhr_s',  suami.tgl_lhr AS 'tgllhr_s',suami.wrgngr AS 'wrgngr_s',suami.pekerjaan AS
    'peker_s',suami.agama AS 'agm_s',suami.pnddkn_akhir AS 'pdd_s',
m1.NIK AS 'nikwali',m1.nama as 'namawali',m1.alamat AS 'almtwali', m1.rt AS 'almtwalirt', m1.rw AS 'almtwalirw', m1.kelurahan AS 'almtwalikel',
m1.kecamatan AS 'almtwalikec', m1.kabupaten AS 'almtwalikab', m1.provinsi AS 'almtwaliprov', m1.kdpos AS 'almtwalikd',
m1.agama AS 'agmwali',m1.pekerjaan AS 'pekerwali',m1.warganegara AS
  'wrgngrwali',m1.tgl_lhr AS 'tgllhrwali',
m2.nama AS 'namasaksi1',m2.NIK AS 'niksaksi1', m2.alamat AS 'almtsaksi1', m2.rt AS 'almtsaksi1rt', m2.rw AS 'almtsaksi1rw', m2.kelurahan AS 'almtsaksi1kel',
m2.kecamatan AS 'almtsaksi1kec', m2.kabupaten AS 'almtsaksi1kab', m2.provinsi AS 'almtsaksi1prov', m2.kdpos AS 'almtsaksi1kd',
m2.agama AS 'agmsaksi1',m2.pekerjaan AS 'pekersaksi1',m2.warganegara AS
  'wrgngrsaksi1',m2.umur AS 'umursaksi1',
m3.nama AS 'namasaksi2',m3.NIK AS 'niksaksi2',m3.alamat AS 'almtsaksi2', m3.rt AS 'almtsaksi2rt', m3.rw AS 'almtsaksi2rw', m3.kelurahan AS 'almtsaksi2kel',
m3.kecamatan AS 'almtsaksi2kec', m3.kabupaten AS 'almtsaksi2kab', m3.provinsi AS 'almtsaksi2prov', m3.kdpos AS 'almtsaksi2kd',
m3.agama AS 'agmsaksi2',m3.pekerjaan AS  'pekersaksi2',m3.warganegara as 'wrgngrsaksi2',m3.umur AS
  'umursaksi2' FROM nikah INNER JOIN saksi AS m2 ON m2.NIK = nikah.NIK_saksi_1 INNER JOIN
   saksi AS m3 ON m3.NIK = nikah.NIK_saksi_2 INNER JOIN pernikahan ON
    nikah.id_pernikahan = pernikahan.id_pernikahan INNER JOIN wali AS m1 ON pernikahan.NIK_wali = m1.NIK INNER JOIN
penjadwalan ON pernikahan.id_jadwal = penjadwalan.id_penjadwalan INNER JOIN
 pendaftaran ON penjadwalan.id_pendaftaran = pendaftaran.id_pendaftaran INNER JOIN
  pendaftar ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN suami ON pendaftar.NIK_suami = suami.NIK
INNER JOIN istri ON pendaftar.NIK_istri=istri.NIK where id_nikah='$idpernikahan'";
$data = mysqli_query($koneksi,$query);
$detaildt =mysqli_fetch_object($data);
 ?>

<!-- <div id = "idlabel"><?php ?></div> -->
<div id="idpernikahan"><?php echo $idpernikahan ?></div>
<div id="tanggalpernikahan"><?php echo $detaildt->tgl_nikah ?></div>
<div id="waktupernikahan"><?php echo $detaildt->wkt_nikah ?></div>

<div id="niksuami"><?php echo $detaildt->nik_s ?></div>
<div id="namasuami"><?php echo $detaildt->nama_s ?></div>
<div id="tmptlhrsuami"><?php echo $detaildt->tmptlhr_s ?></div>
<div id="tgllhrsuami"><?php echo $detaildt->tgllhr_s ?></div>
<div id="almtsuami"><?php echo $detaildt->almt_s ?></div>

<div id="almtsuamirt"><?php echo $detaildt->almt_rt_s ?></div>
<div id="almtsuamirw"><?php echo $detaildt->almt_rw_s ?></div>
<div id="almtsuamikel"><?php echo $detaildt->almt_kel_s ?></div>
<div id="almtsuamikec"><?php echo $detaildt->almt_kec_s ?></div>
<div id="almtsuamikab"><?php echo $detaildt->almt_kab_s ?></div>
<div id="almtsuamiprov"><?php echo $detaildt->almt_prov_s ?></div>
<div id="almtsuamikd"><?php echo $detaildt->almt_kd_s ?></div>

<div id="wrgasuami"><?php echo $detaildt->wrgngr_s ?></div>
<div id="pkrjaansuami"><?php echo $detaildt->peker_s ?></div>
<div id="agmsuami"><?php echo $detaildt->agm_s ?></div>
<div id="pddsuami"><?php echo $detaildt->pdd_s ?></div>

<div id="nikistri"><?php echo $detaildt->nik_i ?></div>
<div id="namaistri"><?php echo $detaildt->nama_i ?></div>
<div id="tmptlhristri"><?php echo $detaildt->tmptlhr_i ?></div>
<div id="tgllhristri"><?php echo $detaildt->tgllhr_i ?></div>
<div id="almtistri"><?php echo $detaildt->almt_i ?></div>

<div id="almtistrirt"><?php echo $detaildt->almt_rt_i ?></div>
<div id="almtistrirw"><?php echo $detaildt->almt_rw_i ?></div>
<div id="almtistrikel"><?php echo $detaildt->almt_kel_i ?></div>
<div id="almtistrikec"><?php echo $detaildt->almt_kec_i ?></div>
<div id="almtistrikab"><?php echo $detaildt->almt_kab_i ?></div>
<div id="almtistriprov"><?php echo $detaildt->almt_prov_i ?></div>
<div id="almtistrikd"><?php echo $detaildt->almt_kd_i ?></div>

<div id="wrgaistri"><?php echo $detaildt->wrgngr_i ?></div>
<div id="pkrjaanistri"><?php echo $detaildt->peker_i ?></div>
<div id="agmistri"><?php echo $detaildt->agm_i ?></div>
<div id="pddistri"><?php echo $detaildt->pdd_i ?></div>

<div id="nikwali"><?php echo $detaildt->nikwali ?></div>
<div id="namawali"><?php echo $detaildt->namawali ?></div>
<div id="tgllhrwali"><?php echo $detaildt->tgllhrwali ?></div>
<div id="almtwali"><?php echo $detaildt->almtwali ?></div>

<div id="almtwalirt"><?php echo $detaildt->almtwalirt ?></div>
<div id="almtwalirw"><?php echo $detaildt->almtwalirw ?></div>
<div id="almtwalikel"><?php echo $detaildt->almtwalikel ?></div>
<div id="almtwalikec"><?php echo $detaildt->almtwalikec ?></div>
<div id="almtwalikab"><?php echo $detaildt->almtwalikab ?></div>
<div id="almtwaliprov"><?php echo $detaildt->almtwaliprov ?></div>
<div id="almtwalikd"><?php echo $detaildt->almtwalikd ?></div>

<div id="wrgawali"><?php echo $detaildt->wrgngrwali ?></div>
<div id="pkrjaanwali"><?php echo $detaildt->pekerwali ?></div>
<div id="agmwali"><?php echo $detaildt->agmwali ?></div>

<div id="niksaksi1"><?php echo $detaildt->niksaksi1 ?></div>
<div id="namasaksi1"><?php echo $detaildt->namasaksi1 ?></div>
<div id="almtsaksi1"><?php echo $detaildt->almtsaksi1 ?></div>

<div id="almtsaksi1rt"><?php echo $detaildt->almtsaksi1rt ?></div>
<div id="almtsaksi1rw"><?php echo $detaildt->almtsaksi1rw ?></div>
<div id="almtsaksi1kel"><?php echo $detaildt->almtsaksi1kel ?></div>
<div id="almtsaksi1kec"><?php echo $detaildt->almtsaksi1kec ?></div>
<div id="almtsaksi1kab"><?php echo $detaildt->almtsaksi1kab ?></div>
<div id="almtsaksi1prov"><?php echo $detaildt->almtsaksi1prov ?></div>
<div id="almtsaksi1kd"><?php echo $detaildt->almtsaksi1kd ?></div>

<div id="wrgasaksi1"><?php echo $detaildt->wrgngrsaksi1 ?></div>
<div id="pkrjaansaksi1"><?php echo $detaildt->pekersaksi1 ?></div>
<div id="agmsaksi1"><?php echo $detaildt->agmsaksi1 ?></div>
<div id="umursaksi1"><?php echo $detaildt->umursaksi1 ?></div>

<div id="niksaksi2"><?php echo $detaildt->niksaksi2 ?></div>
<div id="namasaksi2"><?php echo $detaildt->namasaksi2 ?></div>
<div id="almtsaksi2"><?php echo $detaildt->almtsaksi2 ?></div>

<div id="almtsaksi2rt"><?php echo $detaildt->almtsaksi2rt ?></div>
<div id="almtsaksi2rw"><?php echo $detaildt->almtsaksi2rw ?></div>
<div id="almtsaksi2kel"><?php echo $detaildt->almtsaksi2kel ?></div>
<div id="almtsaksi2kec"><?php echo $detaildt->almtsaksi2kec ?></div>
<div id="almtsaksi2kab"><?php echo $detaildt->almtsaksi2kab ?></div>
<div id="almtsaksi2prov"><?php echo $detaildt->almtsaksi2prov ?></div>
<div id="almtsaksi2kd"><?php echo $detaildt->almtsaksi2kd ?></div>

<div id="wrgasaksi2"><?php echo $detaildt->wrgngrsaksi2 ?></div>
<div id="pkrjaansaksi2"><?php echo $detaildt->pekersaksi2 ?></div>
<div id="agmsaksi2"><?php echo $detaildt->agmsaksi2 ?></div>
<div id="umursaksi2"  ><?php echo $detaildt->umursaksi2 ?></div>
