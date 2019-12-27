<section role="main" class="content-body">
  <header class="page-header">
    <h2>Validasi</h2>

    <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
        <li>
          <a href="index.php">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li><span class="mrg">Validasi</span></li>
      </ol>


    </div>
  </header>

  <!-- Find --------------------- -->
  <section>
    <div class="row sp">
      <div class="col-md-12 col-lg-4 col-xl-6 mrq">
        <form class="" action="" method="post">

          <div class="form-group row">
            <label for="inputNIK" class="col-sm-5 col-form-label sz">No. Pendaftaran</label>
            <div class="col-sm-7 ">
              <input type="text" class="form-control input-sm" name="iddftr" id="iddftr" placeholder="Nomor Pendaftaran" >

            </div>
          </div>
      </div>
      <div class="col-md-12 col-lg-4 col-xl-6">
        <div class="form-group row">

          <button type="button" class="btn btn-primary float-right" name="caridaftar" id="caridaftar" onclick="getcari();">
            <i class="fa fa-search"></i> Cari
          </button>
        </div>
        </form>
      </div>
    </div>
    <!-- Content ---------------------
    <!-- start: page -->
    <section class="panel" id="list_pendaftaran">
      <br>
      <header class="panel-heading">
        <h2 class="panel-title">List Pendaftaran</h2>
      </header>
      <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Calon Suami</th>
              <th>Nama Calon Istri</th>
              <th>Tanggal Mendaftar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="datapendaftaran">
            <?php
            include_once '.././admin/backend/showpendaftaran1.php';

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
          </tbody>
        </table>

      </div>
    </section>


    <section id="form_validasi" style="display: none;">


      <form class="newupdate" action="" method="POST">
        <div class="row">
          <div class="col-md-6">
            <!-- Profil 1 -->
            <div class="row">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-header text-center bor_ab" style="background-color: #BACDF7">
                    <strong>
                      Data Suami
                    </strong>
                  </div>

                  <div class="panel-body">


                    <div class="form-group row sz">
                      <div class="col-sm-3">
                        NIK
                      </div>
                      <div class="col-sm-9">
                        <input type="hidden" name="niks1" id="niks1" value="" class="form-control input-sm" placeholder="" required="true">
                        <label id="niks"></label>
                        <input type="hidden" name="idkar" id="idkar" value=<?php echo $id_karyawan; ?>>
                        <input type="hidden" name="pdf" id="pdf">

                      </div>
                    </div>


                    <div class="form-group row sz">
                      <div class="col-sm-3">
                        Nama
                      </div>
                      <div class="col-sm-9">
                        <input type="teks" name="namas" id="namas" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>

                    <div class="form-group row sz">
                      <div class="col-sm-3">
                        Tempat Lahir
                      </div>
                      <div class="col-sm-9">
                        <input type="teks" name="tmptlhrs" id="tmptlhrs" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>

                    </div>

                    <div class="form-group row sz">
                      <div class="col-sm-3">
                        Tanggal Lahir
                      </div>
                      <div class="col-sm-9">
                        <input type="date" name="tgllhrs" id="tgllhrs" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>

                    <div class="form-group row sz">
                      <div class="col-sm-3">
                        Alamat
                      </div>
                      <div class="col-sm-9">
                        <input type="teks" name="almts" id="almts" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>
                    <div class="form-group row sz">
                      <div class="col-sm-3">

                      </div>
                      <div class="col-sm-4">
                        <input type="teks" name="rts" id="rts" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                      <div class="col-sm-5">
                        <input type="teks" name="rws" id="rws" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>
                    <div class="form-group row sz">
                      <div class="col-sm-3">

                      </div>
                      <div class="col-sm-4">
                        <input type="teks" name="kels" id="kels" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                      <div class="col-sm-5">
                        <input type="teks" name="kecs" id="kecs" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>
                    <div class="form-group row sz">
                      <div class="col-sm-3">

                      </div>
                      <div class="col-sm-4">
                        <input type="teks" name="kabs" id="kabs" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                      <div class="col-sm-5">
                        <input type="teks" name="provs" id="provs" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>
                    <div class="form-group row sz">
                      <div class="col-sm-3">

                      </div>
                      <div class="col-sm-9">
                        <input type="teks" name="kds" id="kds" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>

                    </div>


                    <div class="form-group row sz">
                      <div class="col-sm-3">
                        Warganegara
                      </div>
                      <div class="col-sm-9">
                        <input type="teks" name="wrgngrs" id="wrgngrs" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>


                    <div class="form-group row sz">
                      <div class="col-sm-3">
                        Pekerjaan
                      </div>
                      <div class="col-sm-9">
                        <input type="teks" name="pekerjaans" id="pekerjaans" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>

                    <div class="form-grouprow row sz">
                      <div class="col-sm-3">
                        Agama
                      </div>
                      <div class="col-sm-9">
                        <input type="teks" name="agms" id="agms" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>

                    <div class="form-group row sz">
                      <div class="col-sm-3">
                        Pendidikan
                      </div>
                      <div class="col-sm-9 ">
                        <input type="teks" name="pnddkns" id="pnddkns" value="" class="form-control input-sm" placeholder="" required="true">
                      </div>
                    </div>
                    <!-- <ul style="margin-left: -20px; font-size: 14px;">
                  <li >Telp. (0274) 446-1099</li>
                  <li> <a style="color: blue; "><u>Email : kuangemplak.slemandiy@yahoo.com</u></a></li>

                </ul> -->
                    <!-- </form> -->
                  </div>

                </div>
              </div>
            </div>



          </div>

          <div class="col-md-6">
            <div class="panel ">
              <div class="panel-header text-center bor_ab" style="background-color: #BACDF7">
                <strong>Data Istri</strong>

              </div>

              <div class="panel-body">
                <!-- <form class="" action="" method="post"> -->


                <div class="form-group row sz">
                  <div class="col-sm-3">
                    NIK
                  </div>
                  <div class="col-sm-9">
                    <input type="hidden" name="niki1" id="niki1" value="" class="form-control input-sm" placeholder="" required="true">
                    <label id="niki"></label>
                  </div>
                </div>


                <div class="form-group row sz">
                  <div class="col-sm-3">
                    Nama
                  </div>
                  <div class="col-sm-9">
                    <input type="teks" name="namai" id="namai" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>

                <div class="form-group row sz">
                  <div class="col-sm-3">
                    Tempat Lahir
                  </div>
                  <div class="col-sm-9">
                    <input type="teks" name="tmptlhri" id="tmptlhri" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>

                </div>

                <div class="form-group row sz">
                  <div class="col-sm-3">
                    Tanggal Lahir
                  </div>
                  <div class="col-sm-9">
                    <input type="date" name="tgllhri" id="tgllhri" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>

                <div class="form-group row sz">
                  <div class="col-sm-3">
                    Alamat
                  </div>
                  <div class="col-sm-9">
                    <input type="teks" name="almti" id="almti" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>
                <div class="form-group row sz">
                  <div class="col-sm-3">

                  </div>
                  <div class="col-sm-4">
                    <input type="teks" name="rti" id="rti" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                  <div class="col-sm-5">
                    <input type="teks" name="rwi" id="rwi" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>
                <div class="form-group row sz">
                  <div class="col-sm-3">

                  </div>
                  <div class="col-sm-4">
                    <input type="teks" name="keli" id="keli" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                  <div class="col-sm-5">
                    <input type="teks" name="keci" id="keci" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>
                <div class="form-group row sz">
                  <div class="col-sm-3">

                  </div>
                  <div class="col-sm-4">
                    <input type="teks" name="kabi" id="kabi" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                  <div class="col-sm-5">
                    <input type="teks" name="provi" id="provi" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>
                <div class="form-group row sz">
                  <div class="col-sm-3">

                  </div>
                  <div class="col-sm-9">
                    <input type="teks" name="kdi" id="kdi" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>

                </div>


                <div class="form-group row sz">
                  <div class="col-sm-3">
                    Warganegara
                  </div>
                  <div class="col-sm-9">
                    <input type="teks" name="wrgngri" id="wrgngri" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>


                <div class="form-group row sz">
                  <div class="col-sm-3">
                    Pekerjaan
                  </div>
                  <div class="col-sm-9">
                    <input type="teks" name="pekerjaani" id="pekerjaani" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>

                <div class="form-grouprow row sz">
                  <div class="col-sm-3">
                    Agama
                  </div>
                  <div class="col-sm-9">
                    <input type="teks" name="agmi" id="agmi" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>

                <div class="form-group row sz">
                  <div class="col-sm-3">
                    Pendidikan
                  </div>
                  <div class="col-sm-9 ">
                    <input type="teks" name="pnddkni" id="pnddkni" value="" class="form-control input-sm" placeholder="" required="true">
                  </div>
                </div>
                <!-- <ul style="margin-left: -20px; font-size: 14px;">
              <li >Telp. (0274) 446-1099</li>
              <li> <a style="color: blue; "><u>Email : kuangemplak.slemandiy@yahoo.com</u></a></li>
            </ul> -->
              </div>
            </div>

          </div>

        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row ">
              <label for="inputNIK" class="col-sm-5 ">Kelengkapan Berkas</label>
            </div>
            <div class="col-md-3">
              <div class="form-group row">
                <div class="checkbox">
                  <label><input type="checkbox" name="cb1" id="cb1" onchange="ceklist();" value="">Fotocopy KTP</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" name="cb2" id="cb2" onchange="ceklist();" value="">Fotocopy KK</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" name="cb3" id="cb3" onchange="ceklist();" value="">Foto 2 x 3</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" name="cb4" id="cb4" onchange="ceklist();" value="">Ket. Sehat</label>
                </div>

              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group row">
                <div class="checkbox">
                  <label><input type="checkbox" name="cb5" id="cb5" onchange="ceklist();" value="">N1</label>
                </div>
                <!-- <div class="form-group row"> -->
                <div class="checkbox">
                  <label><input type="checkbox" name="cb6" id="cb6" onchange="ceklist();" value="">N2</label>
                </div>
                <!-- <div class="form-group row"> -->
                <div class="checkbox">
                  <label><input type="checkbox" name="cb7" id="cb7" onchange="ceklist();" value="">N3</label>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <button type="button" class="btn btn-primary float-right " name="val1" id="val1" disabled="disabled" style="float:right">Lanjut</button>

        </div>
      </form>
    </section>

    <section class="panel" id="form_add_wali" name="form_add_wali" style="display: none;">
      <header class="panel-heading">
        <div class="panel-actions">
          <a href="#" class="fa fa-caret-down"></a>
          <a href="#" id="closeformwali"><i class="fa fa-times"></i></a>
        </div>

        <h2 class="panel-title">Data Wali</h2>
      </header>
      <div class="panel-body">

        <form class="tambahwali" action="" method="POST">

          <div class="form-group row">
            <div class="col-sm-2">
              NIK Wali
            </div>
            <?php include_once '.././admin/backend/autopernikahan.php'; ?>
            <div class="col-sm-10" id="ambilrm">
              <input type="hidden" name="jdwl1" id="jdwl1" value="">
              <input type="hidden" name="idpernikahan1" id="idpernikahan1" value=<?php echo $idpnk; ?>>
              <input type="teks" name="nik_wali" id="nik_wali" value="" class="form-control" placeholder="NIK Wali" required="true">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">
              Nama Wali
            </div>
            <div class="col-sm-10">
              <input type="teks" name="nama_wali" value="" class="form-control" placeholder="Nama Wali" required="true">
            </div>
          </div>
          <?php
          $tglnow = date('Y-m-d');
          $ytgl = date('Y');
          $mtgl = date('m');
          $dtgl = date('d');
          $ntgl1 = $ytgl - 20;
          $newtgl = $ntgl1."-".$mtgl."-".$dtgl;
           ?>
          <div class="form-group row">
            <div class="col-sm-2">
              Tanggal Lahir
            </div>
            <div class="col-sm-10">
              <input type="date" id="tgl_wali" value=<?php echo $newtgl ?> max=<?php echo $tglnow ?> class="form-control" name="tgllhr_wali" required="true" default>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">
              Alamat
            </div>
            <div class="col-sm-10">
              <textarea class="form-control " name="almat_wali" placeholder="Dusun/ Jl" required="true"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              RT
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="" name="rt_wali" value="" placeholder="RT">
            </div>
            <div class="col-sm-2">
              RW
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="" name="rw_wali" value="" placeholder="RW">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              Kelurahan
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="" name="kel_wali" value="" placeholder="Kelurahan/ Desa">
            </div>
            <div class="col-sm-2">
              Kecamatan
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="" name="kec_wali" value="" placeholder="Kecamatan">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              Kabupaten
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="" name="kab_wali" value="" placeholder="Kabupaten">
            </div>
            <div class="col-sm-2">
              Provinsi
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="" name="prov_wali" value="Yogyakarta" placeholder="Provinsi">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              Kode Pos
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="" name="kd_wali" value="55288" placeholder="Kode Pos">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">
              Warganegara
            </div>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="wrgngr_wali" placeholder="Warganegara" value="Indonesia" required="true">
            </div>
          </div>


          <div class="form-group row">
            <div class="col-sm-2">
              Pekerjaan
            </div>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="pkrjaan_wali" placeholder="Pekerjaan" required="true">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-2">
              Agama
            </div>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="agm_wali" value="Islam" required="true">
              <!-- <select id="" class="form-control" name="agm_wali" required="true">
                <option selected value="Islam">Piliha Agama</option>
                <option> Islam</option>
                <option> Kristen</option>
                <option> Katholik</option>
                <option> Hindu</option>
                <option> Budha</option>
                <option >Konghuchu</option>
                <option >Aliran Kepercayaan</option>

              </select> -->
              <!-- <input type="text" class="form-control" name="agm_suami" placeholder="Agama" required="true"> -->
            </div>
          </div>


          <div class="row">
            <div class="form-group">
              <div class="col-md-8 col-md-push-4">
                <button type="button" class="btn btn-primary " name="add_wali" id="add_wali" style="float:right">
                  <i class="fa fa-save"></i> Lanjut
                </button>
                <button type="button" class="btn btn-danger" id="batal1" name="batal" style="float:right; margin-right:10px;">
                  <i class="fa fa-times"></i> Batal
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
<!-- repair -->
    <section class="panel" id="form_add_saksi1" name="form_add_saksi1" style="display: none;">
      <header class="panel-heading">
        <div class="panel-actions">
          <a href="#" class="fa fa-caret-down"></a>
          <a href="#" id="closeformwali"><i class="fa fa-times"></i></a>
        </div>

        <h2 class="panel-title">Data Saksi</h2>
      </header>
      <div class="panel-body">

        <form class="tambahsaksi" action="" method="POST">

          <div class="form-group row">
            <div class="col-sm-2">
              NIK Saksi 1
            </div>
            <?php include_once '.././admin/backend/autonkh.php'; ?>
            <div class="col-sm-4" id="ambilrm">
              <input type="teks" name="nik_saksi1" id="nik_saksi1" value="" class="form-control" placeholder="ID saksi 1" required="true">
              <input type="hidden" name="idprnkhn1" id="idprnkhn1" value="">
              <input type="hidden" name="idnkh1" id="idnkh1" value=<?php echo $idnkh; ?>>
            </div>
            <div class="col-sm-2">
              NIK Saksi 2
            </div>
            <div class="col-sm-4" id="ambilrm">
              <input type="teks" name="nik_saksi2" id="nik_saksi2" value="" class="form-control" placeholder="ID saksi 2" required="true">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">
              Nama Saksi
            </div>
            <div class="col-sm-4">
              <input type="teks" name="nama_saksi1" value="" class="form-control" placeholder="Nama Saksi" required="true">
            </div>
            <div class="col-sm-2">
              Nama Saksi
            </div>
            <div class="col-sm-4">
              <input type="teks" name="nama_saksi2" value="" class="form-control" placeholder="Nama Saksi" required="true">
            </div>

          </div>
          <div class="form-group row">
            <div class="col-sm-2">
              Tanggal Lahir
            </div>
            <div class="col-sm-4">
              <input type="date" value=<?php echo $newtgl ?> max=<?php echo $tglnow ?> id="date_saksi1" class="form-control" name="tgllhr_saksi1" onchange="thun();" required="true" default>
              <input type="hidden" name="thun1" id="thun1" value="">
            </div>

            <div class="col-sm-2">
              Tanggal Lahir
            </div>
            <div class="col-sm-4">
              <input type="date" value=<?php echo $newtgl ?> max=<?php echo $tglnow ?> id="date_saksi2" class="form-control" name="tgllhr_saksi2" onchange="thunthun();" required="true" default>
              <input type="hidden" name="thun2" id="thun2" value="">
            </div>

          </div>
          <div class="form-group row">
            <div class="col-sm-2">
              Alamat
            </div>
            <div class="col-sm-4">
              <textarea class="form-control " name="alamat_saksi1" placeholder="Dusun/ Jl." required="true"></textarea>
            </div>
            <div class="col-sm-2">
              Alamat
            </div>
            <div class="col-sm-4">
              <textarea class="form-control " name="alamat_saksi2" placeholder="Dusun/ Jl." required="true"></textarea>
            </div>

          </div>

          <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="rt_saksi1" value="" placeholder="RT">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="rw_saksi1" value="" placeholder="RW">
            </div>

            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="rt_saksi2" value="" placeholder="RT">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="rw_saksi2" value="" placeholder="RW">
            </div>

          </div>

          <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="kel_saksi1" value="" placeholder="Kelurahan">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="kec_saksi1" value="" placeholder="Kecamatan">
            </div>

            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="kel_saksi2" value="" placeholder="Kelurahan">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="kec_saksi2" value="" placeholder="Kecamatan">
            </div>

          </div>

          <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="kab_saksi1" value="" placeholder="Kabupaten">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="prov_saksi1" value="Yogyakarta" placeholder="Provinsi">
            </div>

            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="kab_saksi2" value="" placeholder="Kabupaten">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="prov_saksi2" value="Yogyakarta" placeholder="Provinsi">
            </div>

          </div>

          <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="kd_saksi1" value="55288" placeholder="Kode Pos">
            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="kd_saksi2" value="55288" placeholder="Kode Pos">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-2">
              Warganegara
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="wrgngr_saksi1" placeholder="Warganegara" value="Indonesia" required="true">
            </div>
            <div class="col-sm-2">
              Warganegara
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="wrgngr_saksi2" placeholder="Warganegara" required="true" value="Indonesia">
            </div>

          </div>


          <div class="form-group row">
            <div class="col-sm-2">
              Pekerjaan
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="pkrjaan_saksi1" placeholder="Pekerjaan" required="true">
            </div>
            <div class="col-sm-2">
              Pekerjaan
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="pkrjaan_saksi2" placeholder="Pekerjaan" required="true">
            </div>

          </div>

          <div class="form-group row">
            <div class="col-sm-2">
              Agama
            </div>
            <div class="col-sm-4">
              <input type="text" name="" class="form-control" value="Islam">
              <!-- <select id="" class="form-control" name="agm_saksi1" required="true">
                <option selected value="Islam">Piliha Agama</option>
                <option> Islam</option>
                <option> Kristen</option>
                <option> Katholik</option>
                <option> Hindu</option>
                <option> Budha</option>
                <option >Konghuchu</option>
                <option >Aliran Kepercayaan</option>

              </select> -->
              <!-- <input type="text" class="form-control" name="agm_suami" placeholder="Agama" required="true"> -->
            </div>
            <div class="col-sm-2">
              Agama
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="" value="Islam">
              <!-- <select id="" class="form-control" name="agm_saksi2" required="true">
                <option selected value="Islam">Piliha Agama</option>
                <option> Islam</option>
                <option> Kristen</option>
                <option> Katholik</option>
                <option> Hindu</option>
                <option> Budha</option>
                <option>Konghuchu</option>
                <option>Aliran Kepercayaan</option>

              </select> -->
              <!-- <input type="text" class="form-control" name="agm_suami" placeholder="Agama" required="true"> -->
            </div>
          </div>


          <div class="row">
            <div class="form-group">
              <div class="col-md-8 col-md-push-4">
                <button type="button"  class="btn btn-primary " name="add_saksi" id="add_saksi" style="float:right">
                  <i class="fa fa-save"></i> Simpan
                </button>
                <button type="button" class="btn btn-danger" id="batal2" name="batal" style="float:right; margin-right:10px;">
                  <i class="fa fa-times"></i> Batal
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>

    <section class="panel" id="form_penjadwalan" name"form_pendaftaran"  style="display: none;">
      <header class="panel-heading">
        <div class="panel-actions">
          <a href="#" class="fa fa-caret-down"></a>
          <a href="#" id="closeformjadwal"><i class="fa fa-times"></i></a>
        </div>

        <h2 class="panel-title">Penjadwalan</h2>
      </header>
      <div class="panel-body">
        <form class="jadwal1" action="" method="POST">

          <div class="form-group row">
            <div class="col-sm-2">
              Tanggal Pernikahan
            </div>
            <?php
            $now1 = date('Y-m-d');
             include_once '.././admin/backend/autojadwal.php';
             ?>
            <div class="col-sm-10" id="ambilrm">
              <input type="hidden" name="idjdwal" id="idjdwal" value=<?php echo $idjdw; ?>>
              <input type="hidden" name="idkar1" id="idkar1" value=<?php echo $id_karyawan; ?>>
              <input type="hidden" name="pdf1" id="pdf1">
              <input type="date" name="tgl_menikah" id="tgl_menikah" min=<?php echo $now1 ?> value=<?php echo $now1 ?> class="form-control" onchange="tglnkh();" required="true">
            </div>
          </div>
          <!-- ---------------- -->
          <div class="form-group row">
            <div class="col-sm-2">
              Waktu Pernikahan
            </div>

            <div class="col-sm-10" id="wktnikah">
              <!-- <input type="time" name="wkt_menikah" id="wkt_menikah" value="07:00" min="07:00" max="15:00" class="form-control" placeholder="ID saksi" required="true"> -->
              <?php

              include_once '.././config/dbconfig.php';
              $query = "SELECT jam from waktu_nikah WHERE jam NOT IN (SELECT penjadwalan.wkt_nikah FROM penjadwalan WHERE penjadwalan.tgl_nikah = '$now1');";
              $get =  mysqli_query($koneksi,$query);
              $option = '';
              while ($a = mysqli_fetch_assoc($get)) {
                $option .= '<option  value = "'.$a['jam'].'">'.substr($a['jam'],0,5).'</option>';
              }
               ?>
               <select class="form-control" name="wkt_menikah" id="wkt_menikah">
                 <?php echo $option; ?>
               </select>
            </div>

          </div>
          <!-- --------- -->
          <div class="row">
            <div class="form-group">
              <div class="col-md-8 col-md-push-4">
                <button type="button" class="btn btn-primary " name="add_jadwal" id="add_jadwal" style="float:right; margin-left:10px;">

                  <i class="fa fa-save"></i> Lanjut
                </button>
                <button type="button" class="btn btn-danger" id="batal3" name="batal" style="float:right">
                  <i class="fa fa-times"></i> Batal
                </button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </section>
    <!-- <button type="button" name="button" onclick="cekpendaftaran();">test</button> -->

  </section>
  <!-- end: page -->
