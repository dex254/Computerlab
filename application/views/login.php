<!doctype html>
<html lang="en">


<!-- Mirrored from conirvent.com/dashtreme/demo/vertical/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 12:22:49 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url("assets/images/15.png");?>" type="image/png" />
	<!--plugins-->
	<link href="<?php echo base_url("assets/plugins/simplebar/css/simplebar.css");?>" rel="stylesheet" />
	<link href="<?php echo base_url("assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css");?>" rel="stylesheet" />
	<link href="<?php echo base_url("assets/plugins/metismenu/css/metisMenu.min.css");?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo base_url("assets/css/pace.min.css");?>" rel="stylesheet" />
	<script src="<?php echo base_url("assets/js/pace.min.js");?>"></script>
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/bootstrap-extended.css");?>" rel="stylesheet">
	<link href="<?php echo base_url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap");?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/app.css");?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/icons.css");?>" rel="stylesheet">
	<title>ktvc lab system</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<header class="login-header shadow">
			<nav class="navbar navbar-expand-lg navbar-light bg-dark rounded fixed-top rounded-0 shadow-sm">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="<?php echo base_url("assets/images/15.png");?>" width="140" alt="" />
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item"> <a class="nav-link text-white" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
							</li>
							<li class="nav-item"> <a class="nav-link text-white" href="#"><i class='bx bx-user me-1'></i>About</a>
							</li>
							<li class="nav-item"> <a class="nav-link text-white" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
							</li>
							<li class="nav-item"> <a class="nav-link text-white" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mt-5 mt-lg-0">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign in</h3>
										<p>Don't have an account yet? <a href="authentication-signup-with-header-footer.html">Sign up here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="<?php echo base_url("assets/images/icons/search.svg");?>" width="16" alt="Image Description">
                          <span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
										<?php echo form_open_multipart('login/verify',$attributes); ?>
										<form class="row g-3">

											<?php if(!empty($this->session->flashdata('message'))){?>
											<div class="alert alert-<?php echo $this->session->flashdata('type');?>" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-bell"></i>&times;</span>
	<span class="alert-inner--text"><strong>Having truble</strong> Kindly key in  the correct login info   or contact  the systems admin!</span>
	<?php echo $this->session->flashdata('message');?>
</div><?php }?>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Enter username</label>
												<input type="text"  id="username" name="username"class="form-control"  placeholder="Enter username">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password"   id="password" name="password" class="form-control border-end-0"  value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<footer class="bg-dark shadow-sm p-2 text-center fixed-bottom">
			<p class="mb-0 text-white">Desigened and created by Dennis Kiplagat</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js");?>"></script>
	<!--plugins-->
<script src="<?php echo base_url("assets/js/jquery.min.js");?>"></script>

<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>

<script>
	$(".switcher-btn").on("click", function() {
	$(".switcher-wrapper").toggleClass("switcher-toggled")
	}), $(".close-switcher").on("click", function() {
		$(".switcher-wrapper").removeClass("switcher-toggled")
	}),


	$('#theme1').click(theme1);
	$('#theme2').click(theme2);
	$('#theme3').click(theme3);
	$('#theme4').click(theme4);
	$('#theme5').click(theme5);
	$('#theme6').click(theme6);
	$('#theme7').click(theme7);
	$('#theme8').click(theme8);
	$('#theme9').click(theme9);
	$('#theme10').click(theme10);
	$('#theme11').click(theme11);
	$('#theme12').click(theme12);
	$('#theme13').click(theme13);
	$('#theme14').click(theme14);
	$('#theme15').click(theme15);


	function theme1() {
	  $('body').attr('class', 'bg-theme bg-theme1');
	}

	function theme2() {
	  $('body').attr('class', 'bg-theme bg-theme2');
	}

	function theme3() {
	  $('body').attr('class', 'bg-theme bg-theme3');
	}

	function theme4() {
	  $('body').attr('class', 'bg-theme bg-theme4');
	}

	function theme5() {
	  $('body').attr('class', 'bg-theme bg-theme5');
	}

	function theme6() {
	  $('body').attr('class', 'bg-theme bg-theme6');
	}

	function theme7() {
	  $('body').attr('class', 'bg-theme bg-theme7');
	}

	function theme8() {
	  $('body').attr('class', 'bg-theme bg-theme8');
	}

	function theme9() {
	  $('body').attr('class', 'bg-theme bg-theme9');
	}

	function theme10() {
	  $('body').attr('class', 'bg-theme bg-theme10');
	}

	function theme11() {
	  $('body').attr('class', 'bg-theme bg-theme11');
	}

	function theme12() {
	  $('body').attr('class', 'bg-theme bg-theme12');
	}

	function theme13() {
	  $('body').attr('class', 'bg-theme bg-theme13');
	}

	function theme14() {
	  $('body').attr('class', 'bg-theme bg-theme14');
	}

	function theme15() {
	  $('body').attr('class', 'bg-theme bg-theme15');
	}
	</script>
</body>


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 12:22:49 GMT -->
</html>
