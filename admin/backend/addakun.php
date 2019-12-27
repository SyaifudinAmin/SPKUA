<?php
include_once '.././config/dbconfig.php';

if(isset($_POST['add_akun'])){
  $idkaryawan = $_POST['idkaryawan'];
  $username = $_POST['username'];
  $password = $_POST['pass'];
  $jabatan = $_POST['jabatan'];
  $newpassword = md5($password);

  $cekusername = "SELECT username FROM karyawan WHERE username = '$username'";
  $checking = mysqli_query($koneksi, $cekusername);
  if(mysqli_num_rows($checking) > 0){
    ?>
      <script type="text/javascript">
          swal({
            title: '',
            text: "username <?php echo $username ?> sudah digunakan",
            type: "error",
            confirmWarningText:"ok"
          },
            function() {
              window.location="?f=bodyakun#";
          });
        </script>
        <?php
      } else {
        $converthak = "SELECT id_hak FROM hak_akses WHERE nama_jabatan = '$jabatan'";
        $id_hak1 = mysqli_query($koneksi, $converthak);
        while ($a = mysqli_fetch_object($id_hak1))
        {
          $id_hak_akses = $a->id_hak;
        }
        $query = "INSERT INTO karyawan (id_karyawan,username,password,jabatan) VALUES ('$idkaryawan','$username','$newpassword','$id_hak_akses')";
        // mengeksekusi query
        $input = mysqli_query($koneksi, $query);

        if ($input) {
          ?>
          <script type="text/javascript">
          swal ({
            title:"",
            text:"Data Tersimpan",
            type:"success",
            confirmButtonText:"ok",
          },
          function (){
            $('#form_add_akun').hide(500);
            window.location='?f=bodyakun';
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
