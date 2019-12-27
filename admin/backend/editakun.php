
<?php
include_once './config/dbconfig.php';

if(isset($_POST['edit_akun'])){
  $idkaryawan2 = $_POST['idkaryawan2'];
  $username2 = $_POST['username1'];
  $password2 = $_POST['pass1'];
  $jabatan2 = $_POST['jabatan1'];

  $status="";
  $usr = "SELECT username FROM karyawan where id_karyawan='$idkaryawan2'";
  $cekusr = mysqli_query($koneksi, $usr);
  while ($us = mysqli_fetch_object($cekusr)) {
    $usrname = $us->username;
  }
  if ($username2 == $usrname) {
    $status = "dirubah";
  }

  $cekusername = "SELECT username FROM karyawan WHERE username = '$username2'";
  $checking = mysqli_query($koneksi, $cekusername);
  if(mysqli_num_rows($checking) > 0 && $status != "diubah"){
    ?>
      <script type="text/javascript">
          swal({
            title: '',
            text: "username <?php echo $username2 ?> sudah digunakan",
            type: "error",
            confirmWarningText:"ok",
          },
            function() {
              window.location="set_akun.php#";
          });
        </script>
        <?php
  }else{
    // mengecek apakah ada perubahan password
    $pwd = "SELECT password from karyawan where id_karyawan='$idkaryawan2'";
    $pw = mysqli_query($koneksi,$pwd);
    while ($ps = mysqli_fetch_object($pw)) {
      $pass = $ps->password;
    }
    // kalo tidak ada perubahan maka password tetap
    if ($password2 == $pass) {
      $newPass2 = $password2;
      // kalo berubah berarti password di enkripsi lagi
    }else {
      $newPass2 = md5($password2);
    }
    $usr = "SELECT username FROM karyawan where id_karyawan='$idkaryawan2'";
    $cekusr = mysqli_query($koneksi, $usr);
    while ($us = mysqli_fetch_object($cekusr)) {
      $usrname = $us->username;
    }

    // mengambil data hak akses
    $hakakses2 = "SELECT id_hak from hak_akses WHERE nama_jabatan = '$jabatan2'";
    $id_hak2 = mysqli_query($koneksi, $hakakses2);
    while ($id2 = mysqli_fetch_object($id_hak2)) {
      $id_akses2 = $id2->id_hak;
    }

    // mengubah data akun

    $usr = "SELECT username FROM karyawan where id_karyawan='$idkaryawan2'";
    $cekusr = mysqli_query($koneksi, $usr);
    while ($us = mysqli_fetch_object($cekusr)) {
      $usrname = $us->username;
    }
    if ($username2 != $usrname) {
      $query2 = "UPDATE karyawan SET username='$username2',password='$newPass2',jabatan='$id_akses2' where id_karyawan = '$idkaryawan2' ";
      $input2 = mysqli_query($koneksi, $query2);
    }else {
      $query2 = "UPDATE karyawan SET password='$newPass2',jabatan='$id_akses2' where id_karyawan = '$idkaryawan2' ";
      $input2 = mysqli_query($koneksi, $query2);
    }
    if($input2){
      echo $newPass2;
      ?>
      <script type="text/javascript">
      swal({
        title: "Data dirubah",
        text: "Data akun <?php echo $username2?> berhasil diubah",
        type: "success",
        confirmButtonText: "Oke",
      },
      function () {
        window.location='set_akun.php';
        // $("#dataakun").load("./backend/refreshdataakun.php");
        // $('#form_edit_akun').hide(350);
      });
      </script>
      <?php
    }else {
      ?>
      <script type="text/javascript">
      swal({
        title: "Maaf",
        text: "Data akun <?php echo $username2?> gagal diubah",
        type: "error",
        confirmWarningText: "Oke"
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