</section>
<!-- fungsi -->
<script type="text/javascript">
  function getcari() {
    var cari = document.getElementById('iddftr').value;
    document.getElementById('pdf').value = cari;
    document.getElementById('pdf1').value = cari;
    $.ajax({
      type: "GET",
      url: ".././admin/backend/detaildaftar.php?",
      data: "id_pendaftaran=" + cari,
      success: function(data) {
        var $response = $(data);
        let status = $response.filter("#status").text();
        if (status == 'ada') {
          $('#niks1').val($response.filter('#niks').text());
          $('#niks').html($response.filter('#niks').text());
          $('#namas').val($response.filter('#namas').text());
          $('#tmptlhrs').val($response.filter('#tmpts').text())
          $('#tgllhrs').val($response.filter('#tgls').text());
          $('#almts').val($response.filter('#almts').text());
          $('#rts').val($response.filter('#rts').text());
          $('#rws').val($response.filter('#rws').text());
          $('#kels').val($response.filter('#kels').text());
          $('#kecs').val($response.filter('#kecs').text());
          $('#kabs').val($response.filter('#kabs').text());
          $('#provs').val($response.filter('#provs').text());
          $('#kds').val($response.filter('#kds').text());
          $('#wrgngrs').val($response.filter('#wrgas').text());
          $('#pekerjaans').val($response.filter('#pekers').text());
          $('#agms').val($response.filter('#agms').text());
          $('#pnddkns').val($response.filter('#pdds').text());

          $('#niki1').val($response.filter('#niki').text());
          $('#niki').html($response.filter('#niki').text());
          $('#namai').val($response.filter('#namai').text());
          $('#tmptlhri').val($response.filter('#tmpti').text())
          $('#tgllhri').val($response.filter('#tgli').text());
          $('#almti').val($response.filter('#almti').text());

          $('#rti').val($response.filter('#rti').text());
          $('#rwi').val($response.filter('#rwi').text());
          $('#keli').val($response.filter('#keli').text());
          $('#keci').val($response.filter('#keci').text());
          $('#kabi').val($response.filter('#kabi').text());
          $('#provi').val($response.filter('#provi').text());
          $('#kdi').val($response.filter('#kdi').text());
          $('#wrgngri').val($response.filter('#wrgai').text());
          $('#pekerjaani').val($response.filter('#pekeri').text());
          $('#agmi').val($response.filter('#agmi').text());
          $('#pnddkni').val($response.filter('#pddi').text());

          $("#form_validasi").hide('500');
               $("#form_validasi").show('500');
          $("#form_add_wali").hide('500');
          $("#form_add_saksi1").hide('500');
          $("#form_add_saksi2").hide('500');
          $("#form_penjadwalan").hide('500');
          $("#list_pendaftaran").hide('500');


        } else {
          swal({
            title: "Info",
            text: "Data tidak terdaftar atau sudah tervalidasi",
            type: "warning",
            confirmButtonText: "oke"
          });
          $("#form_validasi").hide('500');
          $("#form_add_wali").hide('500');
          $("#form_add_saksi1").hide('500');

        }


        // $('#form_detail_nikah').hide(350);
        // $('#form_detail_nikah').slideDown( "slow" );
      }
    });
  }




  // $(document).on('click', '#val1', function(e){
  //   $("#form_add_wali").show('500');
  //   $("#form_validasi").hide('slideDown');
  //   $("#form_add_saksi1").hide('500');
  //   $("#form_add_saksi2").hide('500');
  //   // $("#hilang").hide('slow');
  //  e.preventDefault();
  // });

  $('#val1').click(function() {
    if (document.getElementById('niks1').value == "") {
      window.alert("test");
    } else {

      let data = $('.newupdate').serialize();
      $.ajax({
        url: "./backend/updatesuamiistri.php",
        type: "POST",
        data: data,
        success: function(data) {
          let $response = $(data);
          let status = $response.filter("#status").text();
          // let nik = $response.filter("#nik").text();
          let pesan = $response.filter("#pesan").text();
          if (status == 'sukses') {
            // document.getElementById('nik_calon_suami').value = nik;
            $("#form_add_wali").hide('500');
            $("#form_penjadwalan").show('500');
            $("#form_validasi").hide('slideDown');
            $("#form_add_saksi1").hide('500');
            // $("#form_add_saksi2").hide('500');
            // $("#hilang").show('slow');
          } else {
            alert('gagal total' + pesan);
          }
        }
      });
    }
  })

  $('#add_jadwal').click(function() {
    if (document.getElementById('pdf1').value == "") {
      window.alert("Anda Tidak Berwenang melakukan Fungsi ini");
    } else {
      var idjdwl = document.getElementById('idjdwal').value;
      document.getElementById('jdwl1').value = idjdwl;

      let data = $('.jadwal1').serialize();
      $.ajax({
        url: "./backend/tambahjadwal.php",
        type: "POST",
        data: data,
        success: function(data) {
          let $response = $(data);
          let status = $response.filter("#status").text();
          // alert(status);
          // let nik = $response.filter("#nik").text();
          let pesan = $response.filter("#pesan").text();
          let tr = $response.filter("#rtr").text();
          if (status == 'sukses') {
            // document.getElementById('nik_calon_suami').value = nik;
            $("#form_add_wali").show('500');
            $("#form_penjadwalan").hide('500');
            $("#form_validasi").hide('slideDown');
            $("#form_add_saksi1").hide('500');
            // $("#form_add_saksi2").hide('500');
            // $("#hilang").show('slow');
          } else {
            alert('gagal total' + pesan);
            alert(tr);
          }
        }
      });
    }
  })

  $('#add_wali').click(function() {
    if (document.getElementById('nik_wali').value == "") {
      window.alert("test");
    } else {
      var idpnkhn = document.getElementById('idpernikahan1').value;
      document.getElementById('idprnkhn1').value = idpnkhn;

      let data = $('.tambahwali').serialize();
      $.ajax({
        url: "./backend/tambahwali.php",
        type: "POST",
        data: data,
        success: function(data) {
          let $response = $(data);
          let status = $response.filter("#status").text();
          // let nik = $response.filter("#nik").text();
          let pesan = $response.filter("#pesan").text();
          if (status == 'sukses') {
            // document.getElementById('nik_calon_suami').value = nik;
            $("#form_add_wali").hide('500');
            $("#form_penjadwalan").hide('500');
            $("#form_validasi").hide('slideDown');
            $("#form_add_saksi1").show('500');
            // $("#form_add_saksi2").hide('500');
            // $("#hilang").show('slow');
          } else {
            alert('gagal total' + pesan);
          }
        }
      });
    }
  })

  $('#add_saksi').click(function() {
    if (document.getElementById('nik_saksi1').value == "" || document.getElementById('nik_saksi2').value == "") {
      window.alert("Masukkan Data Dengan Benar");
    } else {
      // var idpnkhn = document.getElementById('idpernikahan1').value;
      // document.getElementById('idprnkhn1').value = idpnkhn;

      let data = $('.tambahsaksi').serialize();
      $.ajax({
        url: "./backend/tambahsaksi.php",
        type: "POST",
        data: data,
        success: function(data) {
          let $response = $(data);
          let status = $response.filter("#status").text();
          let pesan = $response.filter("#pesan").text();
          if (status == 'sukses') {
            $("#form_add_wali").hide('500');
            $("#form_penjadwalan").hide('500');
            $("#form_validasi").hide('slideDown');
            $("#form_add_saksi1").hide('500');
            $("#list_pendaftaran").show('500');
            swal("","validasi Sukses","success")
          } else {
            alert('gagal total' + pesan);
          }
        }
      });
    }
  })
