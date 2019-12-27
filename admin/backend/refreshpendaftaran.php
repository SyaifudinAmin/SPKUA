<?php

include_once '../../config/dbconfig.php';

$query = 'SELECT id_pendaftaran , nama_s, nama_i, tgl_pendaftaran FROM pendaftaran INNER JOIN pendaftar ON pendaftaran.id_pendaftar = pendaftar.id_pendaftar
INNER JOIN suami ON pendaftar.NIK_suami = suami.NIK INNER JOIN istri ON istri.NIK = pendaftar.NIK_istri WHERE pendaftaran.status = "INVALID"';
$pendaftaran1 = mysqli_query($koneksi, $query);

while ($a = mysqli_fetch_object($pendaftaran1)) {
?>
<tr>
  <td><?php echo $a->id_pendaftaran; ?></td>
  <td><?php echo $a->nama_s; ?></td>
  <td><?php echo $a->nama_i; ?></td>
  <td><?php echo $a->tgl_pendaftaran; ?></td>
  <td>
    <div class="btn-group-horizontal btn-group-sm">
    <input type="hidden" name="idpendaftaran" value="<?php echo $a->id_pendaftaran;?>">
    <a href="javascript:void(0)" class="on-default" onclick="edit_daftar(<?php echo "'$a->id_pendaftaran'"; ?>)"><i class="fa fa-pencil"></i></a>
    <!-- <a href="javascript:void(0)" class="on-default" id="delete_akun" data-id="<?php echo $a->id_karyawan; ?>"><i class="fa fa-trash-o"></i></a> -->
    <!-- <a href="#" ><i class="fa fa-trash-o"></i></a> -->
    </div>
</td>
</tr>
<?php } ?>
