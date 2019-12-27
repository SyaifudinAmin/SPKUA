
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_kua');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$idkaryawan = $_GET['id_karyawan'];
$query = "SELECT * FROM karyawan where id_karyawan='$idkaryawan'";
$data = mysqli_query($koneksi,$query);
$login =mysqli_fetch_object($data);
 ?>

<!-- <div id = "idlabel"><?php ?></div> -->
<div id="idkaryawan"><?php echo $idkaryawan ?></div>
<div id="username"><?php echo $login->username ?></div>
<div id="pass"><?php echo $login->password ?></div>
<div id="jabatan"><?php echo $login->jabatan ?></div>