//auto jam jadwal
  function tglnkh(){
    var tglnikh = document.getElementById("tgl_menikah").value;
    let url = '.././admin/backend/tanggalmenikah.php?now='+tglnikh;
    $("#wktnikah").load(url);
    // alert(tglnikh);
  }

  $(document).ready(function() {

    $(document).on('click', '#batal2', function(e){
      $("#form_add_saksi1").hide('slow');
      $("#form_add_wali").show('slow');
     e.preventDefault();
    });
    $(document).on('click', '#batal1', function(e){
      $("#form_add_wali").hide('slow');
      $("#form_penjadwalan").show('slow');
     e.preventDefault();
    });
    $(document).on('click', '#batal3', function(e){
      $("#form_penjadwalan").hide('slow');
      $("#form_validasi").show('slow');
     e.preventDefault();
    });


  });



  function edit_daftar(idpendaftaran){

  	$.ajax({
  		type: "GET",
  		url : ".././admin/backend/detailpendaftaran1.php?",
  		data: "id_pendaftaran="+idpendaftaran,
  		success: function (data){
  			var $response = $(data);
        $('#niks1').val($response.filter('#niks').text());
        $('#niks').html($response.filter('#niks').text());
        $('#namas').val($response.filter('#namas').text());
        $('#tmptlhrs').val($response.filter('#tmpts').text())
        $('#tgllhrs').val($response.filter('#tgls').text());
        $('#almts').val($response.filter('#almts').text());
        $('#rts').val($response.filter('#rts').text());
        $('#rws').val($response.filter('#rws').text());
        $('#kels').val($response.filter('#kels').text());
        $('#kecs').val($response.filter('#kecs').text());
        $('#kabs').val($response.filter('#kabs').text());
        $('#provs').val($response.filter('#provs').text());
        $('#kds').val($response.filter('#kds').text());
        $('#wrgngrs').val($response.filter('#wrgas').text());
        $('#pekerjaans').val($response.filter('#pekers').text());
        $('#agms').val($response.filter('#agms').text());
        $('#pnddkns').val($response.filter('#pdds').text());

        $('#niki1').val($response.filter('#niki').text());
        $('#niki').html($response.filter('#niki').text());
        $('#namai').val($response.filter('#namai').text());
        $('#tmptlhri').val($response.filter('#tmpti').text())
        $('#tgllhri').val($response.filter('#tgli').text());
        $('#almti').val($response.filter('#almti').text());
        $('#rti').val($response.filter('#rti').text());
        $('#rwi').val($response.filter('#rwi').text());
        $('#keli').val($response.filter('#keli').text());
        $('#keci').val($response.filter('#keci').text());
        $('#kabi').val($response.filter('#kabi').text());
        $('#provi').val($response.filter('#provi').text());
        $('#kdi').val($response.filter('#kdi').text());
        $('#wrgngri').val($response.filter('#wrgai').text());
        $('#pekerjaani').val($response.filter('#pekeri').text());
        $('#agmi').val($response.filter('#agmi').text());
        $('#pnddkni').val($response.filter('#pddi').text());

        $('#pdf').val($response.filter('#idpernikahan').text());
        $('#pdf1').val($response.filter('#idpernikahan').text());

        $("#form_validasi").hide('500');
        $("#form_validasi").show('500');
        $("#form_add_wali").hide('500');
        $("#form_add_saksi1").hide('500');
        $("#form_add_saksi2").hide('500');
        $("#form_penjadwalan").hide('500');
        $("#list_pendaftaran").hide('500');

  			// $('#form_edit_akun').hide(350);
  			// $('#form_edit_akun').slideDown( "slow" );
  		}
  	});
  }
