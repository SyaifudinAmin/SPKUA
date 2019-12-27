<?php
include_once '../../config/dbconfig.php';

$id_nikah = $_GET['id_nikah'];
$query = "DELETE FROM nikah WHERE id_nikah='$id_nikah'";
$input = mysqli_query($koneksi, $query);

// if($input){
   ?>
