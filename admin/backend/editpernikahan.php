
<?php
include_once '.././config/dbconfig.php';

if(isset($_POST['edit_nikah'])){
  $idpernikahan = $_POST['idpernikahan12'];
  $namasuami = $_POST['namasuami11'];
  $namaistri = $_POST['namaistri11'];
  $tanggalnikah = $_POST['tanggalnikah11'];
  $waktunikah = $_POST['wkt_menikah'];
  // mengubah data akun
    $query2 = "UPDATE nikah INNER JOIN pernikahan ON nikah.id_pernikahan = pernikahan.id_pernikahan INNER JOIN penjadwalan ON pernikahan.id_jadwal = penjadwalan.id_penjadwalan INNER JOIN pendaftaran ON penjadwalan.id_pendaftaran = pendaftaran.id_pendaftaran INNER JOIN pendaftar ON pendaftaran.id_pendaftar = pendaftar.id_pendaftar INNER JOIN suami ON pendaftar.NIK_suami = suami.NIK INNER JOIN istri on pendaftar.NIK_istri = istri.NIK
    SET suami.nama_s = '$namasuami', istri.nama_i ='$namaistri', penjadwalan.tgl_nikah = '$tanggalnikah', penjadwalan.wkt_nikah = '$waktunikah'  WHERE id_nikah = '$idpernikahan' ";
  $input2 = mysqli_query($koneksi, $query2);

    if($input2){
      ?>
      <script type="text/javascript">
      swal({
        title: "Data dirubah",
        text: "Data akun <?php echo $idpernikahan ?> berhasil dirubah",
        type: "success",
        confirmButtonText: "Oke"
      },
      function () {
        window.location='?f=bodynikah';
        // $("#dataakun").load("./backend/refreshdataakun.php");
        // $('#form_edit_akun').hide(350);
      });
      </script>
      <?php
    }else {
      ?>
      <script type="text/javascript">
      swal({
        title: "Gagal",
        text: "Data akun <?php echo $idpernikahan?> gagal diubah",
        type: "error",
        confirmWarningText: "Oke"
      },
      function () {
        window.location='data_nikah.php#';
      });
    </script>
    <?php
  }
}
?>
