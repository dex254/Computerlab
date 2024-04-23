<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/dashboard-alternate.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 12:13:15 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url("assets/images/5.jpg");?>" type="image/jpg" />
 	<!--plugins-->
 	<link href="<?php echo base_url("assets/plugins/simplebar/css/simplebar.css");?>" rel="stylesheet" />
 <link href="<?php echo base_url("assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css");?>" rel="stylesheet" />
 <link href="<?php echo base_url("assets/plugins/highcharts/css/highcharts-white.css");?>" rel="stylesheet" />
 <link href="<?php echo base_url("assets/plugins/metismenu/css/metisMenu.min.css");?>" rel="stylesheet" />
 <link href="<?php echo base_url("assets/plugins/vectormap/jquery-jvectormap-2.0.2.css");?>" rel="stylesheet" />
 <!-- loader-->
 <link href="<?php echo base_url("assets/css/pace.min.css");?>" rel="stylesheet" />
 <script src="<?php echo base_url("assets/js/pace.min.js");?>"></script>
 <!-- Bootstrap CSS -->
 <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">
 <link href="<?php echo base_url("assets/css/bootstrap-extended.css");?>" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
 <link href="<?php echo base_url("assets/css/app.css");?>" rel="stylesheet">
 <link href="<?php echo base_url("assets/css/icons.css");?>" rel="stylesheet">

 <title>KTLS-🔬🥼🧪 MANAGEMENT SYSTEM</title>
</head>