// coba jam nikah
// $('#tgl_menikah').change(function() {
//     let data = $('.tgl_menikah').serialize();
//     $.ajax({
//       url: "./backend/cekjadwal.php",
//       type: "POST",
//       data: data,
//       success: function(data){
//         let $response = $(data);
//         let status = $response.filter("#status").text();
//         let pesan = $response.filter("#pesan").text();
//         let hasil = $response.filter("#hasil").text();
//         if (status == 'sukses') {
//            swal("","cek"+hasil,"success")
//         }else {
//             alert('gagal' + pesan);
//           }
//         }
//
//     });
// })
// end coba jam nikah

function thun(){
  var input = document.getElementById( 'date_saksi1' ).value;
    var d = new Date( input );
    var n = (new Date()).getFullYear()
    if ( !!d.valueOf() ) { // Valid date
      year = d.getFullYear();
      month = d.getMonth();
      day = d.getDate();
      nthun = n - year;
      document.getElementById('thun1').value = nthun;

    } else { /* Invalid date */ }
}
function thunthun(){
  var inputt = document.getElementById( 'date_saksi2' ).value;
    var d1 = new Date( inputt );
    var n1 = (new Date()).getFullYear()
    if ( !!d1.valueOf() ) { // Valid date
      year = d1.getFullYear();
      month = d1.getMonth();
      day = d1.getDate();
      nthun1 = n1 - year;
      document.getElementById('thun2').value = nthun1;

    } else { /* Invalid date */ }
}
var btc = document.getElementById('val1');
var check1 = document.getElementById('cb1');
var check2 = document.getElementById('cb2');
var check3 = document.getElementById('cb3');
var check4 = document.getElementById('cb4');
var check5 = document.getElementById('cb5');
var check6 = document.getElementById('cb6');
var check7 = document.getElementById('cb7');

