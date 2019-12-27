
<?php
include_once '../../config/dbconfig.php';

$id_karyawan = $_GET['id_karyawan'];
$query = "DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'";
$input = mysqli_query($koneksi, $query);

// if($input){
   ?>
   <!-- <div id="status"><?php
   // echo "sukses"
   ?></div> -->
   <!-- <?php
// }else{
   ?>
   <! <div id="status"><?php
   // echo mysqli_error
   ($koneksi) ?></div> -->
   <!-- <?php
// }

 ?>