<body class="bg-theme bg-theme2">
 <!--wrapper-->
 <div class="wrapper">
	 <!--sidebar wrapper -->
	 <div class="sidebar-wrapper" data-simplebar="true">
		 <div class="sidebar-header">
			 <div>

			 </div>
			 <div>
				 <h4  class="logo-text">KTTI LAB  </h4>
			 </div>
			 <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
			 </div>
		 </div>
		 <!--navigation-->
		 <ul class="metismenu" id="menu">
			 <li>
				 <a href="javascript:;" class="has-arrow">
					 <div class="parent-icon"><i class='bx bx-home-circle'></i>
					 </div>
					 <div class="menu-title">Dashboard</div>
				 </a>
				 <ul>
					 <li> <a href="http://localhost/lab/index.php/dash"><i class="bx bx-right-arrow-alt"></i>Home</a>
					 </li>

				 </ul>
			 </li>
			 <li>
				 <a href="<?php echo base_url('index.php/dennis/create/');?>" class="has-arrow">
					 <div class="parent-icon"><i class="bx bx-category"></i>
					 </div>
					 <div class="menu-title">REQUISITIONS</div>
				 </a>

			 </li>
			 <li class="menu-label">🛂.LEND & RETARNS</li>

			 <li>
				 <a href="javascript:;" class="has-arrow">
					 <div class="parent-icon"><i class='bx bx-cart'></i>
					 </div>
					 <div class="menu-title">Borrowing</div>
				 </a>
				 <ul>
					 <li> <a href="<?php echo base_url('index.php/borrow/create/');?>"><i class="bx bx-right-arrow-alt"></i>LENDING</a>
					 </li>
					 <li> <a href="<?php echo base_url('index.php/borrow/');?>"><i class="bx bx-right-arrow-alt"></i>LENDING LIST</a>
					 </li>

				 </ul>
			 </li>


			 <li>
				 <a class="has-arrow" href="javascript:;">
					 <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
					 </div>
					 <div class="menu-title">RETARNS</div>
				 </a>
				 <ul>
					 <li> <a href="<?php echo base_url('index.php/ritan/create/');?>"><i class="bx bx-right-arrow-alt"></i>RETARNS</a>
					 </li>
					 <li> <a href="<?php echo base_url('index.php/ritan/');?>"><i class="bx bx-right-arrow-alt"></i>RETAENS LIST</a>
					 </li>

				 </ul>
			 </li>
			 <li class="menu-label">RECORDS OF ITEMS</li>
			 <li>
				 <a class="has-arrow" href="javascript:;">
					 <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
					 </div>
					 <div class="menu-title">LAB & OFFICE</div>
				 </a>
				 <ul>
					 <li> <a href="<?php echo base_url('index.php/labin/');?>"><i class="bx bx-right-arrow-alt"></i>LAB INVENTORY</a>
					 </li>
					 <li> <a href="<?php echo base_url('index.php/offinvan/');?>"><i class="bx bx-right-arrow-alt"></i>OFFICE INVENTORY</a>
					 </li>

				 </ul>
			 </li>

			 <li class="menu-label">SECURITY</li>
			 <li>
				 <a class="has-arrow" href="javascript:;">
					 <div class="parent-icon"><i class="bx bx-lock"></i>
					 </div>
					 <div class="menu-title">USER MANAGEMENT</div>
				 </a>
				 <ul>

					 </li>
					 <li> <a href="<?php echo base_url('index.php/users/create/');?>" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign UP </a>
					 </li>

				 </ul>
			 </li>
			 <li>
				 <a href="<?php echo base_url('index.php/users/');?>">
					 <div class="parent-icon"><i class="bx bx-user-circle"></i>
					 </div>
					 <div class="menu-title">SYSTEM USERS</div>
				 </a>
			 </li>





			 <li>
				 <a href="<?php echo base_url('index.php/others/');?>" target="_blank">
					 <div class="parent-icon"><i class="bx bx-folder"></i>
					 </div>
					 <div class="menu-title">REPORTS A.O.B</div>
				 </a>
			 </li>
			 <li>
				 <a href="<?php echo base_url('index.php/help/');?>" target="_blank">
					 <div class="parent-icon"><i class="bx bx-support"></i>
					 </div>
					 <div class="menu-title">HELP</div>
				 </a>
			 </li>
		 </ul>
		 <!--end navigation-->
	 </div>
	 <!--end sidebar wrapper -->
	 <!--start header -->
	 <header>
		 <div class="topbar d-flex align-items-center">
			 <nav class="navbar navbar-expand">
				 <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
				 </div>
				 <div class="search-bar flex-grow-1">
					 <div class="position-relative search-bar-box">
						 <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
						 <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
					 </div>
				 </div>
				

				 <div class="user-box dropdown">
					 <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?php echo base_url('#');?>" role="button" data-bs-toggle="dropdown" aria-expanded="">
						 <img src="<?php echo base_url('assets/images/5.jpg');?>" class="user-img" alt="user avatar">
						 <div class="user-info ps-3">
							 <p class="user-name mb-0"><?php echo $login['fullName'];?></p>
							 <p class="designattion mb-0"><?php echo $login['username'];?></p>
						 </div>
					 </a>
					 <ul class="dropdown-menu dropdown-menu-end">
						 <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span><?php echo $login['username'];?></span></a>
						 </li>
						 <li><a class="dropdown-item" href="<?php echo base_url('index.php/dennis/');?>"><i class="bx bx-cog"></i><span>Requisition</span></a>
						 </li>
						 <li><a class="dropdown-item" href="<?php echo base_url('index.php/offinvan/');?>"><i class='bx bx-home-circle'></i><span>Office invantory</span></a>
						 </li>
						 <li><a class="dropdown-item" href="<?php echo base_url('index.php/borrow/');?>"><i class='bx bx-dollar-circle'></i><span>Borrowing</span></a>
						 </li>
						 <li><a class="dropdown-item" href="<?php echo base_url('index.php/labin/');?>"><i class='bx bx-download'></i><span>lab invantory</span></a>
						 </li>
						 <li><a class="dropdown-item" href="<?php echo base_url('index.php/ritan/');?>"><i class='bx bx-download'></i><span>Retarns</span></a>
						 </li>
						 <li>
							 <div class="dropdown-divider mb-0"></div>
						 </li>
						 <li><a class="dropdown-item" href="<?php echo base_url('index.php/login/logout/');?>"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
						 </li>
					 </ul>
				 </div>
			 </nav>
		 </div>
	 </header>
