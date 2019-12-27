<?php
 include_once '../backend/autentikasi.php';

 // echo "Selamat datang ".$username.' Posisi: '.$posisi .'Id Karyawan: '.$id_karyawan;

 ?>
 <!-- <br> -->
 <!-- <a href="../login/logout.php">Logout</a> -->
<!-- =========== -->

<!doctype html>
<html class="fixed">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>KUA Ngemplak</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
	<meta name="author" content="JSOFT.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="../assets/vendor/select2/select2.css" />
	<link rel="stylesheet" href="../assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/theme.css" />
	<link rel="stylesheet" href="../assets/css/sweetalert.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="../assets/vendor/modernizr/modernizr.js"></script>

	<script src="../assets/js/sweetalert.min.js"></script>
	<script src="../assets/vendor/jquery/jquery.js"></script>

</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header ">
				<div class="logo-container">
					<a href="index.php" class="logo ">
						<img class="mr_logo"src="../assets/img/test_new_mini_logo.png" height="50" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">



					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
								<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name"><?php echo $username; ?></span>
								<span class="role"><?php echo $posisi; ?></span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li> -->

								<li>
									<a role="menuitem" tabindex="-1" href="../login/logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
                  <?php
                  if($posisi == "Admin"){
                    ?>
                    <li>
                      <a href="?f=bodyvalidasi">
                        <?php include_once '.././admin/backend/showlist.php';
                        while ($a = mysqli_fetch_object($inpendaftaran1)) {
                        ?>
                        <span class="pull-right label label-primary"><?php echo $a->indftr1; ?></span>
                      <?php } ?>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Validasi</span>
                      </a>
                    </li>
                    <li>
                      <a href="?f=bodyjadwal">
                      <?php
                      include_once '.././admin/backend/showlist.php';
                      while ($a = mysqli_fetch_object($jdwl1)) {
                      ?>
                        <span class="pull-right label label-primary"><?php echo $a->jadwalnow1; ?></span>
                      <?php } ?>
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span>Jadwal Pernikahan</span>
                      </a>
                    </li>
                    <li>
                      <a href="?f=bodynikah">
                        <span class="pull-right label label-primary"></span>
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span>Data Pernikahan</span>
                      </a>
                    </li>
                    <li>
                      <a href="?f=bodyakun">
                        <span class="pull-right label label-primary"></span>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Pengaturan Akun</span>
                      </a>
                    </li>

                    <?php
                  } else if($posisi == "Kepala"){
                    ?>
                    <li>
                      <a href="?f=bodyjadwal">
                      <?php
                      include_once '.././admin/backend/showlist.php';
                      while ($a = mysqli_fetch_object($jdwl1)) {
                      ?>
                        <span class="pull-right label label-primary"><?php echo $a->jadwalnow1; ?></span>
                      <?php } ?>
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span>Jadwal Pernikahan</span>
                      </a>
                    </li>
                    <li>
                      <a href="?f=bodynikah">
                        <span class="pull-right label label-primary"></span>
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span>Data Pernikahan</span>
                      </a>
                    </li>
                    <?php
                  } else if($posisi == "Resepsionis"){
                   ?>

                   <li>
                     <a href="?f=bodyvalidasi">
                       <?php include_once '.././admin/backend/showlist.php';
                       while ($a = mysqli_fetch_object($inpendaftaran1)) {
                       ?>
                       <span class="pull-right label label-primary"><?php echo $a->indftr1; ?></span>
                     <?php } ?>
                       <i class="fa fa-envelope" aria-hidden="true"></i>
                       <span>Validasi</span>
                     </a>
                   </li>
                   <?php
                 } else if($posisi == "Penghulu") {
                    ?>
                    <li>
                      <a href="?f=bodyjadwal">
                      <?php
                      include_once '.././admin/backend/showlist.php';
                      while ($a = mysqli_fetch_object($jdwl1)) {
                      ?>
                        <span class="pull-right label label-primary"><?php echo $a->jadwalnow1; ?></span>
                      <?php } ?>
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span>Jadwal Pernikahan</span>
                      </a>
                    </li>
                    <?php
                  } else if($posisi == "Pengolah Data") {
                     ?>
                     <li>
                       <a href="?f=bodyvalidasi">
                         <?php include_once '.././admin/backend/showlist.php';
                         while ($a = mysqli_fetch_object($inpendaftaran1)) {
                         ?>
                         <span class="pull-right label label-primary"><?php echo $a->indftr1; ?></span>
                       <?php } ?>
                         <i class="fa fa-envelope" aria-hidden="true"></i>
                         <span>Validasi</span>
                       </a>
                     </li>
                     <li>
                       <a href="?f=bodynikah">
                         <span class="pull-right label label-primary"></span>
                         <i class="fa fa-table" aria-hidden="true"></i>
                         <span>Data Pernikahan</span>
                       </a>
                     </li>
                     <?php
                   }
                    ?>
								</ul>
							</nav>

							<hr class="separator" />


							<hr class="separator" />


						</div>

					</div>

				</aside>
				<!-- end: sidebar -->
				<!-- start page -->

				<div class="content">
				  <?php
				error_reporting(0);
				$mod = $_GET['f'];
				if(file_exists('menuadmin/'.$mod.'.php')){
				  include 'menuadmin/'.$mod.'.php';
				} else {
				  include './menuadmin/bodydash.php';
				}
				  ?>
				</div>
					<!-- end: page -->
			</div>


		</section>

		<!-- Vendor -->
		<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="../assets/vendor/select2/select2.js"></script>
		<script src="../assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<!-- ------ -->
		<script src="../assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<!-- ------ -->
		<script src="../assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="../assets/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="../assets/js/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="../assets/js/theme.init.js"></script>


		<!-- Examples -->
		<script src="../assets/js/tables/examples.datatables.default.js"></script>
		<script src="../assets/js/tables/examples.datatables.row.with.details.js"></script>
		<script src="../assets/js/tables/examples.datatables.tabletools.js"></script>
		<!-- ------ -->
		<script src="../assets/js/tables/examples.datatables.editable.js"></script>
	</body>
</html>
