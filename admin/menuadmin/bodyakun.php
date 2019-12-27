<section role="main" class="content-body">
  <header class="page-header">
    <h2>Pengaturan Akun</h2>

    <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
        <li>
          <a href="index.php">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li><span class="mrg">Pengaturan Akun</span></li>
      </ol>


    </div>
  </header>

  <!-- start: page -->
  <section class="panel" id="form_add_akun" name="form_add_akun" style="display:none;">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" id="closeformadd" ><i class="fa fa-times"></i></a>
      </div>

      <h2 class="panel-title">Tambah Akun</h2>
    </header>
    <?php include_once '.././admin/backend/otomatis.php'; ?>
    <div class="panel-body">

      <form class="" action="" method="post">

        <div class="form-group row">
          <div class="col-sm-2">
            ID Karyawan
          </div>
          <div class="col-sm-10" id="ambilrm">
            <norm id="nomorrm"><?php echo $norm; ?></norm>
            <input type="hidden"  name="idkaryawan" value="<?php echo $norm; ?>" class="form-control" placeholder="ID karyawan" required="true">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Username
          </div>
          <div class="col-sm-10">
            <input type="teks" name="username" value="" class="form-control" placeholder="Username" required="true">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Password
          </div>
          <div class="col-sm-10">
            <input type="password" name="pass" id="pass" value="" class="form-control" placeholder="Password" required="true">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Konfirmasi Password
          </div>
          <div class="col-sm-10">

            <input type="password" name="konfirmpass" id="konfirmpass" value="" class="form-control" placeholder="Konfirmasi Password" required="true" oninput="cek();">
            <span class="label label-success" id="cocok" style="display:none">Cocok</span>
            <span class="label label-danger" id="salah" style="display:none">Salah</span>
            <small class="form-text text-muted" id="passhelp" style="display:none">konfirmasi password salah</small>

          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Jabatan
          </div>
          <div class="col-sm-10">
            <select class="form-control" name="jabatan" onchange="document.getElementById('agama').value=this.options[this.selectedIndex].text">
              <option value="">Pilihan</option>
              <option value="Admin">Admin</option>
              <option value="Resepsionis">Resepsionis</option>
              <option value="Pengolah Data">Pengolah Data</option>
              <option value="Penghulu">Penghulu</option>
              <option value="Kepala">Kepala</option>
             </select>
            <!-- <input type="hidden" name="agmz" id="agama" value="" required="true"> -->
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <div class="col-md-8 col-md-push-4">
              <button type="submit" class="btn btn-primary " name="add_akun" id="add_akun" onclick="non();" style="float:right; margin-left:10px;">
                <i class="fa fa-save"></i> Simpan
              </button>
              <button type="button" class="btn btn-danger" id="bataltambah" name="batal" style="float:right">
                <i class="fa fa-times"></i> Batal
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- end tambah  -->

  <!-- edit Akun -->
  <section class="panel" id="form_edit_akun" style="display:none;">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" id="closeformedit" ><i class="fa fa-times"></i></a>
      </div>

      <h2 class="panel-title">Edit Akun</h2>
    </header>
    <div class="panel-body">

      <form class="" action="" method="post">

        <div class="form-group row">
          <div class="col-sm-2">
            ID Karyawan
          </div>
          <div class="col-sm-10">
            <!-- <input type="text" name="idkar" value=""> -->
            <input type="teks" disabled name="idkaryawan1" id="idkaryawan1" value="" class="form-control" placeholder="ID karyawan" required="true">
            <input type="hidden" name="idkaryawan2" id="id_karyawan2" value="" class="form-control" placeholder="ID karyawan" required="true">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Username
          </div>
          <div class="col-sm-10">
            <input type="teks" name="username1" id="username1" value="" class="form-control" placeholder="Username" required="true">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Password
          </div>
          <div class="col-sm-10">
            <input type="password" name="pass1" id="pass1" value="" class="form-control" placeholder="Password" required="true">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Konfirmasi Password
          </div>
          <div class="col-sm-10">

            <input type="password" name="konfirmpass1" id="konfirmpass1" value="" class="form-control" placeholder="Konfirmasi Password" required="true" oninput="cek1();">
            <span class="label label-success" id="cocok1" style="display:none">Cocok</span>
            <span class="label label-danger" id="salah1" style="display:none">Salah</span>
            <small class="form-text text-muted" id="passhelp1" style="display:none">konfirmasi password salah</small>

          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Jabatan
          </div>
          <div class="col-sm-10">
            <select class="form-control" name="jabatan1" id="jabatan" onchange="document.getElementById('agama').value=this.options[this.selectedIndex].text">
              <option value="">Pilihan</option>
             <option id="admin" value="Admin">Admin</option>
             <option id="resepsionis" value="Resepsionis">Resepsionis</option>
             <option id="pengolah_data" value="Pengolah Data">Pengolah Data</option>
             <option id="penghulu" value="Penghulu">Penghulu</option>
             <option id="kepala" value="Kepala">Kepala</option>
            </select>
            <!-- <input type="hidden" name="agmz" id="agama" value="" required="true"> -->
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <div class="col-md-8 col-md-push-4">
              <input type="hidden" name="idkaryawan" value="<?php echo $a->id_karyawan;?>">
              <button type="submit" class="btn btn-primary float-right" name="edit_akun" id="edit_akun" onclick="non1();" style="float:right; margin-left: 10px;">
                <i class="fa fa-save"></i> Ubah
              </button>
              <button type="reset" class="btn btn-danger float-right" id="bataledit" name="batal1" style="float:right">
                <i class="fa fa-times"></i> Batal
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>


  <!-- end edit -->
    <!-- ------------------------------------------------------------ -->
    <section class="panel">
      <header class="panel-heading">
        <!-- <div class="panel-actions">
          <a href="#" class="fa fa-caret-down"></a>
          <a href="#" class="fa fa-times"></a>
        </div> -->

        <h2 class="panel-title">Data Akun</h2>
      </header>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-md">
              <button  type="reset" name="addakun" id="addakun" class="btn btn-primary">Tambah <i class="fa fa-plus"></i></button>
            </div>
          </div>
        </div>
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Password</th>
              <th>Jabatan</th>
              <th>Aksi</th>

            </tr>
          </thead>
          <tbody id="datakaryawan">
            <?php
            include_once '.././admin/backend/showakun.php';

           while ($a = mysqli_fetch_object($karyawan)) {
            ?>
            <tr>
              <td><?php echo $a->id_karyawan; ?></td>
              <td><?php echo $a->username; ?></td>
              <td><?php echo $a->password; ?></td>
              <td><?php echo $a->nama_jabatan; ?></td>
              <td>
                <div class="btn-group-horizontal btn-group-sm">
                  <input type="hidden" name="idkaryawan" value="<?php echo $a->id_karyawan;?>">
                  <a href="javascript:void(0)" class="on-default" onclick="edit_akun(<?php echo "'$a->id_karyawan'"; ?>)"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" class="on-default" id="delete_akun" data-id="<?php echo $a->id_karyawan; ?>"><i class="fa fa-trash-o"></i></a>
                  <!-- <a href="#" ><i class="fa fa-trash-o"></i></a> -->
                </div>

              </td>
            </tr>
            <?php } ?>



            <!-- <======================================== -->


          </tbody>
        </table>
      </div>
    </section>

    <!-- ------------------------------------------------------------ -->
  <!-- end: page -->
