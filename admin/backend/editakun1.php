<?php
include_once './config/dbconfig.php';


if(isset($_POST['edit_akun'])){
  $idkaryawan2 = $_POST['idkaryawan2'];
  $username2 = $_POST['username1'];
  $password2 = $_POST['pass1'];
  $jabatan2 = $_POST['jabatan1'];

  $cekusername = "SELECT username FROM karyawan WHERE username = '$username2'";
  $checking = mysqli_query($koneksi, $cekusername);
  if(mysqli_num_rows($checking) > 0){
    ?>
      <script type="text/javascript">
          swal({
            title: '',
            text: "username <?php echo $username2 ?> sudah digunakan",
            type: "error",
            confirmWarningText:"ok"
          },
            function() {
              window.location="set_akun.php#";
          });
        </script>
        <?php
      } else {
        $converthak = "SELECT id_hak FROM hak_akses WHERE nama_jabatan = '$jabatan2'";
        $id_hak1 = mysqli_query($koneksi, $converthak);
        while ($a = mysqli_fetch_object($id_hak1))
        {
          $id_hak_akses = $a->id_hak;
        }
        $query = "UPDATE karyawan SET username='$username2',password='$password2',jabatan='$id_hak_akses' where id_karyawan = '$idkaryawan2' ";
        // mengeksekusi query
        $input = mysqli_query($koneksi, $query);

        if ($input) {
          ?>
          <script type="text/javascript">
          swal ({
            title:"",
            text:"Data Diubah",
            type:"success",
            confirmButtonText:"ok",
          },
          function (){
            $("#form_edit_akun").hide(500);
          });
        </script>
        <?php
      }else{
        ?>
        <script type="text/javascript">
        swal({
          title:"",
          text:"Gagal",
          type:"error",
          confirmWarningText:"gagal",
        },
        function () {
          window.location='set_akun.php#';
        });
      </script>
      <?php
    }
  }
}
  ?>
