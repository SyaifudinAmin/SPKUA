<section role="main" class="content-body">
  <header class="page-header">
    <h2>Dashboard</h2>

    <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
        <li>
          <a href="index.php">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li><span class="mrg">Dashboard</span></li>
      </ol>


    </div>
  </header>


  <div class="row">

    <div class="col-md-6 col-lg-12 col-xl-6">
      <div class="row">
        <div class="col-md-12 col-lg-4 col-xl-6">
          <section class="panel panel-featured-left panel-featured-primary">
            <div class="panel-body">
              <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon">
                  <div class="summary-icon bg-primary">
                    <i class="fa fa-envelope"></i>
                  </div>
                </div>
                <div class="widget-summary-col">
                  <div class="summary">
                    <h4 class="title">Pendaftaran</h4>
                    <div class="info">
                      <?php include_once '.././admin/backend/showlist.php';
                      while ($a = mysqli_fetch_object($pendaftaran)) {
                      ?>
                      <strong class="amount"><?php echo $a->jmldftr; ?></strong>
                    <?php }
                    include_once '.././admin/backend/showlist.php';
                    while ($a = mysqli_fetch_object($inpendaftaran)) {
                    ?>
                      <span class="text-primary">(<?php echo $a->indftr; ?> Belum Tervalidasi)</span>
                    <?php } ?>
                    </div>
                  </div>
                  <div class="summary-footer">
                    <!-- <a class="text-muted text-uppercase" href="">(view all)</a> -->
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <div class="col-md-12 col-lg-4 col-xl-6">
          <section class="panel panel-featured-left panel-featured-tertiary">
            <div class="panel-body">
              <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon">
                  <div class="summary-icon bg-tertiary">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
                <div class="widget-summary-col">
                  <div class="summary">
                    <h4 class="title">Penjadwalan</h4>
                    <div class="info">
                      <?php include_once '.././admin/backend/showlist.php';
                      while ($a = mysqli_fetch_object($penjadwalan)) {
                         ?>
                      <strong class="amount"><?php echo $a->jmljadwal; ?></strong>
                    <?php }
                    include_once '.././admin/backend/showlist.php';
                    while ($a = mysqli_fetch_object($jdwl)) {
                    ?>
                      <span class="text-primary">(<?php echo $a->jadwalnow; ?> Hari Ini)</span>
                    <?php } ?>
                    </div>
                  </div>
                  <div class="summary-footer">
                    <!-- <a class="text-muted text-uppercase">(VIEW ALL)</a> -->
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-12 col-lg-4 col-xl-6">
          <section class="panel panel-featured-left panel-featured-quartenary">
            <div class="panel-body">
              <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon">
                  <div class="summary-icon bg-quartenary">
                    <i class="fa fa-table"></i>
                  </div>
                </div>
                <div class="widget-summary-col">
                  <div class="summary">
                    <h4 class="title">Data Pernikahan</h4>
                    <div class="info">
                      <?php include_once '.././admin/backend/showlist.php';
                      while ($a = mysqli_fetch_object($pernikahan)) {
                         ?>
                      <strong class="amount"><?php echo $a->jmlnkh; ?></strong>
                    <?php } ?>
                    </div>
                  </div>
                  <div class="summary-footer">
                    <!-- <a class="text-muted text-uppercase">(ViEW ALL)</a> -->
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>




  <!-- end: page -->
</section>