</section>

<!-- fungsi -->
<?php include_once '.././admin/backend/editakun.php'; ?>
<?php include_once '.././admin/backend/addakun.php'; ?>

<script type="text/javascript">


$(document).ready(function(){
	$('#addakun').click(function(e){
		e.preventDefault();
		$('#form_add_akun').show('slideDown');
	});
	$('#closeformadd').click(function(e){
		e.preventDefault();
		$('#form_add_akun').hide('slow');
	});
	$('#closeformedit').click(function(e){
		e.preventDefault();
		$('#form_edit_akun').hide('slow');
	});
	$('#bataltambah').click(function(e){
		e.preventDefault();
		$('#form_add_akun').hide('slow');
	});
	$('#bataledit').click(function(e){
		e.preventDefault();
		$('#form_edit_akun').hide('slow');
	});


  $(document).on('click', '#delete_akun', function(e){
   var idkaryawan = $(this).data('id');
   delete_akun(idkaryawan);
   e.preventDefault();
  });
});


function edit_akun(idkaryawan){

	$.ajax({
		type: "GET",
		url : ".././admin/backend/detailakun.php?",
		data: "id_karyawan="+idkaryawan,
		success: function (data){
			var $response = $(data);
			$('#idkaryawan1').val($response.filter('#idkaryawan').text());
			$('#id_karyawan2').val($response.filter('#idkaryawan').text());
			$('#username1').val($response.filter('#username').text())
			$('#pass1').val($response.filter('#pass').text());
			$('#konfirmpass1').val($response.filter('#pass').text());

			if (($response.filter('#jabatan').text())=="1"){
				document.getElementById('admin').selected=true;
			}else if (($response.filter('#jabatan').text())=="2"){
				document.getElementById('resepsionis').selected=true;
			}else if (($response.filter('#jabatan').text())=="3"){
				document.getElementById('pengolah_data').selected=true;
			}else if (($response.filter('#jabatan').text())=="4"){
				document.getElementById('penghulu').selected=true;
			}else if (($response.filter('#jabatan').text())=="5"){
				document.getElementById('kepala').selected=true;
			}
			$('#form_edit_akun').hide(350);
			$('#form_edit_akun').slideDown( "slow" );
		}
	});
}

