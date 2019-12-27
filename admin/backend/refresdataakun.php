<?php

$koneksi = new mysqli('localhost', 'root', '', 'db_kua');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$query = 'SELECT id_karyawan,username,password,nama_jabatan FROM karyawan inner join hak_akses on hak_akses.id_hak = karyawan.jabatan';
$akun = mysqli_query($koneksi, $query);

while ($a = mysqli_fetch_object($akun)) {
?>
<tr>
  <td ><?php echo $a->id_karyawan; ?></td>
  <td><?php echo $a->username; ?></td>
  <td><?php echo $a->password; ?></td>
  <td><?php echo $a->nama_jabatan;  ?></td>
  <td>
    <div class="btn-group-horizontal btn-group-sm">
      <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
      <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
    </div>


  </td>
</tr>
<?php } ?>
