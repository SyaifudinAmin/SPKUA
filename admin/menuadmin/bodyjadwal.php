<section role="main" class="content-body">
  <header class="page-header">
    <h2>Jadwal Pernikahan</h2>

    <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
        <li>
          <a href="index.php">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li><span class="mrg">Jadwal Pernikahan</span></li>
      </ol>

      <!-- <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a> -->
    </div>
  </header>


  <div class="row">

    <div class="col-md-6 col-lg-12 col-xl-6">

      <!-- Find --------------------- -->
      <div class="row sp">
        <div class="col-md-12 col-lg-4 col-xl-6 mrq">

          <div class="form-group row">
            <label for="Cari" class="col-sm-5  tt">Tanggal</label>
            <div class="col-sm-7 ">
              <?php
              $tgl = date('Y-m-d');
              $nowt = date('Y');
              $nowb = date('m');
              $nowh = date('d');
              $now = $nowt."-".$nowb."-".$nowh;
               ?>
              <input type="date" class="form-control" min=<?php echo $tgl; ?> name="inputtgl" id="inputtgl" value="<?php echo $now; ?>">
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 col-xl-6">
          <div class="form-group row">
            <button type="button" class="btn btn-primary" id="cari" name="button">Cari</button>
          </div>
        </div>
      </div>
      <br>
      <!-- Content --------------------- -->
      <section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<!-- <a href="#" class="fa fa-times"></a> -->
										</div>

										<h3 class="panel-title">Jadwal Pernikahan</h3>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-striped mb-none">
												<thead>
													<tr>
														<th>ID Penjadwalan</th>
														<th>Waktu Pernikahan</th>
														<th>Nama Calon Suami</th>
														<th>Nama Calon Istri</th>
													</tr>
												</thead>
												<tbody  id="loadtable">
                          <?php
                          include_once '.././admin/backend/showjadwal.php';
                           // include_once '.././admin/backend/refreshjadwal.php';



                         while ($a = mysqli_fetch_object($jadwal)) {

                          ?>
													<tr>
														<td><?php echo $a->id_penjadwalan ?></td>
														<td><?php echo substr($a->wkt_nikah,0,5) ?></td>
														<td><?php echo $a->nama_s ?></td>
														<td><?php echo $a->nama_i ?></td>
													</tr>
                        <?php } ?>

												</tbody>
											</table>
										</div>
									</div>
								</section>

    </div>
  </div>


</section>

<script type="text/javascript">
  $("#cari").click(function() {
    let tgl = $("#inputtgl").val();
    $("#loadtable").load(".././admin/backend/refreshjadwal.php?tgl="+tgl);
  });
</script>