function delete_akun(idkaryawan) {
  swal({
        title: "Hapus data?",
        text: "Anda yakin akan menghapus akun ini?",
        type: "warning",
        showCancelButton: true,
        cancelButtonText: "Batal",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Hapus",
        closeOnConfirm: false
    }, function (isConfirm) {
        if (!isConfirm) return;
        $.ajax({
					type: "GET",
						url : ".././admin/backend/deleteakun.php?",
						data: 'id_karyawan='+idkaryawan,
            dataType: "html",
            success: function () {
							swal({
				        title: "",
				        text: "Data dihapus",
				        type: "success",
				        confirmWarningText: "Oke"
				      },
				      function () {
				        window.location='?f=bodyakun';
				      });
							// success: function(data){
							// var $response = $(data);
							// var status = $response.filter('#status').text()
            // --  swal("Sukses!", "Data berhasil dihapus", "success");
							// window.location='set_akun.php';
								// alert(status);
                // $("#dataakun").load("./backend/refreshdataakun.php");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal("Gagal!", "Data gagal dihapus", "error");
            }
        });
    });
}

function cek() {
  if(document.getElementById('pass').value==document.getElementById('konfirmpass').value){
   $("#cocok").show();
   $("#salah").hide();
	 $("#passhelp").hide();
  }else{
   $("#salah").show();
   $("#cocok").hide();
  }
}
function cek1() {
  if(document.getElementById('pass1').value==document.getElementById('konfirmpass1').value){
   $("#cocok1").show();
   $("#salah1").hide();
	 $("#passhelp1").hide();
  }else{
   $("#salah1").show();
   $("#cocok1").hide();
  }
}

function non(){
	if(document.getElementById('pass').value==document.getElementById('konfirmpass').value){

	 $("#passhelp").hide();

  }else{

	 $("#passhelp").show();
	 document.getElementById("konfirmpass").value="";
  }
}
function non1(){
	if(document.getElementById('pass1').value==document.getElementById('konfirmpass1').value){

	 $("#passhelp1").hide();

  }else{

	 $("#passhelp1").show();
	 document.getElementById("konfirmpass1").value="";
  }
}



</script>
