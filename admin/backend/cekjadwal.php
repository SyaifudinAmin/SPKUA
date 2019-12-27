<?php
include_once '../../config/dbconfig.php';

$tgl = '2019-01-24';
// $_POST['tgl_menikah'];
$show = "SELECT * FROM penjadwalan where tgl_nikah = '$tgl'";
$data = array();
$cek = mysqli_query($koneksi, $show);
$error = mysqli_error($koneksi);

if ($cek)
  {
    // echo "<select class='' name=''>";
    while ($a = mysqli_fetch_assoc($cek)){
        $data[] = $a['wkt_nikah'];
     }
     echo $data[0];
     for($i=7; $i < 16; $i++){
       echo "<option disabled value='$i:00'>$i:00</option>";
     }
  }else {
    echo "<div id='status'>gagal</div>";
    echo "<div id='pesan'>".$error."</div>";
  }
?>