function ceklist(){
if(check1.checked && check2.checked && check3.checked && check4.checked && check5.checked && check6.checked && check7.checked){

    btc.disabled = false;
} else {
    btc.disabled = true;
}
}
  // $(document).on('click', '#add_wali', function(e) {
  //   $("#form_add_wali").hide('500');
  //   $("#form_validasi").hide('slideDown');
  //   $("#form_add_saksi1").show('500');
  //   $("#form_add_saksi2").hide('500');
  //   // $("#hilang").hide('slow');
  //   e.preventDefault();
  // });

  // $(document).on('click', '#add_saksi', function(e) {
  //   $("#form_add_wali").hide('500');
  //   $("#form_validasi").hide('slideDown');
  //   $("#form_add_saksi1").hide('500');
  //   // $("#form_add_saksi2").show('500');
  //   // $("#hilang").hide('slow');
  //   e.preventDefault();
  // });


  // $(document).on('click', '#add_saksi2', function(e) {
  //   $("#form_add_wali").hide('500');
  //   $("#form_validasi").hide('slideDown');
  //   $("#form_add_saksi1").hide('500');
  //   $("#form_add_saksi2").hide('500');
  //   // $("#hilang").hide('slow');
  //   e.preventDefault();
  // });


function cekpendaftaran(){
  $.ajax({
    url: "./backend/cekpendaftaran.php",
    success : function(){
      // alert('test');
      $("#datapendaftaran").load('.././admin/backend/refreshpendaftaran.php');
    }
  });
}

setInterval(cekpendaftaran, 3000);


</script>
